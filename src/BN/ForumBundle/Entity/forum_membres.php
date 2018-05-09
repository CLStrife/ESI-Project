<?php

namespace BN\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * forum_membres
 *
 * @ORM\Table(name="forum_membres")
 * @ORM\Entity(repositoryClass="BN\ForumBundle\Repository\forum_membresRepository")
 */
class forum_membres
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
     * @ORM\Column(name="membre_id", type="integer")
     */
    private $membreId;

    /**
     * @var string
     *
     * @ORM\Column(name="membre_pseudo", type="string", length=255)
     */
    private $membrePseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="membre_mdp", type="string", length=255)
     */
    private $membreMdp;

    /**
     * @var string
     *
     * @ORM\Column(name="membre_email", type="string", length=255)
     */
    private $membreEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="membre_avatar", type="string", length=255)
     */
    private $membreAvatar;

    /**
     * @var string
     *
     * @ORM\Column(name="membre_signature", type="string", length=255)
     */
    private $membreSignature;

    /**
     * @var string
     *
     * @ORM\Column(name="membre_localisation", type="string", length=255)
     */
    private $membreLocalisation;

    /**
     * @var int
     *
     * @ORM\Column(name="membre_inscrit", type="integer")
     */
    private $membreInscrit;

    /**
     * @var int
     *
     * @ORM\Column(name="membre_derniere_visite", type="integer")
     */
    private $membreDerniereVisite;

    /**
     * @var int
     *
     * @ORM\Column(name="member_rang", type="integer")
     */
    private $memberRang;

    /**
     * @var int
     *
     * @ORM\Column(name="membre_post", type="integer")
     */
    private $membrePost;


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
     * Set membreId
     *
     * @param integer $membreId
     *
     * @return forum_membres
     */
    public function setMembreId($membreId)
    {
        $this->membreId = $membreId;

        return $this;
    }

    /**
     * Get membreId
     *
     * @return int
     */
    public function getMembreId()
    {
        return $this->membreId;
    }

    /**
     * Set membrePseudo
     *
     * @param string $membrePseudo
     *
     * @return forum_membres
     */
    public function setMembrePseudo($membrePseudo)
    {
        $this->membrePseudo = $membrePseudo;

        return $this;
    }

    /**
     * Get membrePseudo
     *
     * @return string
     */
    public function getMembrePseudo()
    {
        return $this->membrePseudo;
    }

    /**
     * Set membreMdp
     *
     * @param string $membreMdp
     *
     * @return forum_membres
     */
    public function setMembreMdp($membreMdp)
    {
        $this->membreMdp = $membreMdp;

        return $this;
    }

    /**
     * Get membreMdp
     *
     * @return string
     */
    public function getMembreMdp()
    {
        return $this->membreMdp;
    }

    /**
     * Set membreEmail
     *
     * @param string $membreEmail
     *
     * @return forum_membres
     */
    public function setMembreEmail($membreEmail)
    {
        $this->membreEmail = $membreEmail;

        return $this;
    }

    /**
     * Get membreEmail
     *
     * @return string
     */
    public function getMembreEmail()
    {
        return $this->membreEmail;
    }

    /**
     * Set membreAvatar
     *
     * @param string $membreAvatar
     *
     * @return forum_membres
     */
    public function setMembreAvatar($membreAvatar)
    {
        $this->membreAvatar = $membreAvatar;

        return $this;
    }

    /**
     * Get membreAvatar
     *
     * @return string
     */
    public function getMembreAvatar()
    {
        return $this->membreAvatar;
    }

    /**
     * Set membreSignature
     *
     * @param string $membreSignature
     *
     * @return forum_membres
     */
    public function setMembreSignature($membreSignature)
    {
        $this->membreSignature = $membreSignature;

        return $this;
    }

    /**
     * Get membreSignature
     *
     * @return string
     */
    public function getMembreSignature()
    {
        return $this->membreSignature;
    }

    /**
     * Set membreLocalisation
     *
     * @param string $membreLocalisation
     *
     * @return forum_membres
     */
    public function setMembreLocalisation($membreLocalisation)
    {
        $this->membreLocalisation = $membreLocalisation;

        return $this;
    }

    /**
     * Get membreLocalisation
     *
     * @return string
     */
    public function getMembreLocalisation()
    {
        return $this->membreLocalisation;
    }

    /**
     * Set membreInscrit
     *
     * @param integer $membreInscrit
     *
     * @return forum_membres
     */
    public function setMembreInscrit($membreInscrit)
    {
        $this->membreInscrit = $membreInscrit;

        return $this;
    }

    /**
     * Get membreInscrit
     *
     * @return int
     */
    public function getMembreInscrit()
    {
        return $this->membreInscrit;
    }

    /**
     * Set membreDerniereVisite
     *
     * @param integer $membreDerniereVisite
     *
     * @return forum_membres
     */
    public function setMembreDerniereVisite($membreDerniereVisite)
    {
        $this->membreDerniereVisite = $membreDerniereVisite;

        return $this;
    }

    /**
     * Get membreDerniereVisite
     *
     * @return int
     */
    public function getMembreDerniereVisite()
    {
        return $this->membreDerniereVisite;
    }

    /**
     * Set memberRang
     *
     * @param integer $memberRang
     *
     * @return forum_membres
     */
    public function setMemberRang($memberRang)
    {
        $this->memberRang = $memberRang;

        return $this;
    }

    /**
     * Get memberRang
     *
     * @return int
     */
    public function getMemberRang()
    {
        return $this->memberRang;
    }

    /**
     * Set membrePost
     *
     * @param integer $membrePost
     *
     * @return forum_membres
     */
    public function setMembrePost($membrePost)
    {
        $this->membrePost = $membrePost;

        return $this;
    }

    /**
     * Get membrePost
     *
     * @return int
     */
    public function getMembrePost()
    {
        return $this->membrePost;
    }
}

