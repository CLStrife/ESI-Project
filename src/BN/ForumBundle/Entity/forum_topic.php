<?php

namespace BN\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * forum_topic
 *
 * @ORM\Table(name="forum_topic")
 * @ORM\Entity(repositoryClass="BN\ForumBundle\Repository\forum_topicRepository")
 */
class forum_topic
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
     * @ORM\Column(name="topic_id", type="integer")
     */
    private $topicId;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_id", type="integer")
     */
    private $forumId;

    /**
     * @var string
     *
     * @ORM\Column(name="topic_titre", type="string", length=255)
     */
    private $topicTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="topic_createur", type="string", length=255)
     */
    private $topicCreateur;

    /**
     * @var int
     *
     * @ORM\Column(name="topic_vu", type="integer")
     */
    private $topicVu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="topic_time", type="date")
     */
    private $topicTime;

    /**
     * @var string
     *
     * @ORM\Column(name="topic_genre", type="string", length=255)
     */
    private $topicGenre;

    /**
     * @var int
     *
     * @ORM\Column(name="topic_last_post", type="integer")
     */
    private $topicLastPost;

    /**
     * @var int
     *
     * @ORM\Column(name="topic_first_post", type="integer")
     */
    private $topicFirstPost;

    /**
     * @var int
     *
     * @ORM\Column(name="topic_post", type="integer")
     */
    private $topicPost;


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
     * Set topicId
     *
     * @param integer $topicId
     *
     * @return forum_topic
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
     * Set forumId
     *
     * @param integer $forumId
     *
     * @return forum_topic
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
     * Set topicTitre
     *
     * @param string $topicTitre
     *
     * @return forum_topic
     */
    public function setTopicTitre($topicTitre)
    {
        $this->topicTitre = $topicTitre;

        return $this;
    }

    /**
     * Get topicTitre
     *
     * @return string
     */
    public function getTopicTitre()
    {
        return $this->topicTitre;
    }

    /**
     * Set topicCreateur
     *
     * @param string $topicCreateur
     *
     * @return forum_topic
     */
    public function setTopicCreateur($topicCreateur)
    {
        $this->topicCreateur = $topicCreateur;

        return $this;
    }

    /**
     * Get topicCreateur
     *
     * @return string
     */
    public function getTopicCreateur()
    {
        return $this->topicCreateur;
    }

    /**
     * Set topicVu
     *
     * @param integer $topicVu
     *
     * @return forum_topic
     */
    public function setTopicVu($topicVu)
    {
        $this->topicVu = $topicVu;

        return $this;
    }

    /**
     * Get topicVu
     *
     * @return int
     */
    public function getTopicVu()
    {
        return $this->topicVu;
    }

    /**
     * Set topicTime
     *
     * @param \DateTime $topicTime
     *
     * @return forum_topic
     */
    public function setTopicTime($topicTime)
    {
        $this->topicTime = $topicTime;

        return $this;
    }

    /**
     * Get topicTime
     *
     * @return \DateTime
     */
    public function getTopicTime()
    {
        return $this->topicTime;
    }

    /**
     * Set topicGenre
     *
     * @param string $topicGenre
     *
     * @return forum_topic
     */
    public function setTopicGenre($topicGenre)
    {
        $this->topicGenre = $topicGenre;

        return $this;
    }

    /**
     * Get topicGenre
     *
     * @return string
     */
    public function getTopicGenre()
    {
        return $this->topicGenre;
    }

    /**
     * Set topicLastPost
     *
     * @param integer $topicLastPost
     *
     * @return forum_topic
     */
    public function setTopicLastPost($topicLastPost)
    {
        $this->topicLastPost = $topicLastPost;

        return $this;
    }

    /**
     * Get topicLastPost
     *
     * @return int
     */
    public function getTopicLastPost()
    {
        return $this->topicLastPost;
    }

    /**
     * Set topicFirstPost
     *
     * @param integer $topicFirstPost
     *
     * @return forum_topic
     */
    public function setTopicFirstPost($topicFirstPost)
    {
        $this->topicFirstPost = $topicFirstPost;

        return $this;
    }

    /**
     * Get topicFirstPost
     *
     * @return integer
     */
    public function getTopicFirstPost()
    {
        return $this->topicFirstPost;
    }

    /**
     * Set topicPost
     *
     * @param integer $topicPost
     *
     * @return forum_topic
     */
    public function setTopicPost($topicPost)
    {
        $this->topicPost = $topicPost;

        return $this;
    }

    /**
     * Get topicPost
     *
     * @return integer
     */
    public function getTopicPost()
    {
        return $this->topicPost;
    }

    public function __construct()
    {
        $this->topicTime = new \Datetime('now');
    }
}
