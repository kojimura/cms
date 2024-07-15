<?php

namespace ContainerTaUsl2n;

include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';
class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder8d201 = null;
    private $initializer926a2 = null;
    private static $publicPropertiesf5b0b = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        if ($this->valueHolder8d201 === $returnValue = $this->valueHolder8d201->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer926a2 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder8d201) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder8d201 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, '__get', ['name' => $name], $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        if (isset(self::$publicPropertiesf5b0b[$name])) {
            return $this->valueHolder8d201->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
