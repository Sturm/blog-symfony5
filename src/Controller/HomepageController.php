<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomepageController extends AbstractController
{
    public function homepage(ArticleRepository $articleRepository)
    {
        return $this->render('homepage/index.html.twig', [
            'articles' => $articleRepository->findBy([], [], 3),
        ]);
    }
}
