<?php

namespace App\TeamBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;

/**
 * USEFULL_DESCRIPTION_HERE
 *
 * @author Tan SEZER <t.sezer@youwe.nl>
 *
 * @MongoDB\Document(collection="players")
 */
class Player
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     * @Assert\Country()
     */
    protected $country;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     * @Assert\Regex("/[a-zA-Z]+/")
     */
    protected $name;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     * @Assert\Regex("/[a-zA-Z]+/")
     */
    protected $surname;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 1,
     *      max = 99,
     *      minMessage = "You must be at least {{ limit }} number to enter",
     *      maxMessage = "You cannot be enter than {{ limit }} number"
     * )
     */
    protected $number;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $position;

    /**
     * @MongoDB\Field(type="datetime")
     * @Assert\NotBlank()
     * @Assert\DateTime()
     */
    protected $birthDate;

    public function getId()
    {
        return $this->id;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getBirthdate()
    {
        return $this->birthDate;
    }

    public function setBirthdate($birthDate)
    {
        $this->birthDate = $birthDate;
    }
}
