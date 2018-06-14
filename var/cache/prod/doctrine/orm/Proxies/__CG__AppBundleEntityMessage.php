<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Message extends \AppBundle\Entity\Message implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', 'id', 'thread', 'sender', 'metadata', 'body', 'createdAt'];
        }

        return ['__isInitialized__', 'id', 'thread', 'sender', 'metadata', 'body', 'createdAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Message $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getAllMetadata()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllMetadata', []);

        return parent::getAllMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function addMetadata(\FOS\MessageBundle\Model\MessageMetadata $meta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMetadata', [$meta]);

        return parent::addMetadata($meta);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
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
    public function getThread()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThread', []);

        return parent::getThread();
    }

    /**
     * {@inheritDoc}
     */
    public function setThread(\FOS\MessageBundle\Model\ThreadInterface $thread)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThread', [$thread]);

        return parent::setThread($thread);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', []);

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setBody($body)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBody', [$body]);

        return parent::setBody($body);
    }

    /**
     * {@inheritDoc}
     */
    public function getSender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSender', []);

        return parent::getSender();
    }

    /**
     * {@inheritDoc}
     */
    public function setSender(\FOS\MessageBundle\Model\ParticipantInterface $sender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSender', [$sender]);

        return parent::setSender($sender);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimestamp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimestamp', []);

        return parent::getTimestamp();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataForParticipant(\FOS\MessageBundle\Model\ParticipantInterface $participant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetadataForParticipant', [$participant]);

        return parent::getMetadataForParticipant($participant);
    }

    /**
     * {@inheritDoc}
     */
    public function isReadByParticipant(\FOS\MessageBundle\Model\ParticipantInterface $participant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isReadByParticipant', [$participant]);

        return parent::isReadByParticipant($participant);
    }

    /**
     * {@inheritDoc}
     */
    public function setIsReadByParticipant(\FOS\MessageBundle\Model\ParticipantInterface $participant, $isRead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsReadByParticipant', [$participant, $isRead]);

        return parent::setIsReadByParticipant($participant, $isRead);
    }

}
