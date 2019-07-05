<?php

namespace App\Controller;

use App\Entity\User;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Rest\Get("/user", name="user")
     */
    public function index()
    {
        $user = new User();
        $user->setEmail("thibault.barolatmassole@gmail.com");

        $view = new View($user);
        return $view;
    }
}
