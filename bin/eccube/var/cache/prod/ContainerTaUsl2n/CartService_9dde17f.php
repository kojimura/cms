<?php

namespace ContainerTaUsl2n;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/CartService.php';
class CartService_9dde17f extends \Eccube\Service\CartService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8d201 = null;
    private $initializer926a2 = null;
    private static $publicPropertiesf5b0b = [
        
    ];
    public function getCarts($empty_delete = false)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'getCarts', array('empty_delete' => $empty_delete), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->getCarts($empty_delete);
    }
    public function getPersistedCarts()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'getPersistedCarts', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->getPersistedCarts();
    }
    public function getSessionCarts()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'getSessionCarts', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->getSessionCarts();
    }
    public function mergeFromPersistedCart()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'mergeFromPersistedCart', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->mergeFromPersistedCart();
    }
    public function getCart()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'getCart', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->getCart();
    }
    public function addProduct($ProductClass, $quantity = 1)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'addProduct', array('ProductClass' => $ProductClass, 'quantity' => $quantity), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->addProduct($ProductClass, $quantity);
    }
    public function removeProduct($ProductClass)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'removeProduct', array('ProductClass' => $ProductClass), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->removeProduct($ProductClass);
    }
    public function save()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'save', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->save();
    }
    public function setPreOrderId($pre_order_id)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'setPreOrderId', array('pre_order_id' => $pre_order_id), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->setPreOrderId($pre_order_id);
    }
    public function getPreOrderId()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'getPreOrderId', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->getPreOrderId();
    }
    public function clear()
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'clear', array(), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->clear();
    }
    public function setCartItemComparator($cartItemComparator)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'setCartItemComparator', array('cartItemComparator' => $cartItemComparator), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->setCartItemComparator($cartItemComparator);
    }
    public function setPrimary($cartKey)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, 'setPrimary', array('cartKey' => $cartKey), $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        return $this->valueHolder8d201->setPrimary($cartKey);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->carts, $instance->session, $instance->entityManager, $instance->cart, $instance->productClassRepository, $instance->cartRepository, $instance->cartItemComparator, $instance->cartItemAllocator, $instance->orderRepository, $instance->tokenStorage, $instance->authorizationChecker);
        $instance->initializer926a2 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\HttpFoundation\Session\SessionInterface $session, \Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\ProductClassRepository $productClassRepository, \Eccube\Repository\CartRepository $cartRepository, \Eccube\Service\Cart\CartItemComparator $cartItemComparator, \Eccube\Service\Cart\CartItemAllocator $cartItemAllocator, \Eccube\Repository\OrderRepository $orderRepository, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker)
    {
        static $reflection;
        if (! $this->valueHolder8d201) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\CartService');
            $this->valueHolder8d201 = $reflection->newInstanceWithoutConstructor();
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
        }
        $this->valueHolder8d201->__construct($session, $entityManager, $productClassRepository, $cartRepository, $cartItemComparator, $cartItemAllocator, $orderRepository, $tokenStorage, $authorizationChecker);
    }
    public function & __get($name)
    {
        $this->initializer926a2 && ($this->initializer926a2->__invoke($valueHolder8d201, $this, '__get', ['name' => $name], $this->initializer926a2) || 1) && $this->valueHolder8d201 = $valueHolder8d201;
        if (isset(self::$publicPropertiesf5b0b[$name])) {
            return $this->valueHolder8d201->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
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

if (!\class_exists('CartService_9dde17f', false)) {
    \class_alias(__NAMESPACE__.'\\CartService_9dde17f', 'CartService_9dde17f', false);
}
