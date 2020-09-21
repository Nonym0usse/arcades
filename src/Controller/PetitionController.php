<?php

namespace App\Controller;

use App\Entity\Petition;
use App\Entity\PetitionParticipant;
use Doctrine\Common\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class PetitionController extends AbstractController
{
    /**
     * @Route("/petition", name="petition")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {
        $donnees = $this->getDoctrine()->getRepository(Petition::class)->findBy([],['date' => 'desc']);

        $petitions = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );

        return $this->render('petition/index.html.twig', [
            'controller_name' => 'PetitionController',
            'petitions' => $petitions,
        ]);
    }

    /**
     * @Route("/petition/{id}", name="singlepetition")
     */

    public function singlepetition($id, Request $request, ManagerRegistry $managerRegistry)
    {
        $petition = $this->getDoctrine()
            ->getRepository(Petition::class)
            ->find($id);


        $formPetitionParticipant = new PetitionParticipant();
        $formBuilder = $this->createFormBuilder($formPetitionParticipant);
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

            $formPetitionParticipant->setDate(new \DateTime('now'));
            $is_member = $request->request->get('est_membre');
            $formPetitionParticipant->setEstMembre($is_member);
            $uri = $request->getUri();
            $formPetitionParticipant->setLien($uri);

            $em = $managerRegistry->getManager();
            $em->persist($formPetitionParticipant);
            $em->flush();
        }

        if (!$petition) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->render('petition/singlepetition.html.twig', [
            'petition' => $petition,
            'form' => $form->createView(),
            'url' => $request->getUri()
        ]);
    }

}
