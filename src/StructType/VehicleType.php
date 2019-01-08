<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleType StructType
 * @subpackage Structs
 */
class VehicleType extends AbstractStructBase
{
    /**
     * The ChangePolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ChangePolicy
     */
    public $ChangePolicy;
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - documentation: "ConfirmationNumber" is used to return the vehicle rental confirmation number.
     * - minOccurs: 0
     * @var string
     */
    public $ConfirmationNumber;
    /**
     * The DirectConnect
     * Meta informations extracted from the WSDL
     * - documentation: "DirectConnect" is used to return miscellaneous direct connect-related information.
     * - minOccurs: 0
     * @var string
     */
    public $DirectConnect;
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\POSType
     */
    public $POS;
    /**
     * The VehicleRentalCore
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VehicleRentalCore
     */
    public $VehicleRentalCore;
    /**
     * The VehicleVendorAvail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VehicleVendorAvail
     */
    public $VehicleVendorAvail;
    /**
     * The PricingElements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PricingElementsType
     */
    public $PricingElements;
    /**
     * The dayOfWeekInd
     * Meta informations extracted from the WSDL
     * - documentation: "dayOfWeekInd" is used to return the day of the week indicator.
     * - use: optional
     * @var string
     */
    public $dayOfWeekInd;
    /**
     * The linkCode
     * Meta informations extracted from the WSDL
     * - documentation: "linkCode" is used to return the link code
     * - use: optional
     * @var string
     */
    public $linkCode;
    /**
     * The mergedSegmentInd
     * Meta informations extracted from the WSDL
     * - documentation: "mergedSegmentInd" is used to return the merged segment indicator associated with the particular itinerary segment if applicable.
     * - use: optional
     * @var string
     */
    public $mergedSegmentInd;
    /**
     * Constructor method for VehicleType
     * @uses VehicleType::setChangePolicy()
     * @uses VehicleType::setConfirmationNumber()
     * @uses VehicleType::setDirectConnect()
     * @uses VehicleType::setPOS()
     * @uses VehicleType::setVehicleRentalCore()
     * @uses VehicleType::setVehicleVendorAvail()
     * @uses VehicleType::setPricingElements()
     * @uses VehicleType::setDayOfWeekInd()
     * @uses VehicleType::setLinkCode()
     * @uses VehicleType::setMergedSegmentInd()
     * @param \Sabre\UpdateReservation\StructType\ChangePolicy $changePolicy
     * @param string $confirmationNumber
     * @param string $directConnect
     * @param \Sabre\UpdateReservation\StructType\POSType $pOS
     * @param \Sabre\UpdateReservation\StructType\VehicleRentalCore $vehicleRentalCore
     * @param \Sabre\UpdateReservation\StructType\VehicleVendorAvail $vehicleVendorAvail
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements
     * @param string $dayOfWeekInd
     * @param string $linkCode
     * @param string $mergedSegmentInd
     */
    public function __construct(\Sabre\UpdateReservation\StructType\ChangePolicy $changePolicy = null, $confirmationNumber = null, $directConnect = null, \Sabre\UpdateReservation\StructType\POSType $pOS = null, \Sabre\UpdateReservation\StructType\VehicleRentalCore $vehicleRentalCore = null, \Sabre\UpdateReservation\StructType\VehicleVendorAvail $vehicleVendorAvail = null, \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements = null, $dayOfWeekInd = null, $linkCode = null, $mergedSegmentInd = null)
    {
        $this
            ->setChangePolicy($changePolicy)
            ->setConfirmationNumber($confirmationNumber)
            ->setDirectConnect($directConnect)
            ->setPOS($pOS)
            ->setVehicleRentalCore($vehicleRentalCore)
            ->setVehicleVendorAvail($vehicleVendorAvail)
            ->setPricingElements($pricingElements)
            ->setDayOfWeekInd($dayOfWeekInd)
            ->setLinkCode($linkCode)
            ->setMergedSegmentInd($mergedSegmentInd);
    }
    /**
     * Get ChangePolicy value
     * @return \Sabre\UpdateReservation\StructType\ChangePolicy|null
     */
    public function getChangePolicy()
    {
        return $this->ChangePolicy;
    }
    /**
     * Set ChangePolicy value
     * @param \Sabre\UpdateReservation\StructType\ChangePolicy $changePolicy
     * @return \Sabre\UpdateReservation\StructType\VehicleType
     */
    public function setChangePolicy(\Sabre\UpdateReservation\StructType\ChangePolicy $changePolicy = null)
    {
        $this->ChangePolicy = $changePolicy;
        return $this;
    }
    /**
     * Get ConfirmationNumber value
     * @return string|null
     */
    public function getConfirmationNumber()
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string $confirmationNumber
     * @return \Sabre\UpdateReservation\StructType\VehicleType
     */
    public function setConfirmationNumber($confirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationNumber) && !is_string($confirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    /**
     * Get DirectConnect value
     * @return string|null
     */
    public function getDirectConnect()
    {
        return $this->DirectConnect;
    }
    /**
     * Set DirectConnect value
     * @param string $directConnect
     * @return \Sabre\UpdateReservation\StructType\VehicleType
     */
    public function setDirectConnect($directConnect = null)
    {
        // validation for constraint: string
        if (!is_null($directConnect) && !is_string($directConnect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($directConnect)), __LINE__);
        }
        $this->DirectConnect = $directConnect;
        return $this;
    }
    /**
     * Get POS value
     * @return \Sabre\UpdateReservation\StructType\POSType|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Sabre\UpdateReservation\StructType\POSType $pOS
     * @return \Sabre\UpdateReservation\StructType\VehicleType
     */
    public function setPOS(\Sabre\UpdateReservation\StructType\POSType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get VehicleRentalCore value
     * @return \Sabre\UpdateReservation\StructType\VehicleRentalCore|null
     */
    public function getVehicleRentalCore()
    {
        return $this->VehicleRentalCore;
    }
    /**
     * Set VehicleRentalCore value
     * @param \Sabre\UpdateReservation\StructType\VehicleRentalCore $vehicleRentalCore
     * @return \Sabre\UpdateReservation\StructType\VehicleType
     */
    public function setVehicleRentalCore(\Sabre\UpdateReservation\StructType\VehicleRentalCore $vehicleRentalCore = null)
    {
        $this->VehicleRentalCore = $vehicleRentalCore;
        return $this;
    }
    /**
     * Get VehicleVendorAvail value
     * @return \Sabre\UpdateReservation\StructType\VehicleVendorAvail|null
     */
    public function getVehicleVendorAvail()
    {
        return $this->VehicleVendorAvail;
    }
    /**
     * Set VehicleVendorAvail value
     * @param \Sabre\UpdateReservation\StructType\VehicleVendorAvail $vehicleVendorAvail
     * @return \Sabre\UpdateReservation\StructType\VehicleType
     */
    public function setVehicleVendorAvail(\Sabre\UpdateReservation\StructType\VehicleVendorAvail $vehicleVendorAvail = null)
    {
        $this->VehicleVendorAvail = $vehicleVendorAvail;
        return $this;
    }
    /**
     * Get PricingElements value
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType|null
     */
    public function getPricingElements()
    {
        return $this->PricingElements;
    }
    /**
     * Set PricingElements value
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements
     * @return \Sabre\UpdateReservation\StructType\VehicleType
     */
    public function setPricingElements(\Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements = null)
    {
        $this->PricingElements = $pricingElements;
        return $this;
    }
    /**
     * Get dayOfWeekInd value
     * @return string|null
     */
    public function getDayOfWeekInd()
    {
        return $this->dayOfWeekInd;
    }
    /**
     * Set dayOfWeekInd value
     * @param string $dayOfWeekInd
     * @return \Sabre\UpdateReservation\StructType\VehicleType
     */
    public function setDayOfWeekInd($dayOfWeekInd = null)
    {
        // validation for constraint: string
        if (!is_null($dayOfWeekInd) && !is_string($dayOfWeekInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dayOfWeekInd)), __LINE__);
        }
        $this->dayOfWeekInd = $dayOfWeekInd;
        return $this;
    }
    /**
     * Get linkCode value
     * @return string|null
     */
    public function getLinkCode()
    {
        return $this->linkCode;
    }
    /**
     * Set linkCode value
     * @param string $linkCode
     * @return \Sabre\UpdateReservation\StructType\VehicleType
     */
    public function setLinkCode($linkCode = null)
    {
        // validation for constraint: string
        if (!is_null($linkCode) && !is_string($linkCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkCode)), __LINE__);
        }
        $this->linkCode = $linkCode;
        return $this;
    }
    /**
     * Get mergedSegmentInd value
     * @return string|null
     */
    public function getMergedSegmentInd()
    {
        return $this->mergedSegmentInd;
    }
    /**
     * Set mergedSegmentInd value
     * @param string $mergedSegmentInd
     * @return \Sabre\UpdateReservation\StructType\VehicleType
     */
    public function setMergedSegmentInd($mergedSegmentInd = null)
    {
        // validation for constraint: string
        if (!is_null($mergedSegmentInd) && !is_string($mergedSegmentInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mergedSegmentInd)), __LINE__);
        }
        $this->mergedSegmentInd = $mergedSegmentInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VehicleType
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
