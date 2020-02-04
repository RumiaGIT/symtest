<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index()
    {
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/MainController.php',
        // ]);

        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/welcome/{name?}", name="welcome")
     * @param Request $request
     * @return Response
     */
    public function welcome(Request $request) {
        // dump($request);
        $name = $request->get('name');
        //return new Response('<h1>Welcome ' . $name . ', to this page!</h1>');

        return $this->render('home/welcome.html.twig', [
            'name' => $name,
        ]);
    }
}
