<?php

namespace ContainerMhqxLWv;

include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';
class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder96b87 = null;
    private $initializer65fe4 = null;
    private static $publicPropertiesc892b = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        if ($this->valueHolder96b87 === $returnValue = $this->valueHolder96b87->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer65fe4 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder96b87) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder96b87 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__get', ['name' => $name], $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        if (isset(self::$publicPropertiesc892b[$name])) {
            return $this->valueHolder96b87->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
