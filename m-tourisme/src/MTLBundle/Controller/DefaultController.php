<?php

namespace MTLBundle\Controller;

use MTLBundle\MTLBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AdminBundle\Entity\actu;
use AdminBundle\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;

use AdminBundle\Form\ContactType;

class DefaultController extends Controller
{
    /**
     * @Route("/index", name="accueil")
     */
    public function listeActuIndexAction(Request $request)
    {
        $actus = $this->getDoctrine()
            ->getRepository('AdminBundle:actu')
            ->findAll();

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // create mail transport config
            $transport = \Swift_MailTransport::newInstance();

            // create the message
            $message = \Swift_Message::newInstance()
                ->setSubject('Mail envoyé depuis votre site m-Tourisme Ludique')
                ->setFrom('munier.louise@gmail.com')
                ->setTo('munier.louise0@gmail.com')
                ->setCharset('UTF-8')
                ->setContentType('text/html')
                ->setBody(
                    $this->renderView(
                        'Emails/emailPost.html.twig'
                    ));

            // send mail
            $mailer = \Swift_Mailer::newInstance($transport);
            $mailer->send($message);
//            $this->get('mailer')->send($message);

//            $this->get('session')->getFlashBag()->add('success', 'Votre message à bien été envoyé. Nous vous ferrons un retour dans les plus brefs délais');


            return $this->redirectToRoute('accueil');
        }
        return $this->render('MTLBundle:Default:index.html.twig', array(
            'actus' => $actus,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/listeactu", name="liste_actu")
     */
    public function listeActuPageAction()
    {
        $actus = $this->getDoctrine()
            ->getRepository('AdminBundle:actu')
            ->findAll();
        return $this->render('MTLBundle:Default:listeActu.html.twig', array(
            'actus' => $actus,
        ));
    }

    /**
     * Finds and displays an actu entity.
     *
     * @Route("/actushow/{id}", name="afficher_actu")
     * @Method("GET")
     */
    public function showActuAction(actu $actu)
    {
//        $oneactu = $this->getDoctrine()
//            ->getRepository('AdminBundle:actu')
//            ->findOneById($id);
        return $this->render('MTLBundle:Default:oneActu.html.twig', array(
            'actu' => $actu,
        ));
    }

}
