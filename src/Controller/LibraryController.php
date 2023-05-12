<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\BookRepository;
use App\Entity\Book;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    #[Route('/library', name: 'library')]
    public function index(BookRepository $bookRepository): Response
    {
        $books = $bookRepository->findAll();

        return $this->render('library/index.html.twig', [
            'books' => $books,
        ]);
    }


    #[Route('/library/create', name: 'book_create')]
    public function createBook(): Response
    {
        return $this->render('library/create-form.html.twig');
    }

    #[Route('/book/submit', name: 'book_submit', methods: ['POST'])]
    public function handleBookForm(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $name = (string) $request->request->get('name');
        $title = (string) $request->request->get('title');
        $isbn = $request->request->getInt('isbn');
        $image = (string) $request->request->get('image');        

        $book = new Book();
        $book->setName((string) $name);
        $book->setTitle((string) $title);
        $book->setIsbn($isbn);
        $book->setImage((string) $image);

        $entityManager->persist($book);
        $entityManager->flush();

        $bookId = $book->getId();

        return $this->redirectToRoute('read', ['id' => $bookId]);
    }

    #[Route('/read/{id}', name: 'read')]
    public function read(Book $book): Response
    {
        return $this->render('library/read.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/book/delete/{id}', name: 'book_delete_by_id')]
    public function deleteBookById(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Book::class)->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $entityManager->remove($book);
        $entityManager->flush();

        return $this->redirectToRoute('library');
    }

    #[Route('/book/edit/{id}', name: 'book_edit_by_id')]
    public function editBook(Request $request, ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Book::class)->find($id);

        if (!$book) {
            throw $this->createNotFoundException('No book found for id '.$id);
        }

        if ($request->getMethod() === 'POST') {
            $book->setName((string) $request->request->get('name'));
            $book->setTitle((string) $request->request->get('title'));
            $book->setIsbn((int) $request->request->get('isbn'));
            $book->setImage((string) $request->request->get('image'));

            $entityManager->flush();

            return $this->redirectToRoute('read', ['id' => $id]);
        }

        return $this->render('library/edit.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/api/library/books', name: 'api_library', methods: ['GET'])]
    public function getLibraryBooks(BookRepository $bookRepository): JsonResponse
    {
        $books = $bookRepository->findAll();

        $bookArray = [];
        foreach ($books as $book) {
            $bookArray[] = [
                'id' => $book->getId(),
                'name' => $book->getName(),
                'title' => $book->getTitle(),
                'isbn' => $book->getIsbn(),
                'image' => $book->getImage(),
            ];
        }

        return $this->json([
            'books' => $bookArray
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }

    #[Route('/api/library/book/{isbn}', name: 'api_library_book', methods: ['GET'])]
    public function getBookByISBN(string $isbn, BookRepository $bookRepository): JsonResponse
    {
        $book = $bookRepository->findOneBy(['isbn' => $isbn]);

        if (!$book) {
            return $this->json(['error' => 'Book not found'], 404);
        }

        $bookData = [
            'id' => $book->getId(),
            'name' => $book->getName(),
            'title' => $book->getTitle(),
            'isbn' => $book->getIsbn(),
            'image' => $book->getImage(),
        ];

        return $this->json([
            'book' => $bookData
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }
}
