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
 * @MongoDB\Document(collection="schedule")
 */
class Schedule
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Scout", storeAs="id")
     */
    protected $scout;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Player", storeAs="id")
     */
    protected $player;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $work;

    /**
     * @MongoDB\Field(type="datetime")
     * @Assert\NotBlank()
     * @Assert\DateTime()
     */
    protected $startDate;

    /**
     * @MongoDB\Field(type="datetime")
     * @Assert\NotBlank()
     * @Assert\DateTime()
     */
    protected $endDate;

    public function getId()
    {
        return $this->id;
    }

    public function getScout()
    {
        return $this->scout;
    }

    public function setScout($scout)
    {
        $this->scout = $scout;
    }

    public function getPlayer()
    {
        return $this->player;
    }

    public function setPlayer($player)
    {
        $this->player = $player;
    }

    public function getWork()
    {
        return $this->work;
    }

    public function setWork($work)
    {
        $this->work = $work;
    }

    public function getStartdate()
    {
        return $this->startDate;
    }

    public function setStartdate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getEnddate()
    {
        return $this->endDate;
    }

    public function setEnddate($endDate)
    {
        $this->endDate = $endDate;
    }
}
