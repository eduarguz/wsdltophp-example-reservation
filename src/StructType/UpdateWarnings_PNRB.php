<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateWarnings.PNRB StructType
 * @subpackage Structs
 */
class UpdateWarnings_PNRB extends AbstractStructBase
{
    /**
     * The Warning
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Warning[]
     */
    public $Warning;
    /**
     * Constructor method for UpdateWarnings.PNRB
     * @uses UpdateWarnings_PNRB::setWarning()
     * @param \Sabre\UpdateReservation\StructType\Warning[] $warning
     */
    public function __construct(array $warning = array())
    {
        $this
            ->setWarning($warning);
    }
    /**
     * Get Warning value
     * @return \Sabre\UpdateReservation\StructType\Warning[]|null
     */
    public function getWarning()
    {
        return $this->Warning;
    }
    /**
     * Set Warning value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Warning[] $warning
     * @return \Sabre\UpdateReservation\StructType\UpdateWarnings_PNRB
     */
    public function setWarning(array $warning = array())
    {
        foreach ($warning as $updateWarnings_PNRBWarningItem) {
            // validation for constraint: itemType
            if (!$updateWarnings_PNRBWarningItem instanceof \Sabre\UpdateReservation\StructType\Warning) {
                throw new \InvalidArgumentException(sprintf('The Warning property can only contain items of \Sabre\UpdateReservation\StructType\Warning, "%s" given', is_object($updateWarnings_PNRBWarningItem) ? get_class($updateWarnings_PNRBWarningItem) : gettype($updateWarnings_PNRBWarningItem)), __LINE__);
            }
        }
        $this->Warning = $warning;
        return $this;
    }
    /**
     * Add item to Warning value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Warning $item
     * @return \Sabre\UpdateReservation\StructType\UpdateWarnings_PNRB
     */
    public function addToWarning(\Sabre\UpdateReservation\StructType\Warning $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Warning) {
            throw new \InvalidArgumentException(sprintf('The Warning property can only contain items of \Sabre\UpdateReservation\StructType\Warning, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Warning[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\UpdateWarnings_PNRB
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
