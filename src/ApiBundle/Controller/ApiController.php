<?php

namespace App\ApiBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ApiController extends AbstractController
{

    /**
     * @Route("/api/test", methods={"POST","HEAD"})
     */
    public function testAction(AuthorizationCheckerInterface $authChecker) {
        if (false === $authChecker->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw new AccessDeniedException();
        }

        return new Response(json_encode(['status'=>'ok']));
    }
}
