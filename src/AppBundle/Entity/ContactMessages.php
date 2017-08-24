<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactMessages
 *
 * @ORM\Table(name="contact_messages")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactMessagesRepository")
 */
class ContactMessages
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
     * @ORM\Column(name="nameSurname", type="string", length=255)
     */
    private $nameSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=140)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=25)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=25, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="messageTitle", type="string", length=255)
     */
    private $messageTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="ipAddress", type="string", length=255, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ipCountry", type="string", length=20, nullable=true)
     */
    private $ipCountry;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sendDate", type="datetime")
     */
    private $sendDate;

    /**
     * @var int
     *
     * @ORM\Column(name="remove", type="smallint")
     */
    private $remove;

    /**
     * @var int
     *
     * @ORM\Column(name="readByAdmin", type="smallint")
     */
    private $readByAdmin;

    /**
     * @var int
     *
     * @ORM\Column(name="important", type="smallint")
     */
    private $important;

    /**
     * @var string
     *
     * @ORM\Column(name="attachment", type="string", length=255, nullable=true)
     */
    private $attachment;

    /**
     * @var string
     *
     * @ORM\Column(name="backMessage", type="text", nullable=true)
     */
    private $backMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="backMessageDate", type="datetime", nullable=true)
     */
    private $backMessageDate;

    public function __construct()
    {
        $this->remove = 0;
        $this->readByAdmin = 0;
        $this->important = 0;
        $this->sendDate = new \DateTime('now');
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
     * Set nameSurname
     *
     * @param string $nameSurname
     *
     * @return ContactMessages
     */
    public function setNameSurname($nameSurname)
    {
        $this->nameSurname = $nameSurname;

        return $this;
    }

    /**
     * Get nameSurname
     *
     * @return string
     */
    public function getNameSurname()
    {
        return $this->nameSurname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return ContactMessages
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return ContactMessages
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
     * Set fax
     *
     * @param string $fax
     *
     * @return ContactMessages
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
     * Set address
     *
     * @param string $address
     *
     * @return ContactMessages
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
     * Set messageTitle
     *
     * @param string $messageTitle
     *
     * @return ContactMessages
     */
    public function setMessageTitle($messageTitle)
    {
        $this->messageTitle = $messageTitle;

        return $this;
    }

    /**
     * Get messageTitle
     *
     * @return string
     */
    public function getMessageTitle()
    {
        return $this->messageTitle;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return ContactMessages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return ContactMessages
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set ipCountry
     *
     * @param string $ipCountry
     *
     * @return ContactMessages
     */
    public function setIpCountry($ipCountry)
    {
        $this->ipCountry = $ipCountry;

        return $this;
    }

    /**
     * Get ipCountry
     *
     * @return string
     */
    public function getIpCountry()
    {
        return $this->ipCountry;
    }

    /**
     * Set sendDate
     *
     * @param \DateTime $sendDate
     *
     * @return ContactMessages
     */
    public function setSendDate($sendDate)
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * Get sendDate
     *
     * @return \DateTime
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * Set remove
     *
     * @param integer $remove
     *
     * @return ContactMessages
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
     * Set readByAdmin
     *
     * @param integer $readByAdmin
     *
     * @return ContactMessages
     */
    public function setReadByAdmin($readByAdmin)
    {
        $this->readByAdmin = $readByAdmin;

        return $this;
    }

    /**
     * Get readByAdmin
     *
     * @return int
     */
    public function getReadByAdmin()
    {
        return $this->readByAdmin;
    }

    /**
     * Set important
     *
     * @param integer $important
     *
     * @return ContactMessages
     */
    public function setImportant($important)
    {
        $this->important = $important;

        return $this;
    }

    /**
     * Get important
     *
     * @return int
     */
    public function getImportant()
    {
        return $this->important;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     *
     * @return ContactMessages
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @return string
     */
    public function getBackMessage()
    {
        return $this->backMessage;
    }

    /**
     * @param string $backMessage
     */
    public function setBackMessage($backMessage)
    {
        $this->backMessage = $backMessage;
    }

    /**
     * @return \DateTime
     */
    public function getBackMessageDate()
    {
        return $this->backMessageDate;
    }

    /**
     * @param \DateTime $backMessageDate
     */
    public function setBackMessageDate($backMessageDate)
    {
        $this->backMessageDate = $backMessageDate;
    }


}

