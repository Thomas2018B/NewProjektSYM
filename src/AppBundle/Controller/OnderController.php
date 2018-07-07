<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.07.2018
 * Time: 12:01
 */

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OnderController extends Controller
{

    public $zahl = 'gerd0';





    public function Ondermail()
    {
        $number = $this->zahl;
        $blumen = array("Rose", "Tulpe", "Nelke", "Sonnenblume");

        return new Response(
            '<html><body>Lucky number: ' . $number  . '</body></html>'
        );
    }

    /**
     * @Route("/onder", name="homepage")
     */

    public function sendEmail( $name= 'werner' , \Swift_Mailer $mailer)
    {

        $number = $this->zahl;
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