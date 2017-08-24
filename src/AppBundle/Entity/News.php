<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsRepository")
 */
class News
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\Length(min=10)
     */
    private $description;

    /**
     * @var |ArrayCollection string
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Category", inversedBy="tags")
     * @ORM\JoinTable("news_category_table")
     * @ORM\OrderBy({"id": "ASC"})
     */
    private $tags;

    /**
     * @var int
     *
     * @ORM\Column(name="langId", type="smallint")
     */
    private $langId;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="smallint")
     */
    private $active;

    /**
     * @var int
     *
     * @ORM\Column(name="remove", type="smallint")
     */
    private $remove;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="datetime")
     * @Assert\DateTime
     */
    private $createDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     * @Assert\DateTime
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="seoTitle", type="string", length=165, nullable=true)
     */
    private $seoTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="seoKeywords", type="text", nullable=true)
     */
    private $seoKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="seoDescription", type="string", length=165, nullable=true)
     */
    private $seoDescription;

    /**
     *
     * @ORM\Column(name="imageUrl", type="string")
     */
    private $imageUrl;

    public function __construct()
    {
        $this->createDate = new \DateTime('now');
        $this->tags = new ArrayCollection();
        $this->active = 1;
        $this->langId = 1;
        $this->remove = 0;
    }

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
     * Set title
     * @param string $title
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return News
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return News
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set langId
     *
     * @param integer $langId
     *
     * @return News
     */
    public function setLangId($langId)
    {
        $this->langId = $langId;

        return $this;
    }

    /**
     * Get langId
     *
     * @return int
     */
    public function getLangId()
    {
        return $this->langId;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return News
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set remove
     *
     * @param integer $remove
     *
     * @return News
     */
    public function setRemove($remove)
    {
        $this->remove = $remove;

        return $this;
    }

    /**
     * Get remove
     *
     * @return int
     */
    public function getRemove()
    {
        return $this->remove;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return News
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return News
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set seoTitle
     *
     * @param string $seoTitle
     *
     * @return News
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set seoKeywords
     *
     * @param string $seoKeywords
     *
     * @return News
     */
    public function setSeoKeywords($seoKeywords)
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    /**
     * Get seoKeywords
     *
     * @return string
     */
    public function getSeoKeywords()
    {
        return $this->seoKeywords;
    }

    /**
     * Set seoDescription
     *
     * @param string $seoDescription
     *
     * @return News
     */
    public function setSeoDescription($seoDescription)
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    /**
     * Get seoDescription
     *
     * @return string
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }

    /**
     * Get imageUlr
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set imageUrl
     * @param string $setImageUrl
     * @return News
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }


}

