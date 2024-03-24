<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParamController
{
    #[Route('/query', name: 'get-query-params', methods: ['GET'])]
    public function getQueryParams(Request $request): Response
    {
        $name = $request->query->get('name');
        $email = $request->query->get('email');

        return new JsonResponse([
            'name' => $name,
            'email' => $email,
        ]);
    }
}