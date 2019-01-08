<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryPrice StructType
 * @subpackage Structs
 */
class AncillaryPrice extends AbstractStructBase
{
    /**
     * The Price
     * @var float
     */
    public $Price;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * Constructor method for AncillaryPrice
     * @uses AncillaryPrice::setPrice()
     * @uses AncillaryPrice::setCurrency()
     * @param float $price
     * @param string $currency
     */
    public function __construct($price = null, $currency = null)
    {
        $this
            ->setPrice($price)
            ->setCurrency($currency);
    }
    /**
     * Get Price value
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param float $price
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice
     */
    public function setPrice($price = null)
    {
        $this->Price = $price;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice
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
