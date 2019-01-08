<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Errors.PNRB StructType
 * @subpackage Structs
 */
class Errors_PNRB extends AbstractStructBase
{
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Error[]
     */
    public $Error;
    /**
     * Constructor method for Errors.PNRB
     * @uses Errors_PNRB::setError()
     * @param \Sabre\UpdateReservation\StructType\Error[] $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return \Sabre\UpdateReservation\StructType\Error[]|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Error[] $error
     * @return \Sabre\UpdateReservation\StructType\Errors_PNRB
     */
    public function setError(array $error = array())
    {
        foreach ($error as $errors_PNRBErrorItem) {
            // validation for constraint: itemType
            if (!$errors_PNRBErrorItem instanceof \Sabre\UpdateReservation\StructType\Error) {
                throw new \InvalidArgumentException(sprintf('The Error property can only contain items of \Sabre\UpdateReservation\StructType\Error, "%s" given', is_object($errors_PNRBErrorItem) ? get_class($errors_PNRBErrorItem) : gettype($errors_PNRBErrorItem)), __LINE__);
            }
        }
        $this->Error = $error;
        return $this;
    }
    /**
     * Add item to Error value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Error $item
     * @return \Sabre\UpdateReservation\StructType\Errors_PNRB
     */
    public function addToError(\Sabre\UpdateReservation\StructType\Error $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Error) {
            throw new \InvalidArgumentException(sprintf('The Error property can only contain items of \Sabre\UpdateReservation\StructType\Error, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Error[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Errors_PNRB
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
