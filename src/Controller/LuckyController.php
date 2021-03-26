<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LuckyController
{


    /**
     * @Route("/lucky_number", name="app_lucky_number")
     *
     * @return Response
     * @throws \Exception
     */
    public function number(Request $request): Response
    {
        $name = $request->query->get('name');

        $number = random_int(0, 100);

        $user = [
            'name' => 'John Doe',
            'place' => 'Lens',
        ];

        dump($user);
        return new Response(
            "<html><body><p>$name - Lucky number: $number</p></body></html>"
        );
    }
}