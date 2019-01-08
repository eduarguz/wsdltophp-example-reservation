<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialServiceRequest.PNRB StructType
 * @subpackage Structs
 */
class SpecialServiceRequest_PNRB extends AbstractStructBase
{
    /**
     * The NameAssociationList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB
     */
    public $NameAssociationList;
    /**
     * The SegmentAssociationList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB
     */
    public $SegmentAssociationList;
    /**
     * The SpecialServiceRequestText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SpecialServiceRequestText;
    /**
     * The SpecialService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SpecialService_PNRB
     */
    public $SpecialService;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - default: H
     * - documentation: G = General, H = Hosted
     * @var string
     */
    public $type;
    /**
     * Constructor method for SpecialServiceRequest.PNRB
     * @uses SpecialServiceRequest_PNRB::setNameAssociationList()
     * @uses SpecialServiceRequest_PNRB::setSegmentAssociationList()
     * @uses SpecialServiceRequest_PNRB::setSpecialServiceRequestText()
     * @uses SpecialServiceRequest_PNRB::setSpecialService()
     * @uses SpecialServiceRequest_PNRB::setId()
     * @uses SpecialServiceRequest_PNRB::setType()
     * @param \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList
     * @param string $specialServiceRequestText
     * @param \Sabre\UpdateReservation\StructType\SpecialService_PNRB $specialService
     * @param string $id
     * @param string $type
     */
    public function __construct(\Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null, \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList = null, $specialServiceRequestText = null, \Sabre\UpdateReservation\StructType\SpecialService_PNRB $specialService = null, $id = null, $type = 'H')
    {
        $this
            ->setNameAssociationList($nameAssociationList)
            ->setSegmentAssociationList($segmentAssociationList)
            ->setSpecialServiceRequestText($specialServiceRequestText)
            ->setSpecialService($specialService)
            ->setId($id)
            ->setType($type);
    }
    /**
     * Get NameAssociationList value
     * @return \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB|null
     */
    public function getNameAssociationList()
    {
        return $this->NameAssociationList;
    }
    /**
     * Set NameAssociationList value
     * @param \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList
     * @return \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB
     */
    public function setNameAssociationList(\Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null)
    {
        $this->NameAssociationList = $nameAssociationList;
        return $this;
    }
    /**
     * Get SegmentAssociationList value
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB|null
     */
    public function getSegmentAssociationList()
    {
        return $this->SegmentAssociationList;
    }
    /**
     * Set SegmentAssociationList value
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList
     * @return \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB
     */
    public function setSegmentAssociationList(\Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList = null)
    {
        $this->SegmentAssociationList = $segmentAssociationList;
        return $this;
    }
    /**
     * Get SpecialServiceRequestText value
     * @return string|null
     */
    public function getSpecialServiceRequestText()
    {
        return $this->SpecialServiceRequestText;
    }
    /**
     * Set SpecialServiceRequestText value
     * @param string $specialServiceRequestText
     * @return \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB
     */
    public function setSpecialServiceRequestText($specialServiceRequestText = null)
    {
        // validation for constraint: string
        if (!is_null($specialServiceRequestText) && !is_string($specialServiceRequestText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialServiceRequestText)), __LINE__);
        }
        $this->SpecialServiceRequestText = $specialServiceRequestText;
        return $this;
    }
    /**
     * Get SpecialService value
     * @return \Sabre\UpdateReservation\StructType\SpecialService_PNRB|null
     */
    public function getSpecialService()
    {
        return $this->SpecialService;
    }
    /**
     * Set SpecialService value
     * @param \Sabre\UpdateReservation\StructType\SpecialService_PNRB $specialService
     * @return \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB
     */
    public function setSpecialService(\Sabre\UpdateReservation\StructType\SpecialService_PNRB $specialService = null)
    {
        $this->SpecialService = $specialService;
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
     * @return \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB
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
     * @uses \Sabre\UpdateReservation\EnumType\FactType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\FactType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB
     */
    public function setType($type = 'H')
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\FactType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\FactType_PNRB::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB
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
