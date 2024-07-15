<?php

namespace ContainerTaUsl2n;

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/TaxRuleRepository.php';
class TaxRuleRepository_f7111db extends \Eccube\Repository\TaxRuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8d201 = null;
    private $initializer926a2 = null;
    private static $publicPropertiesf5b0b = [
        
    ];
    public function newTaxRule()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'newTaxRule', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->newTaxRule();
    }
    public function getByRule($Product = null, $ProductClass = null, $Pref = null, $Country = null)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'getByRule', array('Product' => $Product, 'ProductClass' => $ProductClass, 'Pref' => $Pref, 'Country' => $Country), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->getByRule($Product, $ProductClass, $Pref, $Country);
    }
    public function getList()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'getList', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->getList();
    }
    public function delete($TaxRule)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'delete', array('TaxRule' => $TaxRule), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->delete($TaxRule);
    }
    public function clearCache()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'clearCache', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->clearCache();
    }
    public function save($entity)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'save', array('entity' => $entity), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'clear', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'findAll', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'count', array('criteria' => $criteria), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'getClassName', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'matching', array('criteria' => $criteria), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->baseInfo, $instance->authorizationChecker, $instance->tokenStorage, $instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $instance, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($instance);
        $instance->initializer926a2 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Common\EccubeConfig $eccubeConfig)
    {
        static $reflection;
        if (! $this->valueHolder8d201) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
            $this->valueHolder8d201 = $reflection->newInstanceWithoutConstructor();
        unset($this->baseInfo, $this->authorizationChecker, $this->tokenStorage, $this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $this, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($this);
        }
        $this->valueHolder8d201->__construct($registry, $tokenStorage, $authorizationChecker, $baseInfoRepository, $eccubeConfig);
    }
    public function & __get($name)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, '__get', ['name' => $name], $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        if (isset(self::$publicPropertiesf5b0b[$name])) {
            return $this->valueHolder8d201->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d201;
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
        $targetObject = $this->valueHolder8d201;
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
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d201;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8d201;
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
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, '__isset', array('name' => $name), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d201;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8d201;
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
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, '__unset', array('name' => $name), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d201;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8d201;
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
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, '__clone', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        $this->valueHolder8d201 = clone $this->valueHolder8d201;
    }
    public function __sleep()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, '__sleep', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return array('valueHolder8d201');
    }
    public function __wakeup()
    {
        unset($this->baseInfo, $this->authorizationChecker, $this->tokenStorage, $this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $this, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer926a2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer926a2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'initializeProxy', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8d201;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8d201;
    }
}

if (!\class_exists('TaxRuleRepository_f7111db', false)) {
    \class_alias(__NAMESPACE__.'\\TaxRuleRepository_f7111db', 'TaxRuleRepository_f7111db', false);
}
