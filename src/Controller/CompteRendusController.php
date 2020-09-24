<?php

namespace App\Controller;

use App\Entity\CompteRendu;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompteRendusController extends AbstractController
{
    /**
     * @Route("/compte/rendus", name="compte_rendus")
     */
    public function index()
    {
        $articles = $this->getCompteRendu();

        return $this->render('compte_rendus/index.html.twig', [
            'articles' => $articles,
            'controller_name' => 'CompteRendusController',
        ]);
    }

    /**
     * @Route("/detail/{id}", name="show_compterendu")
     */

    public function showCompteRendu($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(CompteRendu::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->render('compte_rendus/show.html.twig', [
            'article' => $product
        ]);
    }

    public function getCompteRendu()
    {
        $articles = $this->getDoctrine()->getRepository(CompteRendu::class)->findBy(array(), array('id' => 'DESC'));
        return $articles;
    }
}
