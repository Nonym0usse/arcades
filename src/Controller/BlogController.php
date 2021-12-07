<?php

namespace App\Controller;

use App\Entity\Diaporama;
use App\Entity\Product;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
use Symfony\Component\HttpFoundation\Request; // Nous avons besoin d'accéder à la requête pour obtenir le numéro de page
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {
        $diapo = $this->getDiaporamaTxt();

        $donnees = $this->getDoctrine()->getRepository(Product::class)->findBy([],['dates' => 'desc']);

        $articles = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles,
            'diapo' => $diapo
        ]);
    }


    public function getDiaporamaTxt()
    {
        $articles = $this->getDoctrine()->getRepository(Diaporama::class)->findOneBy([], ['id' => 'desc']);

        return $articles;
    }

    /**
     * @Route("/blog/{id}", name="show")
     */

    public function show($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->render('blog/show.html.twig', [
           'article' => $product
        ]);
    }
}
