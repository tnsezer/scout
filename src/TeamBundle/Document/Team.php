<?php

namespace App\TeamBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;

/**
 * @MongoDB\Document(collection="teams")
 */
class Team
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
     */
    protected $city;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $teamName;

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

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getTeam()
    {
        return $this->teamName;
    }

    public function setTeam($teamName)
    {
        $this->teamName = $teamName;
    }
}
