<?php

namespace App\ApiBundle\Document;

use FOS\OAuthServerBundle\Document\Client as BaseClient;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
/**
 * @MongoDB\Document
 */
class Client extends BaseClient
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;
}