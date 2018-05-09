<?php

namespace BN\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * forum_category
 *
 * @ORM\Table(name="forum_category")
 * @ORM\Entity(repositoryClass="BN\ForumBundle\Repository\forum_categoryRepository")
 */
class forum_category
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
     * @var int
     *
     * @ORM\Column(name="cat_id", type="integer", unique=true)
     */
    private $catId;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_nom", type="string", length=255)
     */
    private $catNom;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_ordre", type="string", length=255)
     */
    private $catOrdre;


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
     * Set catId
     *
     * @param integer $catId
     *
     * @return forum_category
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get catId
     *
     * @return int
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set catNom
     *
     * @param string $catNom
     *
     * @return forum_category
     */
    public function setCatNom($catNom)
    {
        $this->catNom = $catNom;

        return $this;
    }

    /**
     * Get catNom
     *
     * @return string
     */
    public function getCatNom()
    {
        return $this->catNom;
    }

    /**
     * Set catOrdre
     *
     * @param string $catOrdre
     *
     * @return forum_category
     */
    public function setCatOrdre($catOrdre)
    {
        $this->catOrdre = $catOrdre;

        return $this;
    }

    /**
     * Get catOrdre
     *
     * @return string
     */
    public function getCatOrdre()
    {
        return $this->catOrdre;
    }
}

