<?php

namespace Symfony\Config\Security;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProviderConfig'.\DIRECTORY_SEPARATOR.'ChainConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProviderConfig'.\DIRECTORY_SEPARATOR.'MemoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProviderConfig'.\DIRECTORY_SEPARATOR.'LdapConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProviderConfig'.\DIRECTORY_SEPARATOR.'EntityConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProviderConfig'.\DIRECTORY_SEPARATOR.'LexikJwtConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ProviderConfig 
{
    private $id;
    private $chain;
    private $memory;
    private $ldap;
    private $entity;
    private $lexikJwt;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): static
    {
        $this->id = $value;
    
        return $this;
    }
    
    public function chain(array $value = []): \Symfony\Config\Security\ProviderConfig\ChainConfig
    {
        if (null === $this->chain) {
            $this->chain = new \Symfony\Config\Security\ProviderConfig\ChainConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "chain()" has already been initialized. You cannot pass values the second time you call chain().');
        }
    
        return $this->chain;
    }
    
    public function memory(array $value = []): \Symfony\Config\Security\ProviderConfig\MemoryConfig
    {
        if (null === $this->memory) {
            $this->memory = new \Symfony\Config\Security\ProviderConfig\MemoryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "memory()" has already been initialized. You cannot pass values the second time you call memory().');
        }
    
        return $this->memory;
    }
    
    public function ldap(array $value = []): \Symfony\Config\Security\ProviderConfig\LdapConfig
    {
        if (null === $this->ldap) {
            $this->ldap = new \Symfony\Config\Security\ProviderConfig\LdapConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "ldap()" has already been initialized. You cannot pass values the second time you call ldap().');
        }
    
        return $this->ldap;
    }
    
    public function entity(array $value = []): \Symfony\Config\Security\ProviderConfig\EntityConfig
    {
        if (null === $this->entity) {
            $this->entity = new \Symfony\Config\Security\ProviderConfig\EntityConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "entity()" has already been initialized. You cannot pass values the second time you call entity().');
        }
    
        return $this->entity;
    }
    
    public function lexikJwt(array $value = []): \Symfony\Config\Security\ProviderConfig\LexikJwtConfig
    {
        if (null === $this->lexikJwt) {
            $this->lexikJwt = new \Symfony\Config\Security\ProviderConfig\LexikJwtConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "lexikJwt()" has already been initialized. You cannot pass values the second time you call lexikJwt().');
        }
    
        return $this->lexikJwt;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['id'])) {
            $this->id = $value['id'];
            unset($value['id']);
        }
    
        if (isset($value['chain'])) {
            $this->chain = new \Symfony\Config\Security\ProviderConfig\ChainConfig($value['chain']);
            unset($value['chain']);
        }
    
        if (isset($value['memory'])) {
            $this->memory = new \Symfony\Config\Security\ProviderConfig\MemoryConfig($value['memory']);
            unset($value['memory']);
        }
    
        if (isset($value['ldap'])) {
            $this->ldap = new \Symfony\Config\Security\ProviderConfig\LdapConfig($value['ldap']);
            unset($value['ldap']);
        }
    
        if (isset($value['entity'])) {
            $this->entity = new \Symfony\Config\Security\ProviderConfig\EntityConfig($value['entity']);
            unset($value['entity']);
        }
    
        if (isset($value['lexik_jwt'])) {
            $this->lexikJwt = new \Symfony\Config\Security\ProviderConfig\LexikJwtConfig($value['lexik_jwt']);
            unset($value['lexik_jwt']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->id) {
            $output['id'] = $this->id;
        }
        if (null !== $this->chain) {
            $output['chain'] = $this->chain->toArray();
        }
        if (null !== $this->memory) {
            $output['memory'] = $this->memory->toArray();
        }
        if (null !== $this->ldap) {
            $output['ldap'] = $this->ldap->toArray();
        }
        if (null !== $this->entity) {
            $output['entity'] = $this->entity->toArray();
        }
        if (null !== $this->lexikJwt) {
            $output['lexik_jwt'] = $this->lexikJwt->toArray();
        }
    
        return $output;
    }

}
