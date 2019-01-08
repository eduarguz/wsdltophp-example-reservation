<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IndicatorsType StructType
 * @subpackage Structs
 */
class IndicatorsType extends AbstractStructBase
{
    /**
     * The RetainFare
     * Meta informations extracted from the WSDL
     * - documentation: Currently must be set to true.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndRequiredType
     */
    public $RetainFare;
    /**
     * The MinMaxStay
     * Meta informations extracted from the WSDL
     * - documentation: If set to true, fares that have a min/max stay can be included in the responses. If set to false, then no fares that include a min/max stay requirement will be included in the response.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndRequiredType
     */
    public $MinMaxStay;
    /**
     * The RefundPenalty
     * Meta informations extracted from the WSDL
     * - documentation: If set to true, fares that have a refund penalty can be included in the responses. If set to false, then no fares that include a refund penalty requirement will be included in the response.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndRequiredType
     */
    public $RefundPenalty;
    /**
     * The ResTicketing
     * Meta informations extracted from the WSDL
     * - documentation: If set to true, fares that have a reservation/ticketing can be included in the responses. If set to false, then no fares that include reservation/ticketing requirement will be included in the response.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndRequiredType
     */
    public $ResTicketing;
    /**
     * The TravelPolicy
     * Meta informations extracted from the WSDL
     * - documentation: This element is currently ignored whether it is true or false.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndRequiredType
     */
    public $TravelPolicy;
    /**
     * Constructor method for IndicatorsType
     * @uses IndicatorsType::setRetainFare()
     * @uses IndicatorsType::setMinMaxStay()
     * @uses IndicatorsType::setRefundPenalty()
     * @uses IndicatorsType::setResTicketing()
     * @uses IndicatorsType::setTravelPolicy()
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $retainFare
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $minMaxStay
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $refundPenalty
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $resTicketing
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $travelPolicy
     */
    public function __construct(\Sabre\UpdateReservation\StructType\IndRequiredType $retainFare = null, \Sabre\UpdateReservation\StructType\IndRequiredType $minMaxStay = null, \Sabre\UpdateReservation\StructType\IndRequiredType $refundPenalty = null, \Sabre\UpdateReservation\StructType\IndRequiredType $resTicketing = null, \Sabre\UpdateReservation\StructType\IndRequiredType $travelPolicy = null)
    {
        $this
            ->setRetainFare($retainFare)
            ->setMinMaxStay($minMaxStay)
            ->setRefundPenalty($refundPenalty)
            ->setResTicketing($resTicketing)
            ->setTravelPolicy($travelPolicy);
    }
    /**
     * Get RetainFare value
     * @return \Sabre\UpdateReservation\StructType\IndRequiredType|null
     */
    public function getRetainFare()
    {
        return $this->RetainFare;
    }
    /**
     * Set RetainFare value
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $retainFare
     * @return \Sabre\UpdateReservation\StructType\IndicatorsType
     */
    public function setRetainFare(\Sabre\UpdateReservation\StructType\IndRequiredType $retainFare = null)
    {
        $this->RetainFare = $retainFare;
        return $this;
    }
    /**
     * Get MinMaxStay value
     * @return \Sabre\UpdateReservation\StructType\IndRequiredType|null
     */
    public function getMinMaxStay()
    {
        return $this->MinMaxStay;
    }
    /**
     * Set MinMaxStay value
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $minMaxStay
     * @return \Sabre\UpdateReservation\StructType\IndicatorsType
     */
    public function setMinMaxStay(\Sabre\UpdateReservation\StructType\IndRequiredType $minMaxStay = null)
    {
        $this->MinMaxStay = $minMaxStay;
        return $this;
    }
    /**
     * Get RefundPenalty value
     * @return \Sabre\UpdateReservation\StructType\IndRequiredType|null
     */
    public function getRefundPenalty()
    {
        return $this->RefundPenalty;
    }
    /**
     * Set RefundPenalty value
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $refundPenalty
     * @return \Sabre\UpdateReservation\StructType\IndicatorsType
     */
    public function setRefundPenalty(\Sabre\UpdateReservation\StructType\IndRequiredType $refundPenalty = null)
    {
        $this->RefundPenalty = $refundPenalty;
        return $this;
    }
    /**
     * Get ResTicketing value
     * @return \Sabre\UpdateReservation\StructType\IndRequiredType|null
     */
    public function getResTicketing()
    {
        return $this->ResTicketing;
    }
    /**
     * Set ResTicketing value
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $resTicketing
     * @return \Sabre\UpdateReservation\StructType\IndicatorsType
     */
    public function setResTicketing(\Sabre\UpdateReservation\StructType\IndRequiredType $resTicketing = null)
    {
        $this->ResTicketing = $resTicketing;
        return $this;
    }
    /**
     * Get TravelPolicy value
     * @return \Sabre\UpdateReservation\StructType\IndRequiredType|null
     */
    public function getTravelPolicy()
    {
        return $this->TravelPolicy;
    }
    /**
     * Set TravelPolicy value
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $travelPolicy
     * @return \Sabre\UpdateReservation\StructType\IndicatorsType
     */
    public function setTravelPolicy(\Sabre\UpdateReservation\StructType\IndRequiredType $travelPolicy = null)
    {
        $this->TravelPolicy = $travelPolicy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\IndicatorsType
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
