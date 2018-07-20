<?php

namespace gaelicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function gaelicAction()
    {
        return $this->render('@gaelic/Default/base.html.twig');
    }
}
