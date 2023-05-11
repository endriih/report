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

        $name = $request->request->get('name');
        $title = $request->request->get('title');
        $isbn = $request->request->getInt('isbn');
        $image = $request->request->get('image');

        $book = new Book();
        $book->setName($name);
        $book->setTitle($title);
        $book->setIsbn($isbn);
        $book->setImage($image);

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
    public function editBook(Request $request,  ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Book::class)->find($id);

        if (!$book) {
            throw $this->createNotFoundException('No book found for id '.$id);
        }

        if ($request->getMethod() === 'POST') {
            $book->setName($request->request->get('name'));
            $book->setTitle($request->request->get('title'));
            $book->setIsbn($request->request->get('isbn'));
            $book->setImage($request->request->get('image'));

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
    
        // Transform the books into an array
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
