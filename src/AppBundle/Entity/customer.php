<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * customer
 */
class customer
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $gender;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     * @param string $gender
     * @return customer
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get gender
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @ORM\OneToMany(targetEntity="email_addresses", mappedBy="customers")
     */
    private $mailers;
    public function __construct()
    {
        $this->mailers = new ArrayCollection();
    }


    /**
     * Set mailers
     * @param string $mailers
     * @return customer
     */
    public function setMailers($mailers)
    {
        $this->mailers = $mailers;
        return $this;
    }

    /**
     * Get mailers
     * @return string
     */
    public function getMailers()
    {
        return $this_>mailers;
    }




}

