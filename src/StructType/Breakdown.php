<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Breakdown StructType
 * @subpackage Structs
 */
class Breakdown extends AbstractStructBase
{
    /**
     * The References
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\References
     */
    public $References;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriceType
     */
    public $Price;
    /**
     * Constructor method for Breakdown
     * @uses Breakdown::setReferences()
     * @uses Breakdown::setPrice()
     * @param \Sabre\UpdateReservation\StructType\References $references
     * @param \Sabre\UpdateReservation\StructType\PriceType $price
     */
    public function __construct(\Sabre\UpdateReservation\StructType\References $references = null, \Sabre\UpdateReservation\StructType\PriceType $price = null)
    {
        $this
            ->setReferences($references)
            ->setPrice($price);
    }
    /**
     * Get References value
     * @return \Sabre\UpdateReservation\StructType\References|null
     */
    public function getReferences()
    {
        return $this->References;
    }
    /**
     * Set References value
     * @param \Sabre\UpdateReservation\StructType\References $references
     * @return \Sabre\UpdateReservation\StructType\Breakdown
     */
    public function setReferences(\Sabre\UpdateReservation\StructType\References $references = null)
    {
        $this->References = $references;
        return $this;
    }
    /**
     * Get Price value
     * @return \Sabre\UpdateReservation\StructType\PriceType|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param \Sabre\UpdateReservation\StructType\PriceType $price
     * @return \Sabre\UpdateReservation\StructType\Breakdown
     */
    public function setPrice(\Sabre\UpdateReservation\StructType\PriceType $price = null)
    {
        $this->Price = $price;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Breakdown
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
