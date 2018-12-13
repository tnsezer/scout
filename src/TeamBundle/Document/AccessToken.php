<?php

namespace App\TeamBundle\Document;

use FOS\OAuthServerBundle\Document\AccessToken as BaseAccessToken;
use FOS\OAuthServerBundle\Model\ClientInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class AccessToken extends BaseAccessToken
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;
    /**
     * @MongoDB\ReferenceOne(targetDocument="Client")
     */
    protected $client;
    /**
     * @MongoDB\ReferenceOne(targetDocument="User")
     */
    protected $user;
    public function getClient()
    {
        return $this->client;
    }
    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }
}
