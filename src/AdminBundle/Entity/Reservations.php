<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
             * @ORM\ManyToOne(targetEntity="Email", inversedBy="reservations")
             * @ORM\JoinColumn(name="email_id", referencedColumnName="id")
             * @Assert\Type(type="AppBundle\Entity\Email")
             * @Assert\Valid()
             */
            protected $email;



            public function getEmail()
            {
                return $this->email;
            }

            public function setEmail(Email $email = null)
            {
                $this->email = $email;
            }

                    /**
                     * @ORM\ManyToOne(targetEntity="Parties", inversedBy="reservations")
                     * @ORM\JoinColumn(name="party_id", referencedColumnName="id")
                     */
                    private $party;

                    /**
                     * Get party
                     *
                     * @return integer
                     */
                    public function getParty()
                    {
                        return $this->party;
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
