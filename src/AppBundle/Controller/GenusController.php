<?php
/**
 * Created by PhpStorm.
 * User: fkato
 * Date: 11.06.17
 * Time: 19:39
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        $notes = [
          'test one',
          'test two',
          'test three'
        ];
        return $this->render('genus/show.html.twig', [
            'name'=> $genusName,
            'notes' => $notes
        ]);
    }

    /**
     * @Route("/genus/{genusName}/notes",name="genus_show_notes")
     * @Method("GET")
     */
    public function getNotesAction()
    {
        $notes =[
          ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'first leanna note', 'Date' => '1978'] ,
          ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'Ryan text note', 'Date' => '2001'] ,
          ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Second leanna note', 'Date' => '2015']
        ];
        $data = ['notes' => $notes];

        return new JsonResponse($data);
    }
}