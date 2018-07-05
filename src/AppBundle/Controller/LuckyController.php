<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.06.2018
 * Time: 13:41
 */


// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\customer;
use AppBundle\Entity\email_addresses;

class LuckyController extends Controller
{
    /**
     * @Route("/index")
     * @Route("/*")
     */
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('number.html.twig', array(
            'number' => $number,
        ));
    }


    /**
     * @Route("/mailsend")
     */

    public function ausgabe()
    {
        ##$product = $this->getDoctrine()
         ##   ->getRepository(customer::class)
         ##   ->findOneById('1');

       ## $repository = $this->getDoctrine()->getRepository(customer::class);
       ## $products = $repository->findAll();
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT p
              FROM AppBundle:email_addresses p 
              Where p.active = 1'
        );


       ## 'SELECT u FROM AppBundle:email_addresses p WHERE u.age > 20'

        $products = $query->getResult();


        return $this->render('mail.html.twig', array('number' => $products,));
    }




##### neuer Teil

    public function find()
    {
        $query = $this->getEntityManager()
            ->createQuery(
                'SELECT p, c FROM AppBundle:email_addresses p
           JOIN p.customer c
          Where p.active = 1'
            );

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $exception) {
            return null;
        }
    }

    public function show()
    {  $entityManager = $this->getDoctrine()->getManager();
        $product = $this->getDoctrine()
            ->getRepository(email_addresses::class)
            ->findAll();

        $categorys = $product->getResult();

        return $this->render('mail.html.twig', array('number' =>  $categorys,));
    }



}