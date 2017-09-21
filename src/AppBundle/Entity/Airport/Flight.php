<?php

namespace AppBundle\Entity\Airport;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * Flight
 *
 * @ORM\Table(name="flight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Airport\FlightRepository")
 */
class Flight implements ResourceInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="airport", type="string", length=255)
     */
    private $airport;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
      * Set name
      *
      * @param string $name
      *
      * @return Flight
      */
     public function setName($name)
     {
         $this->name = $name;
 
         return $this;
     }
 
     /**
      * Get name
      *
      * @return string
      */
     public function getName()
     {
         return $this->name;
     }
 
     /**
      * Set airport
      *
      * @param string $airport
      *
      * @return Flight
      */
     public function setAirport($airport)
     {
         $this->airport = $airport;
 
         return $this;
     }
 
     /**
      * Get airport
      *
      * @return string
      */
     public function getAirport()
     {
         return $this->airport;
     }
}

