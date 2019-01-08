<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SymbolCodedRemark.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: * enter remark to print on itinerary form 5‡(free text) 5‡ARRIVE AT AIRPORT EARLY CONSTRUCTION * enter remark to print on invoice form 5.(free text) 5.RATE IS BASED ON SATURDAY NIGHT STAY * enter remark to print in form of
 * payment box on the ticket 5-(free text) 5-AGENCY CHECK * enter remark to print on ticket under name field for reference 5*(free text) 5*MUST TRAVEL WITH JUAREZ/J
 * @subpackage Structs
 */
class SymbolCodedRemark_PNRB extends AbstractStructBase
{
    /**
     * The RemarkLines
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RemarkLines_PNRB
     */
    public $RemarkLines;
    /**
     * The Print
     * Meta informations extracted from the WSDL
     * - documentation: ITIN = remark is printed on itinerary form INV = remark is printed PAY = remark is printed in payment box on the ticket NAME = remark is printed under name field
     * - minOccurs: 0
     * @var string
     */
    public $Print;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $index;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for SymbolCodedRemark.PNRB
     * @uses SymbolCodedRemark_PNRB::setRemarkLines()
     * @uses SymbolCodedRemark_PNRB::setPrint()
     * @uses SymbolCodedRemark_PNRB::setIndex()
     * @uses SymbolCodedRemark_PNRB::setId()
     * @uses SymbolCodedRemark_PNRB::setOp()
     * @uses SymbolCodedRemark_PNRB::setRPH()
     * @param \Sabre\UpdateReservation\StructType\RemarkLines_PNRB $remarkLines
     * @param string $print
     * @param int $index
     * @param string $id
     * @param string $op
     * @param string $rPH
     */
    public function __construct(\Sabre\UpdateReservation\StructType\RemarkLines_PNRB $remarkLines = null, $print = null, $index = null, $id = null, $op = null, $rPH = null)
    {
        $this
            ->setRemarkLines($remarkLines)
            ->setPrint($print)
            ->setIndex($index)
            ->setId($id)
            ->setOp($op)
            ->setRPH($rPH);
    }
    /**
     * Get RemarkLines value
     * @return \Sabre\UpdateReservation\StructType\RemarkLines_PNRB|null
     */
    public function getRemarkLines()
    {
        return $this->RemarkLines;
    }
    /**
     * Set RemarkLines value
     * @param \Sabre\UpdateReservation\StructType\RemarkLines_PNRB $remarkLines
     * @return \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB
     */
    public function setRemarkLines(\Sabre\UpdateReservation\StructType\RemarkLines_PNRB $remarkLines = null)
    {
        $this->RemarkLines = $remarkLines;
        return $this;
    }
    /**
     * Get Print value
     * @return string|null
     */
    public function getPrint()
    {
        return $this->Print;
    }
    /**
     * Set Print value
     * @uses \Sabre\UpdateReservation\EnumType\RemarkPrintCode_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RemarkPrintCode_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $print
     * @return \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB
     */
    public function setPrint($print = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RemarkPrintCode_PNRB::valueIsValid($print)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $print, implode(', ', \Sabre\UpdateReservation\EnumType\RemarkPrintCode_PNRB::getValidValues())), __LINE__);
        }
        $this->Print = $print;
        return $this;
    }
    /**
     * Get index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB
     */
    public function setIndex($index = null)
    {
        // validation for constraint: maxInclusive
        if ($index > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $index), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($index < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $index), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->index = $index;
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
     * @return \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB
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
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB
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
