<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Party
 *
 * @ORM\Table(name="party")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\PartyRepository")
 */
class Party
{
    // my code
    /**
     * @ORM\OneToMany(targetEntity="Reservation", mappedBy="party")
     */
    private $reservation;

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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="artist", type="string", length=255)
     */
    private $artist;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="soundcloud", type="string", length=350)
     */
    private $soundcloud;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=10, unique=true)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="imgSlide", type="string", length=300)
     */
    private $imgSlide;

    /**
     * @var string
     *
     * @ORM\Column(name="imgCover", type="string", length=300)
     */
    private $imgCover;


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
     * Set title
     *
     * @param string $title
     * @return Party
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
     * Set artist
     *
     * @param string $artist
     * @return Party
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return string 
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Party
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Party
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set soundcloud
     *
     * @param string $soundcloud
     * @return Party
     */
    public function setSoundcloud($soundcloud)
    {
        $this->soundcloud = $soundcloud;

        return $this;
    }

    /**
     * Get soundcloud
     *
     * @return string 
     */
    public function getSoundcloud()
    {
        return $this->soundcloud;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     * @return Party
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set imgSlide
     *
     * @param string $imgSlide
     * @return Party
     */
    public function setImgSlide($imgSlide)
    {
        $this->imgSlide = $imgSlide;

        return $this;
    }

    /**
     * Get imgSlide
     *
     * @return string 
     */
    public function getImgSlide()
    {
        return $this->imgSlide;
    }

    /**
     * Set imgCover
     *
     * @param string $imgCover
     * @return Party
     */
    public function setImgCover($imgCover)
    {
        $this->imgCover = $imgCover;

        return $this;
    }

    /**
     * Get imgCover
     *
     * @return string
     */
    public function getImgCover()
    {
        return $this->imgCover;
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



}
