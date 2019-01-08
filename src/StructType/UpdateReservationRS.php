<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateReservationRS StructType
 * @subpackage Structs
 */
class UpdateReservationRS extends AbstractStructBase
{
    /**
     * The Locator
     * Meta informations extracted from the WSDL
     * - documentation: Used to return PNR locator if requested using ReturnOptions.ReturnLocator in request is set to true and locator information is available
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Locator;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Success;
    /**
     * The Warnings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\UpdateWarnings_PNRB
     */
    public $Warnings;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\UpdateErrors_PNRB
     */
    public $Errors;
    /**
     * The Reservation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public $Reservation;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Content
     */
    public $Content;
    /**
     * The Results
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Results_PNRB
     */
    public $Results;
    /**
     * The PshUpdates
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PshUpdate_PNRB[]
     */
    public $PshUpdates;
    /**
     * The CorrelationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationId;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Version;
    /**
     * Constructor method for UpdateReservationRS
     * @uses UpdateReservationRS::setLocator()
     * @uses UpdateReservationRS::setSuccess()
     * @uses UpdateReservationRS::setWarnings()
     * @uses UpdateReservationRS::setErrors()
     * @uses UpdateReservationRS::setReservation()
     * @uses UpdateReservationRS::setContent()
     * @uses UpdateReservationRS::setResults()
     * @uses UpdateReservationRS::setPshUpdates()
     * @uses UpdateReservationRS::setCorrelationId()
     * @uses UpdateReservationRS::setVersion()
     * @param string $locator
     * @param string $success
     * @param \Sabre\UpdateReservation\StructType\UpdateWarnings_PNRB $warnings
     * @param \Sabre\UpdateReservation\StructType\UpdateErrors_PNRB $errors
     * @param \Sabre\UpdateReservation\StructType\Reservation_PNRB $reservation
     * @param \Sabre\UpdateReservation\StructType\Content $content
     * @param \Sabre\UpdateReservation\StructType\Results_PNRB $results
     * @param \Sabre\UpdateReservation\StructType\PshUpdate_PNRB[] $pshUpdates
     * @param string $correlationId
     * @param string $version
     */
    public function __construct($locator = null, $success = null, \Sabre\UpdateReservation\StructType\UpdateWarnings_PNRB $warnings = null, \Sabre\UpdateReservation\StructType\UpdateErrors_PNRB $errors = null, \Sabre\UpdateReservation\StructType\Reservation_PNRB $reservation = null, \Sabre\UpdateReservation\StructType\Content $content = null, \Sabre\UpdateReservation\StructType\Results_PNRB $results = null, array $pshUpdates = array(), $correlationId = null, $version = null)
    {
        $this
            ->setLocator($locator)
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setErrors($errors)
            ->setReservation($reservation)
            ->setContent($content)
            ->setResults($results)
            ->setPshUpdates($pshUpdates)
            ->setCorrelationId($correlationId)
            ->setVersion($version);
    }
    /**
     * Get Locator value
     * @return string|null
     */
    public function getLocator()
    {
        return $this->Locator;
    }
    /**
     * Set Locator value
     * @param string $locator
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function setLocator($locator = null)
    {
        // validation for constraint: string
        if (!is_null($locator) && !is_string($locator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locator)), __LINE__);
        }
        $this->Locator = $locator;
        return $this;
    }
    /**
     * Get Success value
     * @return string|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param string $success
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: string
        if (!is_null($success) && !is_string($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($success)), __LINE__);
        }
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Warnings value
     * @return \Sabre\UpdateReservation\StructType\UpdateWarnings_PNRB|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }
    /**
     * Set Warnings value
     * @param \Sabre\UpdateReservation\StructType\UpdateWarnings_PNRB $warnings
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function setWarnings(\Sabre\UpdateReservation\StructType\UpdateWarnings_PNRB $warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get Errors value
     * @return \Sabre\UpdateReservation\StructType\UpdateErrors_PNRB|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \Sabre\UpdateReservation\StructType\UpdateErrors_PNRB $errors
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function setErrors(\Sabre\UpdateReservation\StructType\UpdateErrors_PNRB $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Reservation value
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB|null
     */
    public function getReservation()
    {
        return $this->Reservation;
    }
    /**
     * Set Reservation value
     * @param \Sabre\UpdateReservation\StructType\Reservation_PNRB $reservation
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function setReservation(\Sabre\UpdateReservation\StructType\Reservation_PNRB $reservation = null)
    {
        $this->Reservation = $reservation;
        return $this;
    }
    /**
     * Get Content value
     * @return \Sabre\UpdateReservation\StructType\Content|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param \Sabre\UpdateReservation\StructType\Content $content
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function setContent(\Sabre\UpdateReservation\StructType\Content $content = null)
    {
        $this->Content = $content;
        return $this;
    }
    /**
     * Get Results value
     * @return \Sabre\UpdateReservation\StructType\Results_PNRB|null
     */
    public function getResults()
    {
        return $this->Results;
    }
    /**
     * Set Results value
     * @param \Sabre\UpdateReservation\StructType\Results_PNRB $results
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function setResults(\Sabre\UpdateReservation\StructType\Results_PNRB $results = null)
    {
        $this->Results = $results;
        return $this;
    }
    /**
     * Get PshUpdates value
     * @return \Sabre\UpdateReservation\StructType\PshUpdate_PNRB[]|null
     */
    public function getPshUpdates()
    {
        return $this->PshUpdates;
    }
    /**
     * Set PshUpdates value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PshUpdate_PNRB[] $pshUpdates
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function setPshUpdates(array $pshUpdates = array())
    {
        foreach ($pshUpdates as $updateReservationRSPshUpdatesItem) {
            // validation for constraint: itemType
            if (!$updateReservationRSPshUpdatesItem instanceof \Sabre\UpdateReservation\StructType\PshUpdate_PNRB) {
                throw new \InvalidArgumentException(sprintf('The PshUpdates property can only contain items of \Sabre\UpdateReservation\StructType\PshUpdate_PNRB, "%s" given', is_object($updateReservationRSPshUpdatesItem) ? get_class($updateReservationRSPshUpdatesItem) : gettype($updateReservationRSPshUpdatesItem)), __LINE__);
            }
        }
        $this->PshUpdates = $pshUpdates;
        return $this;
    }
    /**
     * Add item to PshUpdates value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PshUpdate_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function addToPshUpdates(\Sabre\UpdateReservation\StructType\PshUpdate_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PshUpdate_PNRB) {
            throw new \InvalidArgumentException(sprintf('The PshUpdates property can only contain items of \Sabre\UpdateReservation\StructType\PshUpdate_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PshUpdates[] = $item;
        return $this;
    }
    /**
     * Get CorrelationId value
     * @return string|null
     */
    public function getCorrelationId()
    {
        return $this->CorrelationId;
    }
    /**
     * Set CorrelationId value
     * @param string $correlationId
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function setCorrelationId($correlationId = null)
    {
        // validation for constraint: string
        if (!is_null($correlationId) && !is_string($correlationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correlationId)), __LINE__);
        }
        $this->CorrelationId = $correlationId;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
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
