<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactAddress
 *
 * @ORM\Table(name="contact_address")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactAddressRepository")
 */
class ContactAddress
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
     * @ORM\Column(name="companyName", type="string", length=255, nullable=true)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=25)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneTwo", type="string", length=25, nullable=true)
     */
    private $phoneTwo;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=150, nullable=true, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=25, nullable=true)
     */
    private $fax;

    /**
     * @var int
     *
     * @ORM\Column(name="remove", type="smallint")
     */
    private $remove;

    /**
     * @var int
     *
     * @ORM\Column(name="sort", type="smallint")
     */
    private $sort;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="smallint")
     */
    private $active;

    /**
     * @var int
     *
     * @ORM\Column(name="langId", type="smallint")
     */
    private $langId;

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
     * @var string
     *
     * @ORM\Column(name="cityId", type="string", length=50, nullable=true)
     */
    private $cityId;

    /**
     * @var string
     *
     * @ORM\Column(name="authPerson", type="string", length=255, nullable=true)
     */
    private $authPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinate", type="string", length=140, nullable=true)
     */
    private $coordinate;

    public function __construct()
    {
        $this->active = 1;
        $this->remove = 0;
        $this->createDate = new \DateTime('now');
        $this->langId = 1;
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
     *
     * @param string $title
     *
     * @return ContactAddress
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
     * Set companyName
     *
     * @param string $companyName
     *
     * @return ContactAddress
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return ContactAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return ContactAddress
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phoneTwo
     *
     * @param string $phoneTwo
     *
     * @return ContactAddress
     */
    public function setPhoneTwo($phoneTwo)
    {
        $this->phoneTwo = $phoneTwo;

        return $this;
    }

    /**
     * Get phoneTwo
     *
     * @return string
     */
    public function getPhoneTwo()
    {
        return $this->phoneTwo;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return ContactAddress
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return ContactAddress
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set remove
     *
     * @param integer $remove
     *
     * @return ContactAddress
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
     * Set sort
     *
     * @param integer $sort
     *
     * @return ContactAddress
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return ContactAddress
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
     * Set langId
     *
     * @param integer $langId
     *
     * @return ContactAddress
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
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return ContactAddress
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
     * @return ContactAddress
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
     * Set cityId
     *
     * @param string $cityId
     *
     * @return ContactAddress
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return string
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set authPerson
     *
     * @param string $authPerson
     *
     * @return ContactAddress
     */
    public function setAuthPerson($authPerson)
    {
        $this->authPerson = $authPerson;

        return $this;
    }

    /**
     * Get authPerson
     *
     * @return string
     */
    public function getAuthPerson()
    {
        return $this->authPerson;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ContactAddress
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set coordinate
     *
     * @param string $coordinate
     *
     * @return ContactAddress
     */
    public function setCoordinate($coordinate)
    {
        $this->coordinate = $coordinate;

        return $this;
    }

    /**
     * Get coordinate
     *
     * @return string
     */
    public function getCoordinate()
    {
        return $this->coordinate;
    }
}

