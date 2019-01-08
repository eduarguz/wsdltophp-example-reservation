<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemarkUpdate.PNRB StructType
 * @subpackage Structs
 */
class RemarkUpdate_PNRB extends AbstractStructBase
{
    /**
     * The SegmentAssociationList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB
     */
    public $SegmentAssociationList;
    /**
     * The RemarkText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RemarkText;
    /**
     * The OriginalRemarkText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NativeLanguageValueType
     */
    public $OriginalRemarkText;
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
     * - documentation: E.g. REG = normal remark, HS = Historical, HD = Hidden, CODED = Coded Remark. For full set of types and more detailed descriptions please refer to the RemarkType definition.
     * @var string
     */
    public $type;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $code;
    /**
     * Constructor method for RemarkUpdate.PNRB
     * @uses RemarkUpdate_PNRB::setSegmentAssociationList()
     * @uses RemarkUpdate_PNRB::setRemarkText()
     * @uses RemarkUpdate_PNRB::setOriginalRemarkText()
     * @uses RemarkUpdate_PNRB::setId()
     * @uses RemarkUpdate_PNRB::setType()
     * @uses RemarkUpdate_PNRB::setOp()
     * @uses RemarkUpdate_PNRB::setCode()
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList
     * @param string $remarkText
     * @param \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalRemarkText
     * @param string $id
     * @param string $type
     * @param string $op
     * @param string $code
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList = null, $remarkText = null, \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalRemarkText = null, $id = null, $type = null, $op = null, $code = null)
    {
        $this
            ->setSegmentAssociationList($segmentAssociationList)
            ->setRemarkText($remarkText)
            ->setOriginalRemarkText($originalRemarkText)
            ->setId($id)
            ->setType($type)
            ->setOp($op)
            ->setCode($code);
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
     * @return \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB
     */
    public function setSegmentAssociationList(\Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList = null)
    {
        $this->SegmentAssociationList = $segmentAssociationList;
        return $this;
    }
    /**
     * Get RemarkText value
     * @return string|null
     */
    public function getRemarkText()
    {
        return $this->RemarkText;
    }
    /**
     * Set RemarkText value
     * @param string $remarkText
     * @return \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB
     */
    public function setRemarkText($remarkText = null)
    {
        // validation for constraint: string
        if (!is_null($remarkText) && !is_string($remarkText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarkText)), __LINE__);
        }
        $this->RemarkText = $remarkText;
        return $this;
    }
    /**
     * Get OriginalRemarkText value
     * @return \Sabre\UpdateReservation\StructType\NativeLanguageValueType|null
     */
    public function getOriginalRemarkText()
    {
        return $this->OriginalRemarkText;
    }
    /**
     * Set OriginalRemarkText value
     * @param \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalRemarkText
     * @return \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB
     */
    public function setOriginalRemarkText(\Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalRemarkText = null)
    {
        $this->OriginalRemarkText = $originalRemarkText;
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
     * @return \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB
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
     * @uses \Sabre\UpdateReservation\EnumType\RemarkType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RemarkType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RemarkType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\RemarkType_PNRB::getValidValues())), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB
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
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB
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
