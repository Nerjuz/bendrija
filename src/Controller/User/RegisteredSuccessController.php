<?php

namespace App\Controller\User;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisteredSuccessController extends AbstractController
{
    /**
     * @Route("/sucess", name="user_register_success")
     */
    public function __invoke(): Response
    {
        return $this->render(
            'user/success.html.twig',
            [

            ]
        );
    }
}
