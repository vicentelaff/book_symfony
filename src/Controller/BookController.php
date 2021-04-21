<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookController extends AbstractController
{
    /**
     * @Route("/book", name="app_book", methods={"GET"})
     *
     */
    public function index(): Response
    {
        $data = [
            [
                "name" => "avion",
                "action" => "vole dans les airs"
            ],
            [
                "name" => "bateau",
                "action" => "vogue sur les flots"
            ],
        ];
        // dd($data);
        return $this->render('book/index.html.twig', [
            "data" => $data,
        ]);
    }

    /**
     * @Route("/book/message/{texte}", name="app_book_message", requirements={"texte"="[a-z-A-Z]+"}, methods={"GET"})
     *
     */
    public function message(string $texte = ""): Response
    {
        return new Response("Voici le message: $texte");
    }

    /**
     * @Route("/book/messagejson/{texte}", name="app_book_messagejson", methods={"GET"})
     *
     */
    public function messagejson(string $texte = ""): JsonResponse
    {
        $tab = [
            "titre" => "Le titre",
            "msg" => $texte
        ];
        return new JsonResponse($tab);
    }
}
