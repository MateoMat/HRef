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
    
    
    
    

    /**
     * Set position
     *
     * @param string $position
     *
     * @return User
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     *
     * @return User
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set promoLine
     *
     * @param string $promoLine
     *
     * @return User
     */
    public function setPromoLine($promoLine)
    {
        $this->promoLine = $promoLine;

        return $this;
    }

    /**
     * Get promoLine
     *
     * @return string
     */
    public function getPromoLine()
    {
        return $this->promoLine;
    }
}
