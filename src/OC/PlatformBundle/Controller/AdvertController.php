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

  public function viewAction ($id)
  {
    /* Generateur d'url
    $url = $this->get('router')
           ->generate('oc_platform_view', array('id'=>$id));
    return new Response("Affichage de l'annonce :" .$id. ". URL: " .$url);*/

    $content = $this->get('templating')
               ->render('OCPlatformBundle:Advert:url.html.twig', ['nom' => 'christelle', 'advert' => $id]);
    return new Response($content);

  }

  public function viewSlugAction ($year, $slug, $format)
  {
    return new Response("Affichage de l'annonce correspondant au slug '" .$slug. "', créée en " .$year. " et au format " .$format. ".");
  }
}
