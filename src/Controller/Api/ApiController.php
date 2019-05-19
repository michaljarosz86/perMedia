<?php


namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/api")
 */
class ApiController extends AbstractController
{
    /**
     * @Route("/", name="apiHomepage")
     */
    public function apiHomepage()
    {
        //TODO show all resources in API
        return new JsonResponse("API PAGE");
    }
}