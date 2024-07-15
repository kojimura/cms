<?php

namespace ContainerMhqxLWv;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/SystemService.php';
class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder96b87 = null;
    private $initializer65fe4 = null;
    private static $publicPropertiesc892b = [
        
    ];
    public function getDbversion()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'getDbversion', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->getDbversion();
    }
    public function canSetMemoryLimit($memory)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->canSetMemoryLimit($memory);
    }
    public function getMemoryLimit()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'getMemoryLimit', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->getMemoryLimit();
    }
    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->switchMaintenance($isEnable, $mode, $force);
    }
    public function getMaintenanceToken() : ?string
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'getMaintenanceToken', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->getMaintenanceToken();
    }
    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\TerminateEvent $event)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->disableMaintenanceEvent($event);
    }
    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        $this->valueHolder96b87->enableMaintenance($mode, $force);
return;
    }
    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'disableMaintenance', array('mode' => $mode), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->disableMaintenance($mode);
    }
    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        $this->valueHolder96b87->disableMaintenanceNow($mode, $force);
return;
    }
    public function isMaintenanceMode()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'isMaintenanceMode', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->isMaintenanceMode();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->entityManager, $instance->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);
        $instance->initializer65fe4 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;
        if (! $this->valueHolder96b87) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHolder96b87 = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
        }
        $this->valueHolder96b87->__construct($entityManager, $container);
    }
    public function & __get($name)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__get', ['name' => $name], $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        if (isset(self::$publicPropertiesc892b[$name])) {
            return $this->valueHolder96b87->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
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

if (!\class_exists('SystemService_f79b835', false)) {
    \class_alias(__NAMESPACE__.'\\SystemService_f79b835', 'SystemService_f79b835', false);
}
