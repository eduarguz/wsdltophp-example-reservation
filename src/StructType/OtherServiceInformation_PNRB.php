<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherServiceInformation.PNRB StructType
 * @subpackage Structs
 */
class OtherServiceInformation_PNRB extends AbstractStructBase
{
    /**
     * The OsiType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $OsiType;
    /**
     * The NameAssociationList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB
     */
    public $NameAssociationList;
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirlineCode;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * @var string
     */
    public $op;
    /**
     * Constructor method for OtherServiceInformation.PNRB
     * @uses OtherServiceInformation_PNRB::setOsiType()
     * @uses OtherServiceInformation_PNRB::setNameAssociationList()
     * @uses OtherServiceInformation_PNRB::setAirlineCode()
     * @uses OtherServiceInformation_PNRB::setFreeText()
     * @uses OtherServiceInformation_PNRB::setId()
     * @uses OtherServiceInformation_PNRB::setOp()
     * @param string $osiType
     * @param \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList
     * @param string $airlineCode
     * @param string $freeText
     * @param string $id
     * @param string $op
     */
    public function __construct($osiType = null, \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null, $airlineCode = null, $freeText = null, $id = null, $op = null)
    {
        $this
            ->setOsiType($osiType)
            ->setNameAssociationList($nameAssociationList)
            ->setAirlineCode($airlineCode)
            ->setFreeText($freeText)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get OsiType value
     * @return string
     */
    public function getOsiType()
    {
        return $this->OsiType;
    }
    /**
     * Set OsiType value
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $osiType
     * @return \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB
     */
    public function setOsiType($osiType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid($osiType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $osiType, implode(', ', \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues())), __LINE__);
        }
        $this->OsiType = $osiType;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB
     */
    public function setNameAssociationList(\Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null)
    {
        $this->NameAssociationList = $nameAssociationList;
        return $this;
    }
    /**
     * Get AirlineCode value
     * @return string|null
     */
    public function getAirlineCode()
    {
        return $this->AirlineCode;
    }
    /**
     * Set AirlineCode value
     * @param string $airlineCode
     * @return \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->AirlineCode = $airlineCode;
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
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
     * @return \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB
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
