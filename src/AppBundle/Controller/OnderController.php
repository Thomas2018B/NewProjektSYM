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


    /**
     * @Route("/mailsend", name="homepage")
     */

    public function sendEmail( \Swift_Mailer $mailer)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT p FROM AppBundle:customer p ');
        $custos = $query->getResult();


        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT r FROM AppBundle:email_addresses r WHERE r.active > 0 ');
        $prod = $query->getResult();
       foreach($prod as $ziele) {
           foreach ($ziele as $key1 => $value1) {

               $arra[$key1] = $value1;
           }

           ##### host finden  ####
           foreach($custos as $zeil)
           {
               foreach ( $zeil as $key2 => $value2 )
               {
                   $customer[$key2] = $value2;
               }

               if ($arra['customerId'] == $customer['id']) {

########################################################

        $message = (new \Swift_Message('Hello viele Grüße von UNS '))

            ->setFrom('wernfriedtest3@gmail.com')
            ->setTo($arra['emailAdress'] )
            ->setBody(
                $this->render('mailsend.html.twig', array('customer' => $customer ))
            )
        ;
        $mailer->send($message);

#########################################################
                   ; }
           }
       }




       return $this->render('mail.html.twig');
    }


}