<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ArticleController extends AbstractController
{
    public function viewArticle(Article $article)
    {
        return $this->render('article/view_article.html.twig', [
            'article' => $article,
        ]);
    }
}
