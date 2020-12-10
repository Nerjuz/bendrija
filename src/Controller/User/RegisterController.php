<?php

namespace App\Controller\User;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/", name="user")
     */
    public function __invoke(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user =  $form->getData();

            $entityManager->persist($user);
            $entityManager->flush();

        }

        return $this->render(
            'user/index.html.twig',
            [
                'controller_name' => 'UserController',
                'form' => $form->createView()
            ]
        );
    }
}
