<?php

namespace App\Controller;

use App\Entity\Cotisation;
use App\Form\CotisationType;
use App\Repository\CotisationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface;

class CotisationController extends AbstractController
{

    /**
     * @Route("/inscription", name="inscription")
     */
    public function paypal(Request $request, ManagerRegistry $managerRegistry)
    {
        $cotisation = new Cotisation();
        $form = $this->createForm(CotisationType::class, $cotisation);
        $form->remove('montant');

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){
            $cotisation->setMontant(5);
            $manager = $managerRegistry->getManager();
            $manager->persist($cotisation);
            $manager->flush();
        }
        $msg = "Vous êtes désormais inscris.";

        return $this->render('cotisation/index.html.twig', [
            'form' => $form->createView(),
            'msg' => $msg
        ]);

    }

}
