<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class NoAccessHandler implements AccessDeniedHandlerInterface
{
    public function __construct(private RouterInterface $router) {}

    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        // redirect to your custom “no access” page
        return new RedirectResponse($this->router->generate('no_access'));
    }
}