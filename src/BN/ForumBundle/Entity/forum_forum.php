<?php

namespace BN\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * forum_forum
 *
 * @ORM\Table(name="forum_forum")
 * @ORM\Entity(repositoryClass="BN\ForumBundle\Repository\forum_forumRepository")
 */
class forum_forum
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
     * @ORM\Column(name="forum_id", type="integer")
     */
    private $forumId;

    /**
     * @var int
     *
     * @ORM\Column(name="cat_id", type="integer")
     */
    private $catId;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_name", type="string", length=255)
     */
    private $forumName;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_desc", type="string", length=255)
     */
    private $forumDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_ordre", type="string", length=255)
     */
    private $forumOrdre;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_last_post_id", type="integer")
     */
    private $forumLastPostId;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_topic", type="string", length=255)
     */
    private $forumTopic;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_post", type="string", length=255)
     */
    private $forumPost;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_view", type="string", length=255)
     */
    private $authView;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_post", type="string", length=255)
     */
    private $authPost;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_topic", type="string", length=255)
     */
    private $authTopic;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_annonce", type="string", length=255)
     */
    private $authAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_modo", type="string", length=255)
     */
    private $authModo;


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
     * Set forumId
     *
     * @param integer $forumId
     *
     * @return forum_forum
     */
    public function setForumId($forumId)
    {
        $this->forumId = $forumId;

        return $this;
    }

    /**
     * Get forumId
     *
     * @return int
     */
    public function getForumId()
    {
        return $this->forumId;
    }

    /**
     * Set catId
     *
     * @param integer $catId
     *
     * @return forum_forum
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
     * Set forumName
     *
     * @param string $forumName
     *
     * @return forum_forum
     */
    public function setForumName($forumName)
    {
        $this->forumName = $forumName;

        return $this;
    }

    /**
     * Get forumName
     *
     * @return string
     */
    public function getForumName()
    {
        return $this->forumName;
    }

    /**
     * Set forumDesc
     *
     * @param string $forumDesc
     *
     * @return forum_forum
     */
    public function setForumDesc($forumDesc)
    {
        $this->forumDesc = $forumDesc;

        return $this;
    }

    /**
     * Get forumDesc
     *
     * @return string
     */
    public function getForumDesc()
    {
        return $this->forumDesc;
    }

    /**
     * Set forumOrdre
     *
     * @param string $forumOrdre
     *
     * @return forum_forum
     */
    public function setForumOrdre($forumOrdre)
    {
        $this->forumOrdre = $forumOrdre;

        return $this;
    }

    /**
     * Get forumOrdre
     *
     * @return string
     */
    public function getForumOrdre()
    {
        return $this->forumOrdre;
    }

    /**
     * Set forumLastPostId
     *
     * @param integer $forumLastPostId
     *
     * @return forum_forum
     */
    public function setForumLastPostId($forumLastPostId)
    {
        $this->forumLastPostId = $forumLastPostId;

        return $this;
    }

    /**
     * Get forumLastPostId
     *
     * @return int
     */
    public function getForumLastPostId()
    {
        return $this->forumLastPostId;
    }

    /**
     * Set forumTopic
     *
     * @param string $forumTopic
     *
     * @return forum_forum
     */
    public function setForumTopic($forumTopic)
    {
        $this->forumTopic = $forumTopic;

        return $this;
    }

    /**
     * Get forumTopic
     *
     * @return string
     */
    public function getForumTopic()
    {
        return $this->forumTopic;
    }

    /**
     * Set forumPost
     *
     * @param string $forumPost
     *
     * @return forum_forum
     */
    public function setForumPost($forumPost)
    {
        $this->forumPost = $forumPost;

        return $this;
    }

    /**
     * Get forumPost
     *
     * @return string
     */
    public function getForumPost()
    {
        return $this->forumPost;
    }

    /**
     * Set authView
     *
     * @param string $authView
     *
     * @return forum_forum
     */
    public function setAuthView($authView)
    {
        $this->authView = $authView;

        return $this;
    }

    /**
     * Get authView
     *
     * @return string
     */
    public function getAuthView()
    {
        return $this->authView;
    }

    /**
     * Set authPost
     *
     * @param string $authPost
     *
     * @return forum_forum
     */
    public function setAuthPost($authPost)
    {
        $this->authPost = $authPost;

        return $this;
    }

    /**
     * Get authPost
     *
     * @return string
     */
    public function getAuthPost()
    {
        return $this->authPost;
    }

    /**
     * Set authTopic
     *
     * @param string $authTopic
     *
     * @return forum_forum
     */
    public function setAuthTopic($authTopic)
    {
        $this->authTopic = $authTopic;

        return $this;
    }

    /**
     * Get authTopic
     *
     * @return string
     */
    public function getAuthTopic()
    {
        return $this->authTopic;
    }

    /**
     * Set authAnnonce
     *
     * @param string $authAnnonce
     *
     * @return forum_forum
     */
    public function setAuthAnnonce($authAnnonce)
    {
        $this->authAnnonce = $authAnnonce;

        return $this;
    }

    /**
     * Get authAnnonce
     *
     * @return string
     */
    public function getAuthAnnonce()
    {
        return $this->authAnnonce;
    }

    /**
     * Set authModo
     *
     * @param string $authModo
     *
     * @return forum_forum
     */
    public function setAuthModo($authModo)
    {
        $this->authModo = $authModo;

        return $this;
    }

    /**
     * Get authModo
     *
     * @return string
     */
    public function getAuthModo()
    {
        return $this->authModo;
    }
}

