<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargeDetails StructType
 * Meta informations extracted from the WSDL
 * - documentation: Car segment Approximate price fields – ‘/AP-¤USD281.27 UNL 3DY 0HR 41.97SSQ 123.11MC/RC-¤STDR/CF-G31214927E8-‘
 * @subpackage Structs
 */
class ChargeDetails extends AbstractStructBase
{
    /**
     * The ApproximateTotalCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ApproximateTotalCharge[]
     */
    public $ApproximateTotalCharge;
    /**
     * Constructor method for ChargeDetails
     * @uses ChargeDetails::setApproximateTotalCharge()
     * @param \Sabre\UpdateReservation\StructType\ApproximateTotalCharge[] $approximateTotalCharge
     */
    public function __construct(array $approximateTotalCharge = array())
    {
        $this
            ->setApproximateTotalCharge($approximateTotalCharge);
    }
    /**
     * Get ApproximateTotalCharge value
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotalCharge[]|null
     */
    public function getApproximateTotalCharge()
    {
        return $this->ApproximateTotalCharge;
    }
    /**
     * Set ApproximateTotalCharge value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ApproximateTotalCharge[] $approximateTotalCharge
     * @return \Sabre\UpdateReservation\StructType\ChargeDetails
     */
    public function setApproximateTotalCharge(array $approximateTotalCharge = array())
    {
        foreach ($approximateTotalCharge as $chargeDetailsApproximateTotalChargeItem) {
            // validation for constraint: itemType
            if (!$chargeDetailsApproximateTotalChargeItem instanceof \Sabre\UpdateReservation\StructType\ApproximateTotalCharge) {
                throw new \InvalidArgumentException(sprintf('The ApproximateTotalCharge property can only contain items of \Sabre\UpdateReservation\StructType\ApproximateTotalCharge, "%s" given', is_object($chargeDetailsApproximateTotalChargeItem) ? get_class($chargeDetailsApproximateTotalChargeItem) : gettype($chargeDetailsApproximateTotalChargeItem)), __LINE__);
            }
        }
        $this->ApproximateTotalCharge = $approximateTotalCharge;
        return $this;
    }
    /**
     * Add item to ApproximateTotalCharge value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ApproximateTotalCharge $item
     * @return \Sabre\UpdateReservation\StructType\ChargeDetails
     */
    public function addToApproximateTotalCharge(\Sabre\UpdateReservation\StructType\ApproximateTotalCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ApproximateTotalCharge) {
            throw new \InvalidArgumentException(sprintf('The ApproximateTotalCharge property can only contain items of \Sabre\UpdateReservation\StructType\ApproximateTotalCharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ApproximateTotalCharge[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ChargeDetails
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
