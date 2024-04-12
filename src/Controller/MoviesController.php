<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManager;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MoviesController extends AbstractController
{
    #[Route('/second', name: 'second')]
    public function index(EntityManagerInterface $em): Response
    {  
         $repository = $em->getRepository(Movie::class);
         $movies = $repository->findAll();
        dd($movies);
        return $this->render('index.html.twig', 
        [
            'movieTwig' => $movies
        ]);
    }
}
