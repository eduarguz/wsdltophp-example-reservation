<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingFees StructType
 * @subpackage Structs
 */
class TicketingFees extends AbstractStructBase
{
    /**
     * The FeeInformation
     * Meta informations extracted from the WSDL
     * - documentation: Fee information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FeeInformation[]
     */
    public $FeeInformation;
    /**
     * The Disclaimer
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Disclaimer;
    /**
     * Constructor method for TicketingFees
     * @uses TicketingFees::setFeeInformation()
     * @uses TicketingFees::setDisclaimer()
     * @param \Sabre\UpdateReservation\StructType\FeeInformation[] $feeInformation
     * @param string $disclaimer
     */
    public function __construct(array $feeInformation = array(), $disclaimer = null)
    {
        $this
            ->setFeeInformation($feeInformation)
            ->setDisclaimer($disclaimer);
    }
    /**
     * Get FeeInformation value
     * @return \Sabre\UpdateReservation\StructType\FeeInformation[]|null
     */
    public function getFeeInformation()
    {
        return $this->FeeInformation;
    }
    /**
     * Set FeeInformation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FeeInformation[] $feeInformation
     * @return \Sabre\UpdateReservation\StructType\TicketingFees
     */
    public function setFeeInformation(array $feeInformation = array())
    {
        foreach ($feeInformation as $ticketingFeesFeeInformationItem) {
            // validation for constraint: itemType
            if (!$ticketingFeesFeeInformationItem instanceof \Sabre\UpdateReservation\StructType\FeeInformation) {
                throw new \InvalidArgumentException(sprintf('The FeeInformation property can only contain items of \Sabre\UpdateReservation\StructType\FeeInformation, "%s" given', is_object($ticketingFeesFeeInformationItem) ? get_class($ticketingFeesFeeInformationItem) : gettype($ticketingFeesFeeInformationItem)), __LINE__);
            }
        }
        $this->FeeInformation = $feeInformation;
        return $this;
    }
    /**
     * Add item to FeeInformation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FeeInformation $item
     * @return \Sabre\UpdateReservation\StructType\TicketingFees
     */
    public function addToFeeInformation(\Sabre\UpdateReservation\StructType\FeeInformation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FeeInformation) {
            throw new \InvalidArgumentException(sprintf('The FeeInformation property can only contain items of \Sabre\UpdateReservation\StructType\FeeInformation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FeeInformation[] = $item;
        return $this;
    }
    /**
     * Get Disclaimer value
     * @return string|null
     */
    public function getDisclaimer()
    {
        return $this->Disclaimer;
    }
    /**
     * Set Disclaimer value
     * @param string $disclaimer
     * @return \Sabre\UpdateReservation\StructType\TicketingFees
     */
    public function setDisclaimer($disclaimer = null)
    {
        // validation for constraint: string
        if (!is_null($disclaimer) && !is_string($disclaimer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($disclaimer)), __LINE__);
        }
        $this->Disclaimer = $disclaimer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TicketingFees
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
