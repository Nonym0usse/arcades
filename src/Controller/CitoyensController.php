<?php

namespace App\Controller;

use App\Entity\Citoyen;
use App\Entity\CompteRendu;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CitoyensController extends AbstractController
{
    /**
     * @Route("/citoyens", name="citoyens")
     */
    public function index()
    {
        $articles = $this->getArticle();
        return $this->render('citoyens/index.html.twig', [
            'articles' => $articles,
            'controller_name' => 'CitoyensController',
        ]);
    }



    public function getArticle()
    {
        $articles = $this->getDoctrine()->getRepository(Citoyen::class)->findBy(array(), array('id' => 'ASC'));

        return $articles;
    }
}
