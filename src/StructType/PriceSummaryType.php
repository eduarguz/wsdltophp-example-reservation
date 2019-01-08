<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceSummaryType StructType
 * @subpackage Structs
 */
class PriceSummaryType extends AbstractStructBase
{
    /**
     * The BasePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DecimalPrice
     */
    public $BasePrice;
    /**
     * The EquivPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DecimalPrice
     */
    public $EquivPrice;
    /**
     * The TotalTaxes
     * Meta informations extracted from the WSDL
     * - documentation: Taxes by code summary.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TaxesType
     */
    public $TotalTaxes;
    /**
     * The TotalPrice
     * @var \Sabre\UpdateReservation\StructType\DecimalPrice
     */
    public $TotalPrice;
    /**
     * The PriceBreakDown
     * Meta informations extracted from the WSDL
     * - documentation: Price per passenger type breakdown.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriceBreakDownType[]
     */
    public $PriceBreakDown;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - documentation: Price Refresh id. Positive Integer.
     * @var int
     */
    public $id;
    /**
     * The refreshTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Price Refresh timestamp.
     * @var string
     */
    public $refreshTimestamp;
    /**
     * Constructor method for PriceSummaryType
     * @uses PriceSummaryType::setBasePrice()
     * @uses PriceSummaryType::setEquivPrice()
     * @uses PriceSummaryType::setTotalTaxes()
     * @uses PriceSummaryType::setTotalPrice()
     * @uses PriceSummaryType::setPriceBreakDown()
     * @uses PriceSummaryType::setId()
     * @uses PriceSummaryType::setRefreshTimestamp()
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $basePrice
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $equivPrice
     * @param \Sabre\UpdateReservation\StructType\TaxesType $totalTaxes
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $totalPrice
     * @param \Sabre\UpdateReservation\StructType\PriceBreakDownType[] $priceBreakDown
     * @param int $id
     * @param string $refreshTimestamp
     */
    public function __construct(\Sabre\UpdateReservation\StructType\DecimalPrice $basePrice = null, \Sabre\UpdateReservation\StructType\DecimalPrice $equivPrice = null, \Sabre\UpdateReservation\StructType\TaxesType $totalTaxes = null, \Sabre\UpdateReservation\StructType\DecimalPrice $totalPrice = null, array $priceBreakDown = array(), $id = null, $refreshTimestamp = null)
    {
        $this
            ->setBasePrice($basePrice)
            ->setEquivPrice($equivPrice)
            ->setTotalTaxes($totalTaxes)
            ->setTotalPrice($totalPrice)
            ->setPriceBreakDown($priceBreakDown)
            ->setId($id)
            ->setRefreshTimestamp($refreshTimestamp);
    }
    /**
     * Get BasePrice value
     * @return \Sabre\UpdateReservation\StructType\DecimalPrice|null
     */
    public function getBasePrice()
    {
        return $this->BasePrice;
    }
    /**
     * Set BasePrice value
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $basePrice
     * @return \Sabre\UpdateReservation\StructType\PriceSummaryType
     */
    public function setBasePrice(\Sabre\UpdateReservation\StructType\DecimalPrice $basePrice = null)
    {
        $this->BasePrice = $basePrice;
        return $this;
    }
    /**
     * Get EquivPrice value
     * @return \Sabre\UpdateReservation\StructType\DecimalPrice|null
     */
    public function getEquivPrice()
    {
        return $this->EquivPrice;
    }
    /**
     * Set EquivPrice value
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $equivPrice
     * @return \Sabre\UpdateReservation\StructType\PriceSummaryType
     */
    public function setEquivPrice(\Sabre\UpdateReservation\StructType\DecimalPrice $equivPrice = null)
    {
        $this->EquivPrice = $equivPrice;
        return $this;
    }
    /**
     * Get TotalTaxes value
     * @return \Sabre\UpdateReservation\StructType\TaxesType|null
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }
    /**
     * Set TotalTaxes value
     * @param \Sabre\UpdateReservation\StructType\TaxesType $totalTaxes
     * @return \Sabre\UpdateReservation\StructType\PriceSummaryType
     */
    public function setTotalTaxes(\Sabre\UpdateReservation\StructType\TaxesType $totalTaxes = null)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return \Sabre\UpdateReservation\StructType\DecimalPrice|null
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $totalPrice
     * @return \Sabre\UpdateReservation\StructType\PriceSummaryType
     */
    public function setTotalPrice(\Sabre\UpdateReservation\StructType\DecimalPrice $totalPrice = null)
    {
        $this->TotalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get PriceBreakDown value
     * @return \Sabre\UpdateReservation\StructType\PriceBreakDownType[]|null
     */
    public function getPriceBreakDown()
    {
        return $this->PriceBreakDown;
    }
    /**
     * Set PriceBreakDown value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PriceBreakDownType[] $priceBreakDown
     * @return \Sabre\UpdateReservation\StructType\PriceSummaryType
     */
    public function setPriceBreakDown(array $priceBreakDown = array())
    {
        foreach ($priceBreakDown as $priceSummaryTypePriceBreakDownItem) {
            // validation for constraint: itemType
            if (!$priceSummaryTypePriceBreakDownItem instanceof \Sabre\UpdateReservation\StructType\PriceBreakDownType) {
                throw new \InvalidArgumentException(sprintf('The PriceBreakDown property can only contain items of \Sabre\UpdateReservation\StructType\PriceBreakDownType, "%s" given', is_object($priceSummaryTypePriceBreakDownItem) ? get_class($priceSummaryTypePriceBreakDownItem) : gettype($priceSummaryTypePriceBreakDownItem)), __LINE__);
            }
        }
        $this->PriceBreakDown = $priceBreakDown;
        return $this;
    }
    /**
     * Add item to PriceBreakDown value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PriceBreakDownType $item
     * @return \Sabre\UpdateReservation\StructType\PriceSummaryType
     */
    public function addToPriceBreakDown(\Sabre\UpdateReservation\StructType\PriceBreakDownType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PriceBreakDownType) {
            throw new \InvalidArgumentException(sprintf('The PriceBreakDown property can only contain items of \Sabre\UpdateReservation\StructType\PriceBreakDownType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PriceBreakDown[] = $item;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Sabre\UpdateReservation\StructType\PriceSummaryType
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get refreshTimestamp value
     * @return string|null
     */
    public function getRefreshTimestamp()
    {
        return $this->refreshTimestamp;
    }
    /**
     * Set refreshTimestamp value
     * @param string $refreshTimestamp
     * @return \Sabre\UpdateReservation\StructType\PriceSummaryType
     */
    public function setRefreshTimestamp($refreshTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($refreshTimestamp) && !is_string($refreshTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refreshTimestamp)), __LINE__);
        }
        $this->refreshTimestamp = $refreshTimestamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PriceSummaryType
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
