<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageHeader StructType
 * @subpackage Structs
 */
class MessageHeader extends AbstractStructBase
{
    /**
     * The From
     * Meta informations extracted from the WSDL
     * - ref: tns:From
     * @var \Sabre\UpdateReservation\StructType\From
     */
    public $From;
    /**
     * The To
     * Meta informations extracted from the WSDL
     * - ref: tns:To
     * @var \Sabre\UpdateReservation\StructType\To
     */
    public $To;
    /**
     * The CPAId
     * Meta informations extracted from the WSDL
     * - ref: tns:CPAId
     * - minLength: 1
     * @var string
     */
    public $CPAId;
    /**
     * The ConversationId
     * Meta informations extracted from the WSDL
     * - ref: tns:ConversationId
     * - minLength: 1
     * @var string
     */
    public $ConversationId;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - ref: tns:Service
     * @var \Sabre\UpdateReservation\StructType\Service
     */
    public $Service;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - ref: tns:Action
     * - minLength: 1
     * @var string
     */
    public $Action;
    /**
     * The MessageData
     * Meta informations extracted from the WSDL
     * - ref: tns:MessageData
     * @var \Sabre\UpdateReservation\StructType\MessageData
     */
    public $MessageData;
    /**
     * The DuplicateElimination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: tns:DuplicateElimination
     * @var mixed
     */
    public $DuplicateElimination;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: tns:Description
     * @var \Sabre\UpdateReservation\StructType\Description[]
     */
    public $Description;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The id
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $id;
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $version;
    /**
     * Constructor method for MessageHeader
     * @uses MessageHeader::setFrom()
     * @uses MessageHeader::setTo()
     * @uses MessageHeader::setCPAId()
     * @uses MessageHeader::setConversationId()
     * @uses MessageHeader::setService()
     * @uses MessageHeader::setAction()
     * @uses MessageHeader::setMessageData()
     * @uses MessageHeader::setDuplicateElimination()
     * @uses MessageHeader::setDescription()
     * @uses MessageHeader::setAny()
     * @uses MessageHeader::setId()
     * @uses MessageHeader::setVersion()
     * @param \Sabre\UpdateReservation\StructType\From $from
     * @param \Sabre\UpdateReservation\StructType\To $to
     * @param string $cPAId
     * @param string $conversationId
     * @param \Sabre\UpdateReservation\StructType\Service $service
     * @param string $action
     * @param \Sabre\UpdateReservation\StructType\MessageData $messageData
     * @param mixed $duplicateElimination
     * @param \Sabre\UpdateReservation\StructType\Description[] $description
     * @param \DOMDocument $any
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @param string $version
     */
    public function __construct(\Sabre\UpdateReservation\StructType\From $from = null, \Sabre\UpdateReservation\StructType\To $to = null, $cPAId = null, $conversationId = null, \Sabre\UpdateReservation\StructType\Service $service = null, $action = null, \Sabre\UpdateReservation\StructType\MessageData $messageData = null, $duplicateElimination = null, array $description = array(), \DOMDocument $any = null, \Sabre\UpdateReservation\StructType\ID $id = null, $version = null)
    {
        $this
            ->setFrom($from)
            ->setTo($to)
            ->setCPAId($cPAId)
            ->setConversationId($conversationId)
            ->setService($service)
            ->setAction($action)
            ->setMessageData($messageData)
            ->setDuplicateElimination($duplicateElimination)
            ->setDescription($description)
            ->setAny($any)
            ->setId($id)
            ->setVersion($version);
    }
    /**
     * Get From value
     * @return \Sabre\UpdateReservation\StructType\From|null
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param \Sabre\UpdateReservation\StructType\From $from
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setFrom(\Sabre\UpdateReservation\StructType\From $from = null)
    {
        $this->From = $from;
        return $this;
    }
    /**
     * Get To value
     * @return \Sabre\UpdateReservation\StructType\To|null
     */
    public function getTo()
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param \Sabre\UpdateReservation\StructType\To $to
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setTo(\Sabre\UpdateReservation\StructType\To $to = null)
    {
        $this->To = $to;
        return $this;
    }
    /**
     * Get CPAId value
     * @return string|null
     */
    public function getCPAId()
    {
        return $this->CPAId;
    }
    /**
     * Set CPAId value
     * @param string $cPAId
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setCPAId($cPAId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($cPAId) && strlen($cPAId) < 1) || (is_array($cPAId) && count($cPAId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($cPAId) && !is_string($cPAId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cPAId)), __LINE__);
        }
        $this->CPAId = $cPAId;
        return $this;
    }
    /**
     * Get ConversationId value
     * @return string|null
     */
    public function getConversationId()
    {
        return $this->ConversationId;
    }
    /**
     * Set ConversationId value
     * @param string $conversationId
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setConversationId($conversationId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($conversationId) && strlen($conversationId) < 1) || (is_array($conversationId) && count($conversationId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($conversationId) && !is_string($conversationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conversationId)), __LINE__);
        }
        $this->ConversationId = $conversationId;
        return $this;
    }
    /**
     * Get Service value
     * @return \Sabre\UpdateReservation\StructType\Service|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param \Sabre\UpdateReservation\StructType\Service $service
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setService(\Sabre\UpdateReservation\StructType\Service $service = null)
    {
        $this->Service = $service;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $action
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setAction($action = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($action) && strlen($action) < 1) || (is_array($action) && count($action) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($action)), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get MessageData value
     * @return \Sabre\UpdateReservation\StructType\MessageData|null
     */
    public function getMessageData()
    {
        return $this->MessageData;
    }
    /**
     * Set MessageData value
     * @param \Sabre\UpdateReservation\StructType\MessageData $messageData
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setMessageData(\Sabre\UpdateReservation\StructType\MessageData $messageData = null)
    {
        $this->MessageData = $messageData;
        return $this;
    }
    /**
     * Get DuplicateElimination value
     * @return mixed|null
     */
    public function getDuplicateElimination()
    {
        return $this->DuplicateElimination;
    }
    /**
     * Set DuplicateElimination value
     * @param mixed $duplicateElimination
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setDuplicateElimination($duplicateElimination = null)
    {
        $this->DuplicateElimination = $duplicateElimination;
        return $this;
    }
    /**
     * Get Description value
     * @return \Sabre\UpdateReservation\StructType\Description[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Description[] $description
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $messageHeaderDescriptionItem) {
            // validation for constraint: itemType
            if (!$messageHeaderDescriptionItem instanceof \Sabre\UpdateReservation\StructType\Description) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Sabre\UpdateReservation\StructType\Description, "%s" given', is_object($messageHeaderDescriptionItem) ? get_class($messageHeaderDescriptionItem) : gettype($messageHeaderDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Description $item
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function addToDescription(\Sabre\UpdateReservation\StructType\Description $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Description) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Sabre\UpdateReservation\StructType\Description, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\MessageHeader::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get id value
     * @return \Sabre\UpdateReservation\StructType\ID|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setId(\Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public function setVersion($version = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($version) && strlen($version) < 1) || (is_array($version) && count($version) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MessageHeader
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
