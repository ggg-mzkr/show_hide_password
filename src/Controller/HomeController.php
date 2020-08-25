<?php

namespace App\Controller;

use App\Form\ShowHidePasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $form = $this->createFormBuilder()
            ->add('username', TextType::class)
            ->add('password', ShowHidePasswordType::class)
            ->add('submit', SubmitType::class)
            ->getForm()
        ;

        return $this->render('/home/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
