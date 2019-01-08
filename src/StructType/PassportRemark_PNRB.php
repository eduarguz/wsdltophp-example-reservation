<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassportRemark.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: * enter passport data in historical remarks 5H-‡(passport issuing country)-(passport #)-(country code of citizenship)-(passenger name as it appears in passport, plus free text) 5H-‡US-D123456-US-GREEN/ROBERT W. NOTE: only for AA
 * * enter data for military personnel with pink or green ID card 5H-‡(country issuing military orders)-(card #)-(citizenship)-(passenger's full name)-(area order number or order number) 5H-‡FR-999999-FR-DUPONT/VALERIE-5577 NOTE: only for AA
 * @subpackage Structs
 */
class PassportRemark_PNRB extends AbstractStructBase
{
    /**
     * The IssuingCountry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssuingCountry;
    /**
     * The Citizenship
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Citizenship;
    /**
     * The PassengerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerName;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The OrderNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OrderNumber;
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
     * Constructor method for PassportRemark.PNRB
     * @uses PassportRemark_PNRB::setIssuingCountry()
     * @uses PassportRemark_PNRB::setCitizenship()
     * @uses PassportRemark_PNRB::setPassengerName()
     * @uses PassportRemark_PNRB::setDocumentNumber()
     * @uses PassportRemark_PNRB::setComment()
     * @uses PassportRemark_PNRB::setOrderNumber()
     * @uses PassportRemark_PNRB::setIndex()
     * @uses PassportRemark_PNRB::setId()
     * @uses PassportRemark_PNRB::setOp()
     * @uses PassportRemark_PNRB::setRPH()
     * @param string $issuingCountry
     * @param string $citizenship
     * @param string $passengerName
     * @param string $documentNumber
     * @param string $comment
     * @param string $orderNumber
     * @param int $index
     * @param string $id
     * @param string $op
     * @param string $rPH
     */
    public function __construct($issuingCountry = null, $citizenship = null, $passengerName = null, $documentNumber = null, $comment = null, $orderNumber = null, $index = null, $id = null, $op = null, $rPH = null)
    {
        $this
            ->setIssuingCountry($issuingCountry)
            ->setCitizenship($citizenship)
            ->setPassengerName($passengerName)
            ->setDocumentNumber($documentNumber)
            ->setComment($comment)
            ->setOrderNumber($orderNumber)
            ->setIndex($index)
            ->setId($id)
            ->setOp($op)
            ->setRPH($rPH);
    }
    /**
     * Get IssuingCountry value
     * @return string|null
     */
    public function getIssuingCountry()
    {
        return $this->IssuingCountry;
    }
    /**
     * Set IssuingCountry value
     * @param string $issuingCountry
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
     */
    public function setIssuingCountry($issuingCountry = null)
    {
        // validation for constraint: string
        if (!is_null($issuingCountry) && !is_string($issuingCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuingCountry)), __LINE__);
        }
        $this->IssuingCountry = $issuingCountry;
        return $this;
    }
    /**
     * Get Citizenship value
     * @return string|null
     */
    public function getCitizenship()
    {
        return $this->Citizenship;
    }
    /**
     * Set Citizenship value
     * @param string $citizenship
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
     */
    public function setCitizenship($citizenship = null)
    {
        // validation for constraint: string
        if (!is_null($citizenship) && !is_string($citizenship)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($citizenship)), __LINE__);
        }
        $this->Citizenship = $citizenship;
        return $this;
    }
    /**
     * Get PassengerName value
     * @return string|null
     */
    public function getPassengerName()
    {
        return $this->PassengerName;
    }
    /**
     * Set PassengerName value
     * @param string $passengerName
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
     */
    public function setPassengerName($passengerName = null)
    {
        // validation for constraint: string
        if (!is_null($passengerName) && !is_string($passengerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerName)), __LINE__);
        }
        $this->PassengerName = $passengerName;
        return $this;
    }
    /**
     * Get DocumentNumber value
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $documentNumber
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
     */
    public function setDocumentNumber($documentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentNumber)), __LINE__);
        }
        $this->DocumentNumber = $documentNumber;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get OrderNumber value
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }
    /**
     * Set OrderNumber value
     * @param string $orderNumber
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
     */
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderNumber)), __LINE__);
        }
        $this->OrderNumber = $orderNumber;
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
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB
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
