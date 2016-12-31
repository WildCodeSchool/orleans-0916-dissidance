<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mail
 *
 * @ORM\Table(name="mail")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\MailRepository")
 */
class Mail
{
    /**
     * @ORM\OneToMany(targetEntity="Reservation", mappedBy="mail")
     */
    private $reservation;
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
     * @ORM\Column(name="mail", type="string", length=255, unique=true)
     */
    private $mail;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Mail
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
     * @return mixed
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @param mixed $reservation
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reservation
     *
     * @param \BackBundle\Entity\Reservation $reservation
     *
     * @return Mail
     */
    public function addReservation(\BackBundle\Entity\Reservation $reservation)
    {
        $this->reservation[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \BackBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\BackBundle\Entity\Reservation $reservation)
    {
        $this->reservation->removeElement($reservation);
    }
}
