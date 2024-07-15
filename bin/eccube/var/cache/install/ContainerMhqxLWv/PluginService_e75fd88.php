<?php

namespace ContainerMhqxLWv;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder96b87 = null;
    private $initializer65fe4 = null;
    private static $publicPropertiesc892b = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'install', array('path' => $path, 'source' => $source), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'installWithCode', array('code' => $code), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'preInstall', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'createTempDir', array(), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'deleteDirs', array('arr' => $arr), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'checkSymbolName', array('string' => $string), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'deleteFile', array('path' => $path), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'checkSamePlugin', array('code' => $code), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'calcPluginDir', array('code' => $code), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'createPluginDir', array('d' => $d), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'unregisterPlugin', array('p' => $p), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'disable', array('plugin' => $plugin), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        return $this->valueHolder96b87->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializer65fe4 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolder96b87) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolder96b87 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHolder96b87->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer65fe4 && ($this->initializer65fe4->__invoke($valueHolder96b87, $this, '__get', ['name' => $name], $this->initializer65fe4) || 1) && $this->valueHolder96b87 = $valueHolder96b87;
        if (isset(self::$publicPropertiesc892b[$name])) {
            return $this->valueHolder96b87->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
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

if (!\class_exists('PluginService_e75fd88', false)) {
    \class_alias(__NAMESPACE__.'\\PluginService_e75fd88', 'PluginService_e75fd88', false);
}
