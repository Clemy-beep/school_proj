<?php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;
use Symfony\Component\HttpFoundation\RequestStack;

class JWTCreatedListener
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function onJWTCreated(JWTCreatedEvent $event)
    {

        $payload = $event->getData();
        $payload['role'] = $event->getUser()->getRoles();
        $payload['id'] = $event->getUser()->getId();
        $event->setData($payload);
    }
}
