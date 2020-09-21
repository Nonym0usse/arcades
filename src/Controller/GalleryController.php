<?php

namespace App\Controller;

use App\Entity\Gallery;
use App\Entity\TextGallery;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {
        $donnees = $this->getDoctrine()->getRepository(Gallery::class)->findBy([],['dates' => 'desc']);
        $donnees2 = $this->getDoctrine()->getRepository(TextGallery::class)->findAll();

        $gallery = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            10 // Nombre de résultats par page
        );

        return $this->render('gallery/index.html.twig', [
            'controller_name' => 'GalleryController',
            'gallery' => $gallery,
            'data' => $donnees2
        ]);
    }

}
