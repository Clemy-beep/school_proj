<?php

namespace ContainerTe2syEp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaeeab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer547e2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties75fea = [
        
    ];

    public function getConnection()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getConnection', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getMetadataFactory', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getExpressionBuilder', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'beginTransaction', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getCache', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getCache();
    }

    public function transactional($func)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'transactional', array('func' => $func), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'wrapInTransaction', array('func' => $func), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'commit', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->commit();
    }

    public function rollback()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'rollback', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getClassMetadata', array('className' => $className), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'createQuery', array('dql' => $dql), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'createNamedQuery', array('name' => $name), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'createQueryBuilder', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'flush', array('entity' => $entity), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'clear', array('entityName' => $entityName), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->clear($entityName);
    }

    public function close()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'close', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->close();
    }

    public function persist($entity)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'persist', array('entity' => $entity), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'remove', array('entity' => $entity), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'refresh', array('entity' => $entity), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'detach', array('entity' => $entity), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'merge', array('entity' => $entity), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getRepository', array('entityName' => $entityName), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'contains', array('entity' => $entity), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getEventManager', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getConfiguration', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'isOpen', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getUnitOfWork', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getProxyFactory', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'initializeObject', array('obj' => $obj), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'getFilters', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'isFiltersStateClean', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'hasFilters', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return $this->valueHolderaeeab->hasFilters();
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

        $instance->initializer547e2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaeeab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaeeab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaeeab->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, '__get', ['name' => $name], $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        if (isset(self::$publicProperties75fea[$name])) {
            return $this->valueHolderaeeab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaeeab;

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

        $targetObject = $this->valueHolderaeeab;
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
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaeeab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaeeab;
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
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, '__isset', array('name' => $name), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaeeab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaeeab;
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
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, '__unset', array('name' => $name), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaeeab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaeeab;
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
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, '__clone', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        $this->valueHolderaeeab = clone $this->valueHolderaeeab;
    }

    public function __sleep()
    {
        $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, '__sleep', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;

        return array('valueHolderaeeab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer547e2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer547e2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer547e2 && ($this->initializer547e2->__invoke($valueHolderaeeab, $this, 'initializeProxy', array(), $this->initializer547e2) || 1) && $this->valueHolderaeeab = $valueHolderaeeab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaeeab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaeeab;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
