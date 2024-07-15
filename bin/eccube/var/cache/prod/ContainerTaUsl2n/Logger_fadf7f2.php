<?php

namespace ContainerTaUsl2n;

include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/AbstractLogger.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Log/Logger.php';
class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8d201 = null;
    private $initializer926a2 = null;
    private static $publicPropertiesf5b0b = [
        
    ];
    public function log($level, $message, array $context = [])
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->log($level, $message, $context);
    }
    public function emergency($message, array $context = [])
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->emergency($message, $context);
    }
    public function alert($message, array $context = [])
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->alert($message, $context);
    }
    public function critical($message, array $context = [])
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->critical($message, $context);
    }
    public function error($message, array $context = [])
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'error', array('message' => $message, 'context' => $context), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->error($message, $context);
    }
    public function warning($message, array $context = [])
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->warning($message, $context);
    }
    public function notice($message, array $context = [])
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->notice($message, $context);
    }
    public function info($message, array $context = [])
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'info', array('message' => $message, 'context' => $context), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->info($message, $context);
    }
    public function debug($message, array $context = [])
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->debug($message, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);
        $instance->initializer926a2 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;
        if (! $this->valueHolder8d201) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHolder8d201 = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
        }
        $this->valueHolder8d201->__construct($context, $logger, $frontLogger, $adminLogger);
    }
    public function & __get($name)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, '__get', ['name' => $name], $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        if (isset(self::$publicPropertiesf5b0b[$name])) {
            return $this->valueHolder8d201->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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

if (!\class_exists('Logger_fadf7f2', false)) {
    \class_alias(__NAMESPACE__.'\\Logger_fadf7f2', 'Logger_fadf7f2', false);
}
