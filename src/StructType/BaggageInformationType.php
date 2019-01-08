<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageInformationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about baggage
 * @subpackage Structs
 */
class BaggageInformationType extends AbstractStructBase
{
    /**
     * The Allowance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Sabre\UpdateReservation\StructType\Allowance[]
     */
    public $Allowance;
    /**
     * Constructor method for BaggageInformationType
     * @uses BaggageInformationType::setAllowance()
     * @param \Sabre\UpdateReservation\StructType\Allowance[] $allowance
     */
    public function __construct(array $allowance = array())
    {
        $this
            ->setAllowance($allowance);
    }
    /**
     * Get Allowance value
     * @return \Sabre\UpdateReservation\StructType\Allowance[]|null
     */
    public function getAllowance()
    {
        return $this->Allowance;
    }
    /**
     * Set Allowance value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Allowance[] $allowance
     * @return \Sabre\UpdateReservation\StructType\BaggageInformationType
     */
    public function setAllowance(array $allowance = array())
    {
        foreach ($allowance as $baggageInformationTypeAllowanceItem) {
            // validation for constraint: itemType
            if (!$baggageInformationTypeAllowanceItem instanceof \Sabre\UpdateReservation\StructType\Allowance) {
                throw new \InvalidArgumentException(sprintf('The Allowance property can only contain items of \Sabre\UpdateReservation\StructType\Allowance, "%s" given', is_object($baggageInformationTypeAllowanceItem) ? get_class($baggageInformationTypeAllowanceItem) : gettype($baggageInformationTypeAllowanceItem)), __LINE__);
            }
        }
        $this->Allowance = $allowance;
        return $this;
    }
    /**
     * Add item to Allowance value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Allowance $item
     * @return \Sabre\UpdateReservation\StructType\BaggageInformationType
     */
    public function addToAllowance(\Sabre\UpdateReservation\StructType\Allowance $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Allowance) {
            throw new \InvalidArgumentException(sprintf('The Allowance property can only contain items of \Sabre\UpdateReservation\StructType\Allowance, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Allowance[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BaggageInformationType
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
