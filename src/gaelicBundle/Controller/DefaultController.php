<?php

namespace gaelicBundle\Controller;

use gaelicBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use gaelicBundle\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;



class DefaultController extends Controller
{
    public function gaelicAction()
    {
        return $this->render('@gaelic/Default/base.html.twig');
    }
    public function clubAction()
    {
        return $this->render('@gaelic/Default/club.html.twig');
    }
    public function mediaAction()
    {
        return $this->render('@gaelic/Default/media.html.twig');
    }
    public function sponsorsAction()
    {
        return $this->render('@gaelic/Default/partenaire.html.twig');
    }
    public function contactAction(Request $request)
    {
        $Contact = new Contact();

        $form = $this->createForm(ContactType::class, $Contact);

        $formView = $form ->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()){

            $Contact = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($Contact);

            $entityManager->flush();


        }


        return $this->render('@gaelic/Default/contact.html.twig',array(

            'formView' => $formView
        ));
    }
    public function mailAction($nom, \Swift_Mailer $mailer)
    {
        $nom = 'nom';

        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('guiton@yahoo.fr')
            ->setTo('guiton@yahoo.fr')
            ->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    'default/sendmail.html.twig',
                    array('nom' => $nom)
                ),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;

        $mailer->send($message);

        // or, you can also fetch the mailer service this way
        $this->get('mailer')->send($message);

        return $this->render('@gaelic/Default/contact.html.twig'
        );
    }

}
