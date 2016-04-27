<?php

namespace Cook4usBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $chief;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set chief
     *
     * @param boolean $chief
     * @return User
     */
    public function setChief($chief)
    {
        $this->chief = $chief;

        return $this;
    }

    /**
     * Get chief
     *
     * @return boolean 
     */
    public function getChief()
    {
        return $this->chief;
    }
}
