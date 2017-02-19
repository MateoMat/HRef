<?php

namespace href\hrefBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use href\hrefBundle\Entity\Group;


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

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * @ORM\ManyToMany(targetEntity="Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;
    
    
    
    /**
     * 
     * @ORM\Column(type="string", length=100)
     * 
     */
    protected $position;
    
    /**
     * 
     * @ORM\Column(type="integer")
     *
     */
    protected $parent;
    
    /**
     * 
     * @ORM\Column(type="string")
     * 
     */
    protected $promoLine;
    
    
    
    
}
