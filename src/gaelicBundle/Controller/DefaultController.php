<?php

namespace gaelicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


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
    public function contactAction()
    {
        return $this->render('@gaelic/Default/contact.html.twig');
    }
}
