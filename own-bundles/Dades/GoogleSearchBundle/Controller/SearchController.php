<?php

namespace Dades\GoogleSearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Dades\GoogleSearchBundle\Services\GoogleSearchService;

class SearchController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     */
    public function indexAction(Request $request, GoogleSearchService $googleSearchService)
    {
        $googleSearchService->search([]);
        return new Response("bla bla bla");
    }
}