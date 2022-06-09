<?php

namespace Container0RXlNK5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0575f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere5c65 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9c254 = [
        
    ];

    public function getConnection()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getConnection', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getMetadataFactory', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getExpressionBuilder', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'beginTransaction', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getCache', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getCache();
    }

    public function transactional($func)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'transactional', array('func' => $func), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'wrapInTransaction', array('func' => $func), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'commit', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->commit();
    }

    public function rollback()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'rollback', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getClassMetadata', array('className' => $className), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'createQuery', array('dql' => $dql), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'createNamedQuery', array('name' => $name), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'createQueryBuilder', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'flush', array('entity' => $entity), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'clear', array('entityName' => $entityName), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->clear($entityName);
    }

    public function close()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'close', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->close();
    }

    public function persist($entity)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'persist', array('entity' => $entity), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'remove', array('entity' => $entity), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'refresh', array('entity' => $entity), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'detach', array('entity' => $entity), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'merge', array('entity' => $entity), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getRepository', array('entityName' => $entityName), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'contains', array('entity' => $entity), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getEventManager', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getConfiguration', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'isOpen', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getUnitOfWork', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getProxyFactory', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'initializeObject', array('obj' => $obj), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'getFilters', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'isFiltersStateClean', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'hasFilters', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return $this->valueHolder0575f->hasFilters();
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

        $instance->initializere5c65 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0575f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0575f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0575f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, '__get', ['name' => $name], $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        if (isset(self::$publicProperties9c254[$name])) {
            return $this->valueHolder0575f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0575f;

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

        $targetObject = $this->valueHolder0575f;
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
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0575f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0575f;
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
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, '__isset', array('name' => $name), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0575f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0575f;
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
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, '__unset', array('name' => $name), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0575f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0575f;
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
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, '__clone', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        $this->valueHolder0575f = clone $this->valueHolder0575f;
    }

    public function __sleep()
    {
        $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, '__sleep', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;

        return array('valueHolder0575f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere5c65 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere5c65;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere5c65 && ($this->initializere5c65->__invoke($valueHolder0575f, $this, 'initializeProxy', array(), $this->initializere5c65) || 1) && $this->valueHolder0575f = $valueHolder0575f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0575f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0575f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
