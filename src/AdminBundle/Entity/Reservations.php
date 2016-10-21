<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservations
 *
 * @ORM\Table(name="reservations")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ReservationsRepository")
 */
class Reservations
{
    // my code
            /**
             * @ORM\ManyToOne(targetEntity="Mail", inversedBy="reservations", cascade={"persist"})
             * @ORM\JoinColumn(name="mail_id", referencedColumnName="id", nullable=false)
             */
            protected $mail;



            public function getMail()
            {
                return $this->mail;
            }

            public function setMail(Mail $mail = null)
            {
                $this->mail = $mail;
            }

                    /**
                     * @ORM\ManyToOne(targetEntity="Parties", inversedBy="reservations")
                     * @ORM\JoinColumn(name="party_id", referencedColumnName="id", nullable=false)
                     */
                    private $party;

                    /**
                     * @return mixed
                     */
                    public function getParty()
                    {
                        return $this->party;
                    }

                    /**
                     * @param mixed $party
                     */
                    public function setParty($party)
                    {
                        $this->party = $party;
                    }




    // end of my code

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
     * @ORM\Column(name="nbTickets", type="integer")
     */
    private $nbTickets;


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
     * Set nbTickets
     *
     * @param integer $nbTickets
     * @return Reservations
     */
    public function setNbTickets($nbTickets)
    {
        $this->nbTickets = $nbTickets;

        return $this;
    }

    /**
     * Get nbTickets
     *
     * @return integer 
     */
    public function getNbTickets()
    {
        return $this->nbTickets;
    }
}
