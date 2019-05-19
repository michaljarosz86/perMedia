<?php


namespace App\Controller\Api\Data;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/data")
 */
class DataController extends AbstractController
{
    /**
     * @Route("/", name="getData", methods={"GET"})
     */
    public function getData() : JsonResponse
    {
        $dataJson = file_get_contents(__DIR__ . '/../../../../data.json');
        $response = JsonResponse::fromJsonString($dataJson);
     //   var_dump($response);
        return $response;
    }
}