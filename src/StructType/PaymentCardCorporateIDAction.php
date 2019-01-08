<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentCardCorporateIDAction StructType
 * @subpackage Structs
 */
class PaymentCardCorporateIDAction extends AbstractStructBase
{
    /**
     * The fopElementId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $fopElementId;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $op;
    /**
     * The CorporateIDNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CorporateIDNumber;
    /**
     * Constructor method for PaymentCardCorporateIDAction
     * @uses PaymentCardCorporateIDAction::setFopElementId()
     * @uses PaymentCardCorporateIDAction::setOp()
     * @uses PaymentCardCorporateIDAction::setCorporateIDNumber()
     * @param string $fopElementId
     * @param string $op
     * @param string $corporateIDNumber
     */
    public function __construct($fopElementId = null, $op = null, $corporateIDNumber = null)
    {
        $this
            ->setFopElementId($fopElementId)
            ->setOp($op)
            ->setCorporateIDNumber($corporateIDNumber);
    }
    /**
     * Get fopElementId value
     * @return string
     */
    public function getFopElementId()
    {
        return $this->fopElementId;
    }
    /**
     * Set fopElementId value
     * @param string $fopElementId
     * @return \Sabre\UpdateReservation\StructType\PaymentCardCorporateIDAction
     */
    public function setFopElementId($fopElementId = null)
    {
        // validation for constraint: string
        if (!is_null($fopElementId) && !is_string($fopElementId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fopElementId)), __LINE__);
        }
        $this->fopElementId = $fopElementId;
        return $this;
    }
    /**
     * Get op value
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OpenReservationOperation::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OpenReservationOperation::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\PaymentCardCorporateIDAction
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OpenReservationOperation::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OpenReservationOperation::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Get CorporateIDNumber value
     * @return string|null
     */
    public function getCorporateIDNumber()
    {
        return $this->CorporateIDNumber;
    }
    /**
     * Set CorporateIDNumber value
     * @param string $corporateIDNumber
     * @return \Sabre\UpdateReservation\StructType\PaymentCardCorporateIDAction
     */
    public function setCorporateIDNumber($corporateIDNumber = null)
    {
        // validation for constraint: string
        if (!is_null($corporateIDNumber) && !is_string($corporateIDNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporateIDNumber)), __LINE__);
        }
        $this->CorporateIDNumber = $corporateIDNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PaymentCardCorporateIDAction
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
