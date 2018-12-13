<?php

namespace App\TeamBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;

/**
 * @MongoDB\Document(collection="scouts")
 */
class Scout
{
    /**
     * @MongoDB\Id(strategy="auto")
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
     */
    protected $job;

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

    public function getJob()
    {
        return $this->job;
    }

    public function setJob($job)
    {
        $this->job = $job;
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
