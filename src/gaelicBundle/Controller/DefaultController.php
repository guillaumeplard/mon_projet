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



            $Contact = 'contact';


            $message = (new \Swift_Message('Burdigaela'))
                ->setFrom('guillaume.plard@lapiscine.pro')
                ->setTo('guillaume.plard@lapiscine.pro')
                ->setBody($this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    '@gaelic/Default/sendmail.html.twig',
                    array('formView' => $formView)
                ),
                    'text/html');

            $this->get('mailer')->send($message);

            $request->getSession()->getFlashBag()->add('notice', "Votre message a bien été envoyé.");


        }


        return $this->render('@gaelic/Default/contact.html.twig',array(

            'formView' => $formView
        ));
    }
    public function footballgaelicAction()
    {
        return $this->render('@gaelic/Default/footballgaelic.html.twig');
    }


}
