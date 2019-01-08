<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentSellFromBSGInventory.PNRB StructType
 * @subpackage Structs
 */
class AirSegmentSellFromBSGInventory_PNRB extends AbstractStructBase
{
    /**
     * The BSGPNRRecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BSGPNRRecordLocator;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberInParty;
    /**
     * The SegmentSpecialRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public $SegmentSpecialRequests;
    /**
     * The FrequentFlyer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public $FrequentFlyer;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The segmentNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $segmentNumber;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for AirSegmentSellFromBSGInventory.PNRB
     * @uses AirSegmentSellFromBSGInventory_PNRB::setBSGPNRRecordLocator()
     * @uses AirSegmentSellFromBSGInventory_PNRB::setNumberInParty()
     * @uses AirSegmentSellFromBSGInventory_PNRB::setSegmentSpecialRequests()
     * @uses AirSegmentSellFromBSGInventory_PNRB::setFrequentFlyer()
     * @uses AirSegmentSellFromBSGInventory_PNRB::setId()
     * @uses AirSegmentSellFromBSGInventory_PNRB::setSegmentNumber()
     * @uses AirSegmentSellFromBSGInventory_PNRB::setOp()
     * @param string $bSGPNRRecordLocator
     * @param int $numberInParty
     * @param \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests
     * @param \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer
     * @param string $id
     * @param int $segmentNumber
     * @param string $op
     */
    public function __construct($bSGPNRRecordLocator = null, $numberInParty = null, \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests = null, \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer = null, $id = null, $segmentNumber = null, $op = null)
    {
        $this
            ->setBSGPNRRecordLocator($bSGPNRRecordLocator)
            ->setNumberInParty($numberInParty)
            ->setSegmentSpecialRequests($segmentSpecialRequests)
            ->setFrequentFlyer($frequentFlyer)
            ->setId($id)
            ->setSegmentNumber($segmentNumber)
            ->setOp($op);
    }
    /**
     * Get BSGPNRRecordLocator value
     * @return string|null
     */
    public function getBSGPNRRecordLocator()
    {
        return $this->BSGPNRRecordLocator;
    }
    /**
     * Set BSGPNRRecordLocator value
     * @param string $bSGPNRRecordLocator
     * @return \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB
     */
    public function setBSGPNRRecordLocator($bSGPNRRecordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($bSGPNRRecordLocator) && !is_string($bSGPNRRecordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bSGPNRRecordLocator)), __LINE__);
        }
        $this->BSGPNRRecordLocator = $bSGPNRRecordLocator;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param int $numberInParty
     * @return \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: maxInclusive
        if ($numberInParty > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberInParty < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
        return $this;
    }
    /**
     * Get SegmentSpecialRequests value
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB|null
     */
    public function getSegmentSpecialRequests()
    {
        return $this->SegmentSpecialRequests;
    }
    /**
     * Set SegmentSpecialRequests value
     * @param \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests
     * @return \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB
     */
    public function setSegmentSpecialRequests(\Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests = null)
    {
        $this->SegmentSpecialRequests = $segmentSpecialRequests;
        return $this;
    }
    /**
     * Get FrequentFlyer value
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB|null
     */
    public function getFrequentFlyer()
    {
        return $this->FrequentFlyer;
    }
    /**
     * Set FrequentFlyer value
     * @param \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer
     * @return \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB
     */
    public function setFrequentFlyer(\Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer = null)
    {
        $this->FrequentFlyer = $frequentFlyer;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get segmentNumber value
     * @return int|null
     */
    public function getSegmentNumber()
    {
        return $this->segmentNumber;
    }
    /**
     * Set segmentNumber value
     * @param int $segmentNumber
     * @return \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: maxInclusive
        if ($segmentNumber > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($segmentNumber < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($segmentNumber) && !is_numeric($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        $this->segmentNumber = $segmentNumber;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB
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
