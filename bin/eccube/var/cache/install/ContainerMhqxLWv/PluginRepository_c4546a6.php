<?php

namespace ContainerMhqxLWv;

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/PluginRepository.php';
class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder96b87 = null;
    private $initializer65fe4 = null;
    private static $publicPropertiesc892b = [
        
    ];
    public function findAllEnabled()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'findAllEnabled', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->findAllEnabled();
    }
    public function findByCode($code)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'findByCode', array('code' => $code), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->findByCode($code);
    }
    public function delete($entity)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'delete', array('entity' => $entity), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->delete($entity);
    }
    public function save($entity)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'save', array('entity' => $entity), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'clear', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'findAll', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'count', array('criteria' => $criteria), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'getClassName', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'matching', array('criteria' => $criteria), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializer65fe4 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry)
    {
        static $reflection;
        if (! $this->valueHolder96b87) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHolder96b87 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolder96b87->__construct($registry);
    }
    public function & __get($name)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__get', ['name' => $name], $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        if (isset(self::$publicPropertiesc892b[$name])) {
            return $this->valueHolder96b87->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96b87;
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
        $targetObject = $this->valueHolder96b87;
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
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96b87;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder96b87;
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
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__isset', array('name' => $name), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96b87;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder96b87;
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
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__unset', array('name' => $name), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96b87;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder96b87;
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
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__clone', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        $this->valueHolder96b87 = clone $this->valueHolder96b87;
    }
    public function __sleep()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__sleep', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return array('valueHolder96b87');
    }
    public function __wakeup()
    {
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer65fe4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer65fe4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'initializeProxy', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder96b87;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder96b87;
    }
}

if (!\class_exists('PluginRepository_c4546a6', false)) {
    \class_alias(__NAMESPACE__.'\\PluginRepository_c4546a6', 'PluginRepository_c4546a6', false);
}
