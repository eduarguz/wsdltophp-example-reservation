<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingPaymentInformation StructType
 * @subpackage Structs
 */
class LodgingPaymentInformation extends AbstractStructBase
{
    /**
     * The FormOfPaymentReference
     * @var \Sabre\UpdateReservation\StructType\FormOfPaymentReference
     */
    public $FormOfPaymentReference;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for LodgingPaymentInformation
     * @uses LodgingPaymentInformation::setFormOfPaymentReference()
     * @uses LodgingPaymentInformation::setType()
     * @param \Sabre\UpdateReservation\StructType\FormOfPaymentReference $formOfPaymentReference
     * @param string $type
     */
    public function __construct(\Sabre\UpdateReservation\StructType\FormOfPaymentReference $formOfPaymentReference = null, $type = null)
    {
        $this
            ->setFormOfPaymentReference($formOfPaymentReference)
            ->setType($type);
    }
    /**
     * Get FormOfPaymentReference value
     * @return \Sabre\UpdateReservation\StructType\FormOfPaymentReference|null
     */
    public function getFormOfPaymentReference()
    {
        return $this->FormOfPaymentReference;
    }
    /**
     * Set FormOfPaymentReference value
     * @param \Sabre\UpdateReservation\StructType\FormOfPaymentReference $formOfPaymentReference
     * @return \Sabre\UpdateReservation\StructType\LodgingPaymentInformation
     */
    public function setFormOfPaymentReference(\Sabre\UpdateReservation\StructType\FormOfPaymentReference $formOfPaymentReference = null)
    {
        $this->FormOfPaymentReference = $formOfPaymentReference;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Sabre\UpdateReservation\EnumType\LodgingPaymentTypeCode::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\LodgingPaymentTypeCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\LodgingPaymentInformation
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\LodgingPaymentTypeCode::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\LodgingPaymentTypeCode::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LodgingPaymentInformation
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
