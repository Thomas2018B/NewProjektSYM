<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * email_addresses
 */
class email_addresses
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $customerId;

    /**
     * @var string
     */
    public $emailAdress;

    /**
     * @var string
     */
    public $active;


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
     * Set customerId
     *
     * @param string $customerId
     *
     * @return email_addresses
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set emailAdress
     *
     * @param string $emailAdress
     *
     * @return email_addresses
     */
    public function setEmailAdress($emailAdress)
    {
        $this->emailAdress = $emailAdress;

        return $this;
    }

    /**
     * Get emailAdress
     *
     * @return string
     */
    public function getEmailAdress()
    {
        return $this->emailAdress;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return email_addresses
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Get active
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @ORM\ManyToOne(targetEntity="customer", inversedBy="mailers")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="Id")
     */

    private $customers;


    /**
     * Set customers
     * @param string $customers
     * @return customers
     */
    public function setcustomers($customers)
    {
        $this->customers = $customers;
        return $this;
    }


    /**
     * Get customers
     * @return string
     */
    public function getcustomers()
    {
        return $this->customers;
    }


}
