<?php

namespace App\Controller;

use App\Entity\Formulaire;
use App\Entity\FormulaireParticipant;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireController extends AbstractController
{
    /**
     * @Route("/formulaire", name="formulaire")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {
        $donnees = $this->getDoctrine()->getRepository(Formulaire::class)->findBy([],['dates' => 'desc']);

        $formulaire = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );

        return $this->render('formulaire/index.html.twig', [
            'controller_name' => 'FormulaireController',
            'formulaires' => $formulaire,
        ]);
    }

    /**
     * @Route("/formulaire/{id}", name="showform")
     */

    public function show($id, Request $request, ManagerRegistry $managerRegistry)
    {
        $formulaireAll = $this->getDoctrine()
            ->getRepository(Formulaire::class)
            ->find($id);


        $formulaire = new FormulaireParticipant();
        $formBuilder = $this->createFormBuilder($formulaire);
        $formBuilder
            ->add('nom', TextType::class)
            ->add('prenom',TextType::class)
            ->add('tel', TextType::class)
            ->add('mail',      EmailType::class)
            ->add('save',      SubmitType::class);
        $formBuilder->remove('est_membre');
        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $formulaire->setDate(new \DateTime('now'));
            $is_member = $request->request->get('est_membre');
            $formulaire->setEstMembre($is_member);
            $uri = $request->getUri();
            $formulaire->setLien($uri);

            $em = $managerRegistry->getManager();
            $em->persist($formulaire);
            $em->flush();
        }

        if (!$formulaire) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->render('formulaire/show.html.twig', [
            'formulaire' => $formulaireAll,
            'form' => $form->createView(),
            'url' => $request->getUri(),
        ]);
    }

}
