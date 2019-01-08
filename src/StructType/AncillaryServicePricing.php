<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServicePricing StructType
 * @subpackage Structs
 */
class AncillaryServicePricing extends AbstractStructBase
{
    /**
     * The OriginalBasePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $OriginalBasePrice;
    /**
     * The EquivalentPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $EquivalentPrice;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Taxes
     */
    public $Taxes;
    /**
     * The TTLPrice
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $TTLPrice;
    /**
     * Constructor method for AncillaryServicePricing
     * @uses AncillaryServicePricing::setOriginalBasePrice()
     * @uses AncillaryServicePricing::setEquivalentPrice()
     * @uses AncillaryServicePricing::setTaxes()
     * @uses AncillaryServicePricing::setTTLPrice()
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice
     * @param \Sabre\UpdateReservation\StructType\Taxes $taxes
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice = null, \Sabre\UpdateReservation\StructType\Taxes $taxes = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice = null)
    {
        $this
            ->setOriginalBasePrice($originalBasePrice)
            ->setEquivalentPrice($equivalentPrice)
            ->setTaxes($taxes)
            ->setTTLPrice($tTLPrice);
    }
    /**
     * Get OriginalBasePrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getOriginalBasePrice()
    {
        return $this->OriginalBasePrice;
    }
    /**
     * Set OriginalBasePrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePricing
     */
    public function setOriginalBasePrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice = null)
    {
        $this->OriginalBasePrice = $originalBasePrice;
        return $this;
    }
    /**
     * Get EquivalentPrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getEquivalentPrice()
    {
        return $this->EquivalentPrice;
    }
    /**
     * Set EquivalentPrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePricing
     */
    public function setEquivalentPrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice = null)
    {
        $this->EquivalentPrice = $equivalentPrice;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Sabre\UpdateReservation\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Sabre\UpdateReservation\StructType\Taxes $taxes
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePricing
     */
    public function setTaxes(\Sabre\UpdateReservation\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get TTLPrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getTTLPrice()
    {
        return $this->TTLPrice;
    }
    /**
     * Set TTLPrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePricing
     */
    public function setTTLPrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice = null)
    {
        $this->TTLPrice = $tTLPrice;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePricing
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
