<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
{
    function __construct()
    {
        $this->createDate = new \DateTime('now');
        $this->active = 1;
        $this->parentId = 1;
        $this->langId = 1;
        $this->remove = 0;
    }

    const NUM_ITEMS = 20;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\News", mappedBy="id" )
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="parentId", type="integer")
     */
    private $parentId;

    /**
     * @var int
     *
     * @ORM\Column(name="sort", type="integer")
     */
    private $sort;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="remove", type="smallint")
     */
    private $remove;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="smallint")
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="datetime")
     */
    private $createDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     */
    private $updateDate;


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
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Category
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Category
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
     * Set remove
     *
     * @param integer $remove
     *
     * @return Category
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
     * Set active
     *
     * @param integer $active
     *
     * @return Category
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
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return Category
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
     * @return Category
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
     * Get sort
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set sort
     *
     * @param int $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }



}

