<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomepageController extends AbstractController
{
    public function homepage()
    {
        return $this->render('homepage/index.html.twig', []);
    }
}
