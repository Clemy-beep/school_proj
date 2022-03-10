<?php

namespace ContainerTe2syEp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordEncoderListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\PasswordEncoderListener' shared autowired service.
     *
     * @return \App\EventListener\PasswordEncoderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/PasswordEncoderListener.php';

        return $container->privates['App\\EventListener\\PasswordEncoderListener'] = new \App\EventListener\PasswordEncoderListener(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));
    }
}
