<?php
/**
 * Created by PhpStorm.
 * User: koudm
 * Date: 08/04/2020
 * Time: 10:12
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function helloWorldAction()
    {
//        return new Response(
//            '<html><body>Coucou</body></html>'
//        );

        return $this->render('Home/helloWorld.html.twig', [
            'nom' => "icii",
        ]);
    }
}