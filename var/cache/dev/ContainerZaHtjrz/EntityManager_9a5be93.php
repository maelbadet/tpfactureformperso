<?php

namespace ContainerZaHtjrz;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3d427 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd3fe = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4a3e5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getConnection', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getMetadataFactory', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getExpressionBuilder', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'beginTransaction', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getCache', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'transactional', array('func' => $func), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'commit', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->commit();
    }

    public function rollback()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'rollback', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getClassMetadata', array('className' => $className), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'createQuery', array('dql' => $dql), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'createNamedQuery', array('name' => $name), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'createQueryBuilder', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'flush', array('entity' => $entity), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'clear', array('entityName' => $entityName), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->clear($entityName);
    }

    public function close()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'close', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->close();
    }

    public function persist($entity)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'persist', array('entity' => $entity), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'remove', array('entity' => $entity), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'refresh', array('entity' => $entity), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'detach', array('entity' => $entity), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'merge', array('entity' => $entity), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'contains', array('entity' => $entity), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getEventManager', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getConfiguration', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'isOpen', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getUnitOfWork', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getProxyFactory', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'initializeObject', array('obj' => $obj), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'getFilters', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'isFiltersStateClean', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'hasFilters', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return $this->valueHolder3d427->hasFilters();
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

        $instance->initializerdd3fe = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3d427) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3d427 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3d427->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, '__get', ['name' => $name], $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        if (isset(self::$publicProperties4a3e5[$name])) {
            return $this->valueHolder3d427->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d427;

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

        $targetObject = $this->valueHolder3d427;
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
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d427;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3d427;
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
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, '__isset', array('name' => $name), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d427;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3d427;
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
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, '__unset', array('name' => $name), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d427;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3d427;
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
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, '__clone', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        $this->valueHolder3d427 = clone $this->valueHolder3d427;
    }

    public function __sleep()
    {
        $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, '__sleep', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;

        return array('valueHolder3d427');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdd3fe = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdd3fe;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdd3fe && ($this->initializerdd3fe->__invoke($valueHolder3d427, $this, 'initializeProxy', array(), $this->initializerdd3fe) || 1) && $this->valueHolder3d427 = $valueHolder3d427;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3d427;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3d427;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
