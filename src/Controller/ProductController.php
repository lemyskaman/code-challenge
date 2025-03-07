<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    //#[Route('/products', name: 'products_list')]
    public function list(): Response
    {
        //cho "called";q
        return new Response('list of elements');
        //return $this->render('conference/index.html.twig', [
        //    'controller_name' => 'ConferenceController',
        //]);
    }

    public function single(): Response
    {
        return  new Response();
    }
    public function create(): Response
    {
        return  new Response();
    }

    public function update(): Response
    {
        return  new Response();
    }

    public function delete(): Response
    {
        return  new Response();
    }



}