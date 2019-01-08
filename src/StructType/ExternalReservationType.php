<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalReservationType StructType
 * @subpackage Structs
 */
class ExternalReservationType extends AbstractStructBase
{
    /**
     * The SourceSystem
     * @var string
     */
    public $SourceSystem;
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConfirmationNumber;
    /**
     * The CancellationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CancellationNumber;
    /**
     * The ReferenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceNumber;
    /**
     * The ReservationStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReservationStatus;
    /**
     * Constructor method for ExternalReservationType
     * @uses ExternalReservationType::setSourceSystem()
     * @uses ExternalReservationType::setConfirmationNumber()
     * @uses ExternalReservationType::setCancellationNumber()
     * @uses ExternalReservationType::setReferenceNumber()
     * @uses ExternalReservationType::setReservationStatus()
     * @param string $sourceSystem
     * @param string $confirmationNumber
     * @param string $cancellationNumber
     * @param string $referenceNumber
     * @param string $reservationStatus
     */
    public function __construct($sourceSystem = null, $confirmationNumber = null, $cancellationNumber = null, $referenceNumber = null, $reservationStatus = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setConfirmationNumber($confirmationNumber)
            ->setCancellationNumber($cancellationNumber)
            ->setReferenceNumber($referenceNumber)
            ->setReservationStatus($reservationStatus);
    }
    /**
     * Get SourceSystem value
     * @return string|null
     */
    public function getSourceSystem()
    {
        return $this->SourceSystem;
    }
    /**
     * Set SourceSystem value
     * @param string $sourceSystem
     * @return \Sabre\UpdateReservation\StructType\ExternalReservationType
     */
    public function setSourceSystem($sourceSystem = null)
    {
        // validation for constraint: string
        if (!is_null($sourceSystem) && !is_string($sourceSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceSystem)), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;
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
     * @return \Sabre\UpdateReservation\StructType\ExternalReservationType
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
     * Get CancellationNumber value
     * @return string|null
     */
    public function getCancellationNumber()
    {
        return $this->CancellationNumber;
    }
    /**
     * Set CancellationNumber value
     * @param string $cancellationNumber
     * @return \Sabre\UpdateReservation\StructType\ExternalReservationType
     */
    public function setCancellationNumber($cancellationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cancellationNumber) && !is_string($cancellationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancellationNumber)), __LINE__);
        }
        $this->CancellationNumber = $cancellationNumber;
        return $this;
    }
    /**
     * Get ReferenceNumber value
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }
    /**
     * Set ReferenceNumber value
     * @param string $referenceNumber
     * @return \Sabre\UpdateReservation\StructType\ExternalReservationType
     */
    public function setReferenceNumber($referenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($referenceNumber) && !is_string($referenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceNumber)), __LINE__);
        }
        $this->ReferenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Get ReservationStatus value
     * @return string|null
     */
    public function getReservationStatus()
    {
        return $this->ReservationStatus;
    }
    /**
     * Set ReservationStatus value
     * @param string $reservationStatus
     * @return \Sabre\UpdateReservation\StructType\ExternalReservationType
     */
    public function setReservationStatus($reservationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($reservationStatus) && !is_string($reservationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservationStatus)), __LINE__);
        }
        $this->ReservationStatus = $reservationStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ExternalReservationType
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
