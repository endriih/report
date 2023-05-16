<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\BookRepository;
use App\Entity\Book;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    //Route som tar dig till bibliotekets förstasida
    #[Route('/library', name: 'library')]
    public function index(BookRepository $bookRepository): Response
    {
        $books = $bookRepository->findAll();

        return $this->render('library/index.html.twig', [
            'books' => $books,
        ]);
    }

    //Route som tar dig till en form för att skapa en bok
    #[Route('/library/create', name: 'book_create')]
    public function createBook(): Response
    {
        return $this->render('library/create-form.html.twig');
    }

    //Route som hanterar submit
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

    //Route för att visa en bok baserad på id
    #[Route('/read/{id}', name: 'read')]
    public function read(Book $book): Response
    {
        return $this->render('library/read.html.twig', [
            'book' => $book,
        ]);
    }

    //Route för att radera en bok baserad på id
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

    //Route för att redigera en bok baserad på id
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
}
