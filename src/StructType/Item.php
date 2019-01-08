<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Item StructType
 * @subpackage Structs
 */
class Item extends AbstractStructBase
{
    /**
     * The AncillaryServicePricing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryServicePricing
     */
    public $AncillaryServicePricing;
    /**
     * The OpenReservationElement
     * Meta informations extracted from the WSDL
     * - documentation: Result of psh processing of linear entry requests such as CKS*
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public $OpenReservationElement;
    /**
     * The AirSegment
     * Meta informations extracted from the WSDL
     * - documentation: Result of air segment sell
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AirType
     */
    public $AirSegment;
    /**
     * The RefundResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RefundResult_PNRB
     */
    public $RefundResult;
    /**
     * The BookAndHoldResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BookAndHoldResult
     */
    public $BookAndHoldResult;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - use: optional
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $type;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $op;
    /**
     * Constructor method for Item
     * @uses Item::setAncillaryServicePricing()
     * @uses Item::setOpenReservationElement()
     * @uses Item::setAirSegment()
     * @uses Item::setRefundResult()
     * @uses Item::setBookAndHoldResult()
     * @uses Item::setId()
     * @uses Item::setType()
     * @uses Item::setOp()
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicePricing $ancillaryServicePricing
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementType $openReservationElement
     * @param \Sabre\UpdateReservation\StructType\AirType $airSegment
     * @param \Sabre\UpdateReservation\StructType\RefundResult_PNRB $refundResult
     * @param \Sabre\UpdateReservation\StructType\BookAndHoldResult $bookAndHoldResult
     * @param string $id
     * @param string $type
     * @param string $op
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AncillaryServicePricing $ancillaryServicePricing = null, \Sabre\UpdateReservation\StructType\OpenReservationElementType $openReservationElement = null, \Sabre\UpdateReservation\StructType\AirType $airSegment = null, \Sabre\UpdateReservation\StructType\RefundResult_PNRB $refundResult = null, \Sabre\UpdateReservation\StructType\BookAndHoldResult $bookAndHoldResult = null, $id = null, $type = null, $op = null)
    {
        $this
            ->setAncillaryServicePricing($ancillaryServicePricing)
            ->setOpenReservationElement($openReservationElement)
            ->setAirSegment($airSegment)
            ->setRefundResult($refundResult)
            ->setBookAndHoldResult($bookAndHoldResult)
            ->setId($id)
            ->setType($type)
            ->setOp($op);
    }
    /**
     * Get AncillaryServicePricing value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePricing|null
     */
    public function getAncillaryServicePricing()
    {
        return $this->AncillaryServicePricing;
    }
    /**
     * Set AncillaryServicePricing value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicePricing $ancillaryServicePricing
     * @return \Sabre\UpdateReservation\StructType\Item
     */
    public function setAncillaryServicePricing(\Sabre\UpdateReservation\StructType\AncillaryServicePricing $ancillaryServicePricing = null)
    {
        $this->AncillaryServicePricing = $ancillaryServicePricing;
        return $this;
    }
    /**
     * Get OpenReservationElement value
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType|null
     */
    public function getOpenReservationElement()
    {
        return $this->OpenReservationElement;
    }
    /**
     * Set OpenReservationElement value
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementType $openReservationElement
     * @return \Sabre\UpdateReservation\StructType\Item
     */
    public function setOpenReservationElement(\Sabre\UpdateReservation\StructType\OpenReservationElementType $openReservationElement = null)
    {
        $this->OpenReservationElement = $openReservationElement;
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Sabre\UpdateReservation\StructType\AirType|null
     */
    public function getAirSegment()
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Sabre\UpdateReservation\StructType\AirType $airSegment
     * @return \Sabre\UpdateReservation\StructType\Item
     */
    public function setAirSegment(\Sabre\UpdateReservation\StructType\AirType $airSegment = null)
    {
        $this->AirSegment = $airSegment;
        return $this;
    }
    /**
     * Get RefundResult value
     * @return \Sabre\UpdateReservation\StructType\RefundResult_PNRB|null
     */
    public function getRefundResult()
    {
        return $this->RefundResult;
    }
    /**
     * Set RefundResult value
     * @param \Sabre\UpdateReservation\StructType\RefundResult_PNRB $refundResult
     * @return \Sabre\UpdateReservation\StructType\Item
     */
    public function setRefundResult(\Sabre\UpdateReservation\StructType\RefundResult_PNRB $refundResult = null)
    {
        $this->RefundResult = $refundResult;
        return $this;
    }
    /**
     * Get BookAndHoldResult value
     * @return \Sabre\UpdateReservation\StructType\BookAndHoldResult|null
     */
    public function getBookAndHoldResult()
    {
        return $this->BookAndHoldResult;
    }
    /**
     * Set BookAndHoldResult value
     * @param \Sabre\UpdateReservation\StructType\BookAndHoldResult $bookAndHoldResult
     * @return \Sabre\UpdateReservation\StructType\Item
     */
    public function setBookAndHoldResult(\Sabre\UpdateReservation\StructType\BookAndHoldResult $bookAndHoldResult = null)
    {
        $this->BookAndHoldResult = $bookAndHoldResult;
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
     * @return \Sabre\UpdateReservation\StructType\Item
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Item
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \Sabre\UpdateReservation\StructType\Item
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
     * @return \Sabre\UpdateReservation\StructType\Item
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
