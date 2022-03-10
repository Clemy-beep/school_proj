<?php

namespace ContainerGQOZ4lG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4d42a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2ecc4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties25cac = [
        
    ];

    public function getConnection()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getConnection', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getMetadataFactory', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getExpressionBuilder', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'beginTransaction', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getCache', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'transactional', array('func' => $func), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'commit', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->commit();
    }

    public function rollback()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'rollback', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getClassMetadata', array('className' => $className), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'createQuery', array('dql' => $dql), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'createNamedQuery', array('name' => $name), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'createQueryBuilder', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'flush', array('entity' => $entity), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'clear', array('entityName' => $entityName), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->clear($entityName);
    }

    public function close()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'close', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->close();
    }

    public function persist($entity)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'persist', array('entity' => $entity), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'remove', array('entity' => $entity), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'refresh', array('entity' => $entity), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'detach', array('entity' => $entity), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'merge', array('entity' => $entity), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'contains', array('entity' => $entity), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getEventManager', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getConfiguration', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'isOpen', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getUnitOfWork', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getProxyFactory', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'initializeObject', array('obj' => $obj), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'getFilters', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'isFiltersStateClean', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'hasFilters', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return $this->valueHolder4d42a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2ecc4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4d42a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4d42a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4d42a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, '__get', ['name' => $name], $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        if (isset(self::$publicProperties25cac[$name])) {
            return $this->valueHolder4d42a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d42a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4d42a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d42a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4d42a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, '__isset', array('name' => $name), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d42a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4d42a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, '__unset', array('name' => $name), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d42a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4d42a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, '__clone', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        $this->valueHolder4d42a = clone $this->valueHolder4d42a;
    }

    public function __sleep()
    {
        $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, '__sleep', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;

        return array('valueHolder4d42a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2ecc4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2ecc4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2ecc4 && ($this->initializer2ecc4->__invoke($valueHolder4d42a, $this, 'initializeProxy', array(), $this->initializer2ecc4) || 1) && $this->valueHolder4d42a = $valueHolder4d42a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4d42a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4d42a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
