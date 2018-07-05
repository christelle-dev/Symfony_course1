<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function indexAction ()
  {
    /* Phrase Statique:
    return new Response('First Hello World sur Symfony 3.4.12 !');
    */
    // Page HTML statique via twig
    $content = $this->get('templating')
               ->render('OCPlatformBundle:Advert:index.html.twig', ['nom' => 'christelle']);
    return new Response($content);
  }

  public function byeWorldAction ()
  {
    $content = $this->get('templating')
               ->render('OCPlatformBundle:Advert:byeworld.html.twig', ['nom' => 'christelle'] );

    return new Response($content);
  }
}
