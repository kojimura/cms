<?php

namespace ContainerMhqxLWv;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerApiService.php';
class ComposerApiService_c77e330 extends \Eccube\Service\Composer\ComposerApiService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder96b87 = null;
    private $initializer65fe4 = null;
    private static $publicPropertiesc892b = [
        
    ];
    public function execInfo($pluginName, $version)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'execInfo', array('pluginName' => $pluginName, 'version' => $version), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->execInfo($pluginName, $version);
    }
    public function execRequire($packageName, $output = null, $from = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output, 'from' => $from), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->execRequire($packageName, $output, $from);
    }
    public function execRemove($packageName, $output = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->execRemove($packageName, $output);
    }
    public function execUpdate($dryRun, $output = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'execUpdate', array('dryRun' => $dryRun, 'output' => $output), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->execUpdate($dryRun, $output);
    }
    public function execInstall($dryRun, $output = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'execInstall', array('dryRun' => $dryRun, 'output' => $output), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->execInstall($dryRun, $output);
    }
    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0) : void
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        $this->valueHolder96b87->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
return;
    }
    public function execConfig($key, $value = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->execConfig($key, $value);
    }
    public function getConfig()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'getConfig', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->getConfig();
    }
    public function setWorkingDir($workingDir)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'setWorkingDir', array('workingDir' => $workingDir), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->setWorkingDir($workingDir);
    }
    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->runCommand($commands, $output, $init);
    }
    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo) : void
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        $this->valueHolder96b87->configureRepository($BaseInfo);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($instance);
        $instance->initializer65fe4 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Service\SchemaService $schemaService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolder96b87) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
            $this->valueHolder96b87 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
        }
        $this->valueHolder96b87->__construct($eccubeConfig, $baseInfoRepository, $schemaService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__get', ['name' => $name], $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        if (isset(self::$publicPropertiesc892b[$name])) {
            return $this->valueHolder96b87->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
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

if (!\class_exists('ComposerApiService_c77e330', false)) {
    \class_alias(__NAMESPACE__.'\\ComposerApiService_c77e330', 'ComposerApiService_c77e330', false);
}
