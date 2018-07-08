<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 06.07.2018
 * Time: 11:35
 */


// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\customer;
use AppBundle\Entity\email_addresses;


class SendController extends Controller
{





    public function showAction()
    {
        $ergebnis = $this->getDoctrine()
            ->getRepository(customer::class)
            ->findAll();

        foreach($ergebnis as $meine_ergebnis)
        {



            ;};

        return $this->render('test.html.twig', array('number' => $meine_ergebnis));
    }


    public function sendEmail( $meine_ergebnis , \Swift_Mailer $mailer)
    {


        $ziel = array('mail'=> "h.th.leib@gmx.de", 'firstName'=>"Tulpe",'lastName'=> "Nelke");


        $message = (new \Swift_Message('Hello Email'))

            ->setFrom('wernfriedtest3@gmail.com')
            ->setTo('h.th.leib@gmx.de')
            ->setBody(

                $this->render('mailsend.html.twig', array('customer' =>  $ziel ))

            )
        ;

        $mailer->send($message);

        return $this->render('mail.html.twig', array('number' => $ziel  ,));
    }




}