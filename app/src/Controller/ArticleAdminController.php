<?php


namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleAdminController extends AbstractController
{
    /**
     * @Route("/admin/article/new")
     */
    public function new(EntityManagerInterface $em)
    {
        $article = new Article();
        $article->setTitle('What\'s going on ' . date('Y-m-d H:i:s'))
            ->setContent("Another boring day");

        $em->persist($article);
        $em->flush();

//        print_r($article);
//        exit;

        return new Response(sprintf("Hiya!\nNew article id: #%d,\ntitle: %s,\ncontent: %s,\ncreated_at: %s,\nupdated_at:%s\n", $article->getId(), $article->getTitle(), $article->getContent(), $article->getCreatedAt()->format('Y-m-d H:i:s'), $article->getUpdatedAt()->format('Y-m-d H:i:s')));
    }
}