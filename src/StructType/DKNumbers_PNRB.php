<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DKNumbers.PNRB StructType
 * @subpackage Structs
 */
class DKNumbers_PNRB extends AbstractStructBase
{
    /**
     * The DKNumber
     * Meta informations extracted from the WSDL
     * - documentation: Customer number - agencies use the DK number primarily as an account reference identifier for billing purposes. Ex."1032729284"
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var string[]
     */
    public $DKNumber;
    /**
     * Constructor method for DKNumbers.PNRB
     * @uses DKNumbers_PNRB::setDKNumber()
     * @param string[] $dKNumber
     */
    public function __construct(array $dKNumber = array())
    {
        $this
            ->setDKNumber($dKNumber);
    }
    /**
     * Get DKNumber value
     * @return string[]|null
     */
    public function getDKNumber()
    {
        return $this->DKNumber;
    }
    /**
     * Set DKNumber value
     * @throws \InvalidArgumentException
     * @param string[] $dKNumber
     * @return \Sabre\UpdateReservation\StructType\DKNumbers_PNRB
     */
    public function setDKNumber(array $dKNumber = array())
    {
        foreach ($dKNumber as $dKNumbers_PNRBDKNumberItem) {
            // validation for constraint: itemType
            if (!is_string($dKNumbers_PNRBDKNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The DKNumber property can only contain items of string, "%s" given', is_object($dKNumbers_PNRBDKNumberItem) ? get_class($dKNumbers_PNRBDKNumberItem) : gettype($dKNumbers_PNRBDKNumberItem)), __LINE__);
            }
        }
        $this->DKNumber = $dKNumber;
        return $this;
    }
    /**
     * Add item to DKNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\DKNumbers_PNRB
     */
    public function addToDKNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DKNumber property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DKNumber[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DKNumbers_PNRB
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
