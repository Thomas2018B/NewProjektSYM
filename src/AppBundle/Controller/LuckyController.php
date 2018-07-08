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
use Doctrine\ORM\Mapping as ORM;


class LuckyController extends Controller
{
    /**
     * @Route("/index")
     * @Route("/start")
     * @Route("/")
     * @Route("/*")
     */
    public function index()
    {


        return $this->render('number.html.twig');
    }







}