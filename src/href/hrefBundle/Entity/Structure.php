<?php

namespace href\hrefBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Structure
 *
 * @ORM\Table(name="structure")
 * @ORM\Entity(repositoryClass="href\hrefBundle\Repository\StructureRepository")
 */
class Structure
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", length=255, unique=true)
     */
    private $symbol;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;
    
    /**
     * @var int
     *
     * @ORM\Column(name="superior_id", type="integer")
     */
    private $superior_id;
    
    /**
     * @var int
     *
     * @ORM\Column(name="promoLine", type="string")
     */
    private $promoLine;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;


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
     * Set symbol
     *
     * @param string $symbol
     *
     * @return Structure
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Structure
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Structure
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
     * Set superior
     *
     * @param integer $superior
     *
     * @return Structure
     */
    public function setSuperior($superior)
    {
        $this->superior = $superior;

        return $this;
    }

    /**
     * Get superior
     *
     * @return integer
     */
    public function getSuperior()
    {
        return $this->superior;
    }

    /**
     * Set promoLine
     *
     * @param integer $promoLine
     *
     * @return Structure
     */
    public function setPromoLine($promoLine)
    {
        $this->promoLine = $promoLine;

        return $this;
    }

    /**
     * Get promoLine
     *
     * @return integer
     */
    public function getPromoLine()
    {
        return $this->promoLine;
    }

    /**
     * Set superiorId
     *
     * @param integer $superiorId
     *
     * @return Structure
     */
    public function setSuperiorId($superiorId)
    {
        $this->superior_id = $superiorId;

        return $this;
    }

    /**
     * Get superiorId
     *
     * @return integer
     */
    public function getSuperiorId()
    {
        return $this->superior_id;
    }
}
