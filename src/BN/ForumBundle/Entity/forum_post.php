<?php

namespace BN\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * forum_post
 *
 * @ORM\Table(name="forum_post")
 * @ORM\Entity(repositoryClass="BN\ForumBundle\Repository\forum_postRepository")
 */
class forum_post
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
     * @ORM\Column(name="post_id", type="integer")
     */
    private $postId;

    /**
     * @var int
     *
     * @ORM\Column(name="post_createur", type="integer")
     */
    private $postCreateur;

    /**
     * @var string
     *
     * @ORM\Column(name="post_texte", type="text")
     */
    private $postTexte;

    /**
     * @var int
     *
     * @ORM\Column(name="post_time", type="integer")
     */
    private $postTime;

    /**
     * @var int
     *
     * @ORM\Column(name="topic_id", type="integer")
     */
    private $topicId;

    /**
     * @var int
     *
     * @ORM\Column(name="post_forum_id", type="integer")
     */
    private $postForumId;


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
     * Set postId
     *
     * @param integer $postId
     *
     * @return forum_post
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set postCreateur
     *
     * @param integer $postCreateur
     *
     * @return forum_post
     */
    public function setPostCreateur($postCreateur)
    {
        $this->postCreateur = $postCreateur;

        return $this;
    }

    /**
     * Get postCreateur
     *
     * @return int
     */
    public function getPostCreateur()
    {
        return $this->postCreateur;
    }

    /**
     * Set postTexte
     *
     * @param string $postTexte
     *
     * @return forum_post
     */
    public function setPostTexte($postTexte)
    {
        $this->postTexte = $postTexte;

        return $this;
    }

    /**
     * Get postTexte
     *
     * @return string
     */
    public function getPostTexte()
    {
        return $this->postTexte;
    }

    /**
     * Set postTime
     *
     * @param integer $postTime
     *
     * @return forum_post
     */
    public function setPostTime($postTime)
    {
        $this->postTime = $postTime;

        return $this;
    }

    /**
     * Get postTime
     *
     * @return int
     */
    public function getPostTime()
    {
        return $this->postTime;
    }

    /**
     * Set topicId
     *
     * @param integer $topicId
     *
     * @return forum_post
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get topicId
     *
     * @return int
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Set postForumId
     *
     * @param integer $postForumId
     *
     * @return forum_post
     */
    public function setPostForumId($postForumId)
    {
        $this->postForumId = $postForumId;

        return $this;
    }

    /**
     * Get postForumId
     *
     * @return int
     */
    public function getPostForumId()
    {
        return $this->postForumId;
    }
}

