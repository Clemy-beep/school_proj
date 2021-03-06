<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Bus extends \App\Entity\Bus implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'plateNum', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'serviceDate', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'weight', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'body', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'wheels', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'seats', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'windows', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'route'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'plateNum', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'serviceDate', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'weight', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'body', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'wheels', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'seats', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'windows', '' . "\0" . 'App\\Entity\\Bus' . "\0" . 'route'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Bus $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlateNum(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlateNum', []);

        return parent::getPlateNum();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlateNum(int $plateNum): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlateNum', [$plateNum]);

        return parent::setPlateNum($plateNum);
    }

    /**
     * {@inheritDoc}
     */
    public function getServiceDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServiceDate', []);

        return parent::getServiceDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setServiceDate(\DateTimeInterface $serviceDate): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServiceDate', [$serviceDate]);

        return parent::setServiceDate($serviceDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', []);

        return parent::getWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight(int $weight): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', [$weight]);

        return parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getBody(): ?\App\Entity\Body
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', []);

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setBody(\App\Entity\Body $body): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBody', [$body]);

        return parent::setBody($body);
    }

    /**
     * {@inheritDoc}
     */
    public function getWheels(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWheels', []);

        return parent::getWheels();
    }

    /**
     * {@inheritDoc}
     */
    public function addWheel(\App\Entity\Wheel $wheel): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addWheel', [$wheel]);

        return parent::addWheel($wheel);
    }

    /**
     * {@inheritDoc}
     */
    public function removeWheel(\App\Entity\Wheel $wheel): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeWheel', [$wheel]);

        return parent::removeWheel($wheel);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeats(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeats', []);

        return parent::getSeats();
    }

    /**
     * {@inheritDoc}
     */
    public function addSeat(\App\Entity\Seat $seat): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSeat', [$seat]);

        return parent::addSeat($seat);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSeat(\App\Entity\Seat $seat): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSeat', [$seat]);

        return parent::removeSeat($seat);
    }

    /**
     * {@inheritDoc}
     */
    public function getWindows(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWindows', []);

        return parent::getWindows();
    }

    /**
     * {@inheritDoc}
     */
    public function addWindow(\App\Entity\Window $window): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addWindow', [$window]);

        return parent::addWindow($window);
    }

    /**
     * {@inheritDoc}
     */
    public function removeWindow(\App\Entity\Window $window): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeWindow', [$window]);

        return parent::removeWindow($window);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoute(): ?\App\Entity\Route
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoute', []);

        return parent::getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoute(\App\Entity\Route $route): \App\Entity\Bus
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoute', [$route]);

        return parent::setRoute($route);
    }

}
