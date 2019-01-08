<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BSGAssociatedReferenceInformation StructType
 * @subpackage Structs
 */
class BSGAssociatedReferenceInformation extends AbstractStructBase
{
    /**
     * The OriginalNumberOfSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalNumberOfSeats;
    /**
     * The CurrentNumberOfSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CurrentNumberOfSeats;
    /**
     * The AvailableNumberOfSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AvailableNumberOfSeats;
    /**
     * The SoldNumberOfSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SoldNumberOfSeats;
    /**
     * The AssociatedPNRSummaries
     * Meta informations extracted from the WSDL
     * - documentation: Information including: record locator, number of seats, ticketing time limit+free text
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AssociatedPNRSummaries_PNRB
     */
    public $AssociatedPNRSummaries;
    /**
     * Constructor method for BSGAssociatedReferenceInformation
     * @uses BSGAssociatedReferenceInformation::setOriginalNumberOfSeats()
     * @uses BSGAssociatedReferenceInformation::setCurrentNumberOfSeats()
     * @uses BSGAssociatedReferenceInformation::setAvailableNumberOfSeats()
     * @uses BSGAssociatedReferenceInformation::setSoldNumberOfSeats()
     * @uses BSGAssociatedReferenceInformation::setAssociatedPNRSummaries()
     * @param string $originalNumberOfSeats
     * @param string $currentNumberOfSeats
     * @param string $availableNumberOfSeats
     * @param string $soldNumberOfSeats
     * @param \Sabre\UpdateReservation\StructType\AssociatedPNRSummaries_PNRB $associatedPNRSummaries
     */
    public function __construct($originalNumberOfSeats = null, $currentNumberOfSeats = null, $availableNumberOfSeats = null, $soldNumberOfSeats = null, \Sabre\UpdateReservation\StructType\AssociatedPNRSummaries_PNRB $associatedPNRSummaries = null)
    {
        $this
            ->setOriginalNumberOfSeats($originalNumberOfSeats)
            ->setCurrentNumberOfSeats($currentNumberOfSeats)
            ->setAvailableNumberOfSeats($availableNumberOfSeats)
            ->setSoldNumberOfSeats($soldNumberOfSeats)
            ->setAssociatedPNRSummaries($associatedPNRSummaries);
    }
    /**
     * Get OriginalNumberOfSeats value
     * @return string|null
     */
    public function getOriginalNumberOfSeats()
    {
        return $this->OriginalNumberOfSeats;
    }
    /**
     * Set OriginalNumberOfSeats value
     * @param string $originalNumberOfSeats
     * @return \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation
     */
    public function setOriginalNumberOfSeats($originalNumberOfSeats = null)
    {
        // validation for constraint: string
        if (!is_null($originalNumberOfSeats) && !is_string($originalNumberOfSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalNumberOfSeats)), __LINE__);
        }
        $this->OriginalNumberOfSeats = $originalNumberOfSeats;
        return $this;
    }
    /**
     * Get CurrentNumberOfSeats value
     * @return string|null
     */
    public function getCurrentNumberOfSeats()
    {
        return $this->CurrentNumberOfSeats;
    }
    /**
     * Set CurrentNumberOfSeats value
     * @param string $currentNumberOfSeats
     * @return \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation
     */
    public function setCurrentNumberOfSeats($currentNumberOfSeats = null)
    {
        // validation for constraint: string
        if (!is_null($currentNumberOfSeats) && !is_string($currentNumberOfSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentNumberOfSeats)), __LINE__);
        }
        $this->CurrentNumberOfSeats = $currentNumberOfSeats;
        return $this;
    }
    /**
     * Get AvailableNumberOfSeats value
     * @return string|null
     */
    public function getAvailableNumberOfSeats()
    {
        return $this->AvailableNumberOfSeats;
    }
    /**
     * Set AvailableNumberOfSeats value
     * @param string $availableNumberOfSeats
     * @return \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation
     */
    public function setAvailableNumberOfSeats($availableNumberOfSeats = null)
    {
        // validation for constraint: string
        if (!is_null($availableNumberOfSeats) && !is_string($availableNumberOfSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availableNumberOfSeats)), __LINE__);
        }
        $this->AvailableNumberOfSeats = $availableNumberOfSeats;
        return $this;
    }
    /**
     * Get SoldNumberOfSeats value
     * @return string|null
     */
    public function getSoldNumberOfSeats()
    {
        return $this->SoldNumberOfSeats;
    }
    /**
     * Set SoldNumberOfSeats value
     * @param string $soldNumberOfSeats
     * @return \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation
     */
    public function setSoldNumberOfSeats($soldNumberOfSeats = null)
    {
        // validation for constraint: string
        if (!is_null($soldNumberOfSeats) && !is_string($soldNumberOfSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($soldNumberOfSeats)), __LINE__);
        }
        $this->SoldNumberOfSeats = $soldNumberOfSeats;
        return $this;
    }
    /**
     * Get AssociatedPNRSummaries value
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummaries_PNRB|null
     */
    public function getAssociatedPNRSummaries()
    {
        return $this->AssociatedPNRSummaries;
    }
    /**
     * Set AssociatedPNRSummaries value
     * @param \Sabre\UpdateReservation\StructType\AssociatedPNRSummaries_PNRB $associatedPNRSummaries
     * @return \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation
     */
    public function setAssociatedPNRSummaries(\Sabre\UpdateReservation\StructType\AssociatedPNRSummaries_PNRB $associatedPNRSummaries = null)
    {
        $this->AssociatedPNRSummaries = $associatedPNRSummaries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation
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
