<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HeaderUpdateItem.PNRB StructType
 * @subpackage Structs
 */
class HeaderUpdateItem_PNRB extends AbstractStructBase
{
    /**
     * The OpenSystemReferenceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - length: 16
     * @var string
     */
    public $OpenSystemReferenceId;
    /**
     * Constructor method for HeaderUpdateItem.PNRB
     * @uses HeaderUpdateItem_PNRB::setOpenSystemReferenceId()
     * @param string $openSystemReferenceId
     */
    public function __construct($openSystemReferenceId = null)
    {
        $this
            ->setOpenSystemReferenceId($openSystemReferenceId);
    }
    /**
     * Get OpenSystemReferenceId value
     * @return string|null
     */
    public function getOpenSystemReferenceId()
    {
        return $this->OpenSystemReferenceId;
    }
    /**
     * Set OpenSystemReferenceId value
     * @param string $openSystemReferenceId
     * @return \Sabre\UpdateReservation\StructType\HeaderUpdateItem_PNRB
     */
    public function setOpenSystemReferenceId($openSystemReferenceId = null)
    {
        // validation for constraint: length
        if ((is_scalar($openSystemReferenceId) && strlen($openSystemReferenceId) !== 16) || (is_array($openSystemReferenceId) && count($openSystemReferenceId) !== 16)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 16 element(s) or a scalar of 16 character(s)', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($openSystemReferenceId) && !is_string($openSystemReferenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openSystemReferenceId)), __LINE__);
        }
        $this->OpenSystemReferenceId = $openSystemReferenceId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HeaderUpdateItem_PNRB
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
