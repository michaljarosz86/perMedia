<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class BaseController extends AbstractController
{
    /**
     * //@Route("/", name="app_homepage")
     * //TODO homepage, now redirect in annotations.yaml
     */
    public function homepage()
    {
        return new JsonResponse("API APPLICATION");
    }
}