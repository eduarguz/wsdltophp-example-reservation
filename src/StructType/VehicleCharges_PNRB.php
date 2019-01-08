<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCharges.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
 * @subpackage Structs
 */
class VehicleCharges_PNRB extends AbstractStructBase
{
    /**
     * The VehicleChargeAmount
     * Meta informations extracted from the WSDL
     * - documentation: The VehicleChargeType complex type defines information on a specific charge associated with the rental of a vehicle, including unit cost, quantity and total cost.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $VehicleChargeAmount;
    /**
     * The ApproximateTotalChargeAmount
     * Meta informations extracted from the WSDL
     * - documentation: approximate total charge (vehicle)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ApproximateTotalChargeAmount;
    /**
     * The ApproximateTotalChargeRateType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ApproximateTotalChargeRateType;
    /**
     * The NumDays
     * Meta informations extracted from the WSDL
     * - documentation: number of days of rental charge
     * - minOccurs: 0
     * @var string
     */
    public $NumDays;
    /**
     * The NumHours
     * Meta informations extracted from the WSDL
     * - documentation: number of hours of rental charge
     * - minOccurs: 0
     * @var string
     */
    public $NumHours;
    /**
     * The Mileage
     * Meta informations extracted from the WSDL
     * - documentation: mileage allowance
     * - minOccurs: 0
     * @var string
     */
    public $Mileage;
    /**
     * The TotalMandatoryCharges
     * Meta informations extracted from the WSDL
     * - documentation: mandatory charges total, e.g., state tax
     * - minOccurs: 0
     * @var string
     */
    public $TotalMandatoryCharges;
    /**
     * The DropOffCharge
     * Meta informations extracted from the WSDL
     * - documentation: the car is being dropped off at a different location than the pick-up location the vendor may assess a drop-off charge which will be stated in this field in the currency indicated in the CarDropOffCurCode field
     * - minOccurs: 0
     * @var string
     */
    public $DropOffCharge;
    /**
     * The DropOffDecimalPlaces
     * Meta informations extracted from the WSDL
     * - documentation: decimal places in drop off charge
     * - minOccurs: 0
     * @var int
     */
    public $DropOffDecimalPlaces;
    /**
     * The GuaranteedInd
     * Meta informations extracted from the WSDL
     * - documentation: ID of guarantee
     * - minOccurs: 0
     * @var string
     */
    public $GuaranteedInd;
    /**
     * Constructor method for VehicleCharges.PNRB
     * @uses VehicleCharges_PNRB::setVehicleChargeAmount()
     * @uses VehicleCharges_PNRB::setApproximateTotalChargeAmount()
     * @uses VehicleCharges_PNRB::setApproximateTotalChargeRateType()
     * @uses VehicleCharges_PNRB::setNumDays()
     * @uses VehicleCharges_PNRB::setNumHours()
     * @uses VehicleCharges_PNRB::setMileage()
     * @uses VehicleCharges_PNRB::setTotalMandatoryCharges()
     * @uses VehicleCharges_PNRB::setDropOffCharge()
     * @uses VehicleCharges_PNRB::setDropOffDecimalPlaces()
     * @uses VehicleCharges_PNRB::setGuaranteedInd()
     * @param string[] $vehicleChargeAmount
     * @param string[] $approximateTotalChargeAmount
     * @param string[] $approximateTotalChargeRateType
     * @param string $numDays
     * @param string $numHours
     * @param string $mileage
     * @param string $totalMandatoryCharges
     * @param string $dropOffCharge
     * @param int $dropOffDecimalPlaces
     * @param string $guaranteedInd
     */
    public function __construct(array $vehicleChargeAmount = array(), array $approximateTotalChargeAmount = array(), array $approximateTotalChargeRateType = array(), $numDays = null, $numHours = null, $mileage = null, $totalMandatoryCharges = null, $dropOffCharge = null, $dropOffDecimalPlaces = null, $guaranteedInd = null)
    {
        $this
            ->setVehicleChargeAmount($vehicleChargeAmount)
            ->setApproximateTotalChargeAmount($approximateTotalChargeAmount)
            ->setApproximateTotalChargeRateType($approximateTotalChargeRateType)
            ->setNumDays($numDays)
            ->setNumHours($numHours)
            ->setMileage($mileage)
            ->setTotalMandatoryCharges($totalMandatoryCharges)
            ->setDropOffCharge($dropOffCharge)
            ->setDropOffDecimalPlaces($dropOffDecimalPlaces)
            ->setGuaranteedInd($guaranteedInd);
    }
    /**
     * Get VehicleChargeAmount value
     * @return string[]|null
     */
    public function getVehicleChargeAmount()
    {
        return $this->VehicleChargeAmount;
    }
    /**
     * Set VehicleChargeAmount value
     * @throws \InvalidArgumentException
     * @param string[] $vehicleChargeAmount
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function setVehicleChargeAmount(array $vehicleChargeAmount = array())
    {
        foreach ($vehicleChargeAmount as $vehicleCharges_PNRBVehicleChargeAmountItem) {
            // validation for constraint: itemType
            if (!is_string($vehicleCharges_PNRBVehicleChargeAmountItem)) {
                throw new \InvalidArgumentException(sprintf('The VehicleChargeAmount property can only contain items of string, "%s" given', is_object($vehicleCharges_PNRBVehicleChargeAmountItem) ? get_class($vehicleCharges_PNRBVehicleChargeAmountItem) : gettype($vehicleCharges_PNRBVehicleChargeAmountItem)), __LINE__);
            }
        }
        $this->VehicleChargeAmount = $vehicleChargeAmount;
        return $this;
    }
    /**
     * Add item to VehicleChargeAmount value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function addToVehicleChargeAmount($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The VehicleChargeAmount property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehicleChargeAmount[] = $item;
        return $this;
    }
    /**
     * Get ApproximateTotalChargeAmount value
     * @return string[]|null
     */
    public function getApproximateTotalChargeAmount()
    {
        return $this->ApproximateTotalChargeAmount;
    }
    /**
     * Set ApproximateTotalChargeAmount value
     * @throws \InvalidArgumentException
     * @param string[] $approximateTotalChargeAmount
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function setApproximateTotalChargeAmount(array $approximateTotalChargeAmount = array())
    {
        foreach ($approximateTotalChargeAmount as $vehicleCharges_PNRBApproximateTotalChargeAmountItem) {
            // validation for constraint: itemType
            if (!is_string($vehicleCharges_PNRBApproximateTotalChargeAmountItem)) {
                throw new \InvalidArgumentException(sprintf('The ApproximateTotalChargeAmount property can only contain items of string, "%s" given', is_object($vehicleCharges_PNRBApproximateTotalChargeAmountItem) ? get_class($vehicleCharges_PNRBApproximateTotalChargeAmountItem) : gettype($vehicleCharges_PNRBApproximateTotalChargeAmountItem)), __LINE__);
            }
        }
        $this->ApproximateTotalChargeAmount = $approximateTotalChargeAmount;
        return $this;
    }
    /**
     * Add item to ApproximateTotalChargeAmount value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function addToApproximateTotalChargeAmount($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ApproximateTotalChargeAmount property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ApproximateTotalChargeAmount[] = $item;
        return $this;
    }
    /**
     * Get ApproximateTotalChargeRateType value
     * @return string[]|null
     */
    public function getApproximateTotalChargeRateType()
    {
        return $this->ApproximateTotalChargeRateType;
    }
    /**
     * Set ApproximateTotalChargeRateType value
     * @throws \InvalidArgumentException
     * @param string[] $approximateTotalChargeRateType
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function setApproximateTotalChargeRateType(array $approximateTotalChargeRateType = array())
    {
        foreach ($approximateTotalChargeRateType as $vehicleCharges_PNRBApproximateTotalChargeRateTypeItem) {
            // validation for constraint: itemType
            if (!is_string($vehicleCharges_PNRBApproximateTotalChargeRateTypeItem)) {
                throw new \InvalidArgumentException(sprintf('The ApproximateTotalChargeRateType property can only contain items of string, "%s" given', is_object($vehicleCharges_PNRBApproximateTotalChargeRateTypeItem) ? get_class($vehicleCharges_PNRBApproximateTotalChargeRateTypeItem) : gettype($vehicleCharges_PNRBApproximateTotalChargeRateTypeItem)), __LINE__);
            }
        }
        $this->ApproximateTotalChargeRateType = $approximateTotalChargeRateType;
        return $this;
    }
    /**
     * Add item to ApproximateTotalChargeRateType value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function addToApproximateTotalChargeRateType($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ApproximateTotalChargeRateType property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ApproximateTotalChargeRateType[] = $item;
        return $this;
    }
    /**
     * Get NumDays value
     * @return string|null
     */
    public function getNumDays()
    {
        return $this->NumDays;
    }
    /**
     * Set NumDays value
     * @param string $numDays
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function setNumDays($numDays = null)
    {
        // validation for constraint: string
        if (!is_null($numDays) && !is_string($numDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numDays)), __LINE__);
        }
        $this->NumDays = $numDays;
        return $this;
    }
    /**
     * Get NumHours value
     * @return string|null
     */
    public function getNumHours()
    {
        return $this->NumHours;
    }
    /**
     * Set NumHours value
     * @param string $numHours
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function setNumHours($numHours = null)
    {
        // validation for constraint: string
        if (!is_null($numHours) && !is_string($numHours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numHours)), __LINE__);
        }
        $this->NumHours = $numHours;
        return $this;
    }
    /**
     * Get Mileage value
     * @return string|null
     */
    public function getMileage()
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param string $mileage
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function setMileage($mileage = null)
    {
        // validation for constraint: string
        if (!is_null($mileage) && !is_string($mileage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mileage)), __LINE__);
        }
        $this->Mileage = $mileage;
        return $this;
    }
    /**
     * Get TotalMandatoryCharges value
     * @return string|null
     */
    public function getTotalMandatoryCharges()
    {
        return $this->TotalMandatoryCharges;
    }
    /**
     * Set TotalMandatoryCharges value
     * @param string $totalMandatoryCharges
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function setTotalMandatoryCharges($totalMandatoryCharges = null)
    {
        // validation for constraint: string
        if (!is_null($totalMandatoryCharges) && !is_string($totalMandatoryCharges)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalMandatoryCharges)), __LINE__);
        }
        $this->TotalMandatoryCharges = $totalMandatoryCharges;
        return $this;
    }
    /**
     * Get DropOffCharge value
     * @return string|null
     */
    public function getDropOffCharge()
    {
        return $this->DropOffCharge;
    }
    /**
     * Set DropOffCharge value
     * @param string $dropOffCharge
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function setDropOffCharge($dropOffCharge = null)
    {
        // validation for constraint: string
        if (!is_null($dropOffCharge) && !is_string($dropOffCharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dropOffCharge)), __LINE__);
        }
        $this->DropOffCharge = $dropOffCharge;
        return $this;
    }
    /**
     * Get DropOffDecimalPlaces value
     * @return int|null
     */
    public function getDropOffDecimalPlaces()
    {
        return $this->DropOffDecimalPlaces;
    }
    /**
     * Set DropOffDecimalPlaces value
     * @param int $dropOffDecimalPlaces
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function setDropOffDecimalPlaces($dropOffDecimalPlaces = null)
    {
        // validation for constraint: int
        if (!is_null($dropOffDecimalPlaces) && !is_numeric($dropOffDecimalPlaces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dropOffDecimalPlaces)), __LINE__);
        }
        $this->DropOffDecimalPlaces = $dropOffDecimalPlaces;
        return $this;
    }
    /**
     * Get GuaranteedInd value
     * @return string|null
     */
    public function getGuaranteedInd()
    {
        return $this->GuaranteedInd;
    }
    /**
     * Set GuaranteedInd value
     * @param string $guaranteedInd
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public function setGuaranteedInd($guaranteedInd = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteedInd) && !is_string($guaranteedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteedInd)), __LINE__);
        }
        $this->GuaranteedInd = $guaranteedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
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
