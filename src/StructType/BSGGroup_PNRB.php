<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BSGGroup.PNRB StructType
 * @subpackage Structs
 */
class BSGGroup_PNRB extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The AssociatedReferenceInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation
     */
    public $AssociatedReferenceInformation;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The nameId
     * @var string
     */
    public $nameId;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for BSGGroup.PNRB
     * @uses BSGGroup_PNRB::setName()
     * @uses BSGGroup_PNRB::setAssociatedReferenceInformation()
     * @uses BSGGroup_PNRB::setId()
     * @uses BSGGroup_PNRB::setNameId()
     * @uses BSGGroup_PNRB::setOp()
     * @param string $name
     * @param \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation $associatedReferenceInformation
     * @param string $id
     * @param string $nameId
     * @param string $op
     */
    public function __construct($name = null, \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation $associatedReferenceInformation = null, $id = null, $nameId = null, $op = null)
    {
        $this
            ->setName($name)
            ->setAssociatedReferenceInformation($associatedReferenceInformation)
            ->setId($id)
            ->setNameId($nameId)
            ->setOp($op);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\BSGGroup_PNRB
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get AssociatedReferenceInformation value
     * @return \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation|null
     */
    public function getAssociatedReferenceInformation()
    {
        return $this->AssociatedReferenceInformation;
    }
    /**
     * Set AssociatedReferenceInformation value
     * @param \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation $associatedReferenceInformation
     * @return \Sabre\UpdateReservation\StructType\BSGGroup_PNRB
     */
    public function setAssociatedReferenceInformation(\Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation $associatedReferenceInformation = null)
    {
        $this->AssociatedReferenceInformation = $associatedReferenceInformation;
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
     * @return \Sabre\UpdateReservation\StructType\BSGGroup_PNRB
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
     * Get nameId value
     * @return string|null
     */
    public function getNameId()
    {
        return $this->nameId;
    }
    /**
     * Set nameId value
     * @param string $nameId
     * @return \Sabre\UpdateReservation\StructType\BSGGroup_PNRB
     */
    public function setNameId($nameId = null)
    {
        // validation for constraint: string
        if (!is_null($nameId) && !is_string($nameId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameId)), __LINE__);
        }
        $this->nameId = $nameId;
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
     * @return \Sabre\UpdateReservation\StructType\BSGGroup_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\BSGGroup_PNRB
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
