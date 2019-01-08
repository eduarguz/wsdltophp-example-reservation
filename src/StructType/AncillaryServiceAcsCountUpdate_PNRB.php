<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceAcsCountUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServiceAcsCountUpdate_PNRB extends AbstractStructBase
{
    /**
     * The ACSCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ACSCount;
    /**
     * Constructor method for AncillaryServiceAcsCountUpdate.PNRB
     * @uses AncillaryServiceAcsCountUpdate_PNRB::setACSCount()
     * @param int $aCSCount
     */
    public function __construct($aCSCount = null)
    {
        $this
            ->setACSCount($aCSCount);
    }
    /**
     * Get ACSCount value
     * @return int|null
     */
    public function getACSCount()
    {
        return $this->ACSCount;
    }
    /**
     * Set ACSCount value
     * @param int $aCSCount
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceAcsCountUpdate_PNRB
     */
    public function setACSCount($aCSCount = null)
    {
        // validation for constraint: int
        if (!is_null($aCSCount) && !is_numeric($aCSCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aCSCount)), __LINE__);
        }
        $this->ACSCount = $aCSCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceAcsCountUpdate_PNRB
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
