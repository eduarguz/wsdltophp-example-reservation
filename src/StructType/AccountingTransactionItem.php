<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingTransactionItem StructType
 * @subpackage Structs
 */
class AccountingTransactionItem extends AbstractStructBase
{
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\AccountingTransactionSource
     */
    public $Source;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule[]
     */
    public $Price;
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Tax[]
     */
    public $Tax;
    /**
     * The Promotion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Promotion[]
     */
    public $Promotion;
    /**
     * The AppliedAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountingTransactionAmount[]
     */
    public $AppliedAmount;
    /**
     * The Passenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociationTag[]
     */
    public $Passenger;
    /**
     * Constructor method for AccountingTransactionItem
     * @uses AccountingTransactionItem::setSource()
     * @uses AccountingTransactionItem::setPrice()
     * @uses AccountingTransactionItem::setTax()
     * @uses AccountingTransactionItem::setPromotion()
     * @uses AccountingTransactionItem::setAppliedAmount()
     * @uses AccountingTransactionItem::setPassenger()
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionSource $source
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule[] $price
     * @param \Sabre\UpdateReservation\StructType\Tax[] $tax
     * @param \Sabre\UpdateReservation\StructType\Promotion[] $promotion
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionAmount[] $appliedAmount
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag[] $passenger
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AccountingTransactionSource $source = null, array $price = array(), array $tax = array(), array $promotion = array(), array $appliedAmount = array(), array $passenger = array())
    {
        $this
            ->setSource($source)
            ->setPrice($price)
            ->setTax($tax)
            ->setPromotion($promotion)
            ->setAppliedAmount($appliedAmount)
            ->setPassenger($passenger);
    }
    /**
     * Get Source value
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionSource
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionSource $source
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function setSource(\Sabre\UpdateReservation\StructType\AccountingTransactionSource $source = null)
    {
        $this->Source = $source;
        return $this;
    }
    /**
     * Get Price value
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule[]|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule[] $price
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function setPrice(array $price = array())
    {
        foreach ($price as $accountingTransactionItemPriceItem) {
            // validation for constraint: itemType
            if (!$accountingTransactionItemPriceItem instanceof \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule) {
                throw new \InvalidArgumentException(sprintf('The Price property can only contain items of \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule, "%s" given', is_object($accountingTransactionItemPriceItem) ? get_class($accountingTransactionItemPriceItem) : gettype($accountingTransactionItemPriceItem)), __LINE__);
            }
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Add item to Price value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule $item
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function addToPrice(\Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule) {
            throw new \InvalidArgumentException(sprintf('The Price property can only contain items of \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Price[] = $item;
        return $this;
    }
    /**
     * Get Tax value
     * @return \Sabre\UpdateReservation\StructType\Tax[]|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Tax[] $tax
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function setTax(array $tax = array())
    {
        foreach ($tax as $accountingTransactionItemTaxItem) {
            // validation for constraint: itemType
            if (!$accountingTransactionItemTaxItem instanceof \Sabre\UpdateReservation\StructType\Tax) {
                throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\Tax, "%s" given', is_object($accountingTransactionItemTaxItem) ? get_class($accountingTransactionItemTaxItem) : gettype($accountingTransactionItemTaxItem)), __LINE__);
            }
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Tax $item
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function addToTax(\Sabre\UpdateReservation\StructType\Tax $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Tax) {
            throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\Tax, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Tax[] = $item;
        return $this;
    }
    /**
     * Get Promotion value
     * @return \Sabre\UpdateReservation\StructType\Promotion[]|null
     */
    public function getPromotion()
    {
        return $this->Promotion;
    }
    /**
     * Set Promotion value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Promotion[] $promotion
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function setPromotion(array $promotion = array())
    {
        foreach ($promotion as $accountingTransactionItemPromotionItem) {
            // validation for constraint: itemType
            if (!$accountingTransactionItemPromotionItem instanceof \Sabre\UpdateReservation\StructType\Promotion) {
                throw new \InvalidArgumentException(sprintf('The Promotion property can only contain items of \Sabre\UpdateReservation\StructType\Promotion, "%s" given', is_object($accountingTransactionItemPromotionItem) ? get_class($accountingTransactionItemPromotionItem) : gettype($accountingTransactionItemPromotionItem)), __LINE__);
            }
        }
        $this->Promotion = $promotion;
        return $this;
    }
    /**
     * Add item to Promotion value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Promotion $item
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function addToPromotion(\Sabre\UpdateReservation\StructType\Promotion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Promotion) {
            throw new \InvalidArgumentException(sprintf('The Promotion property can only contain items of \Sabre\UpdateReservation\StructType\Promotion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Promotion[] = $item;
        return $this;
    }
    /**
     * Get AppliedAmount value
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionAmount[]|null
     */
    public function getAppliedAmount()
    {
        return $this->AppliedAmount;
    }
    /**
     * Set AppliedAmount value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionAmount[] $appliedAmount
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function setAppliedAmount(array $appliedAmount = array())
    {
        foreach ($appliedAmount as $accountingTransactionItemAppliedAmountItem) {
            // validation for constraint: itemType
            if (!$accountingTransactionItemAppliedAmountItem instanceof \Sabre\UpdateReservation\StructType\AccountingTransactionAmount) {
                throw new \InvalidArgumentException(sprintf('The AppliedAmount property can only contain items of \Sabre\UpdateReservation\StructType\AccountingTransactionAmount, "%s" given', is_object($accountingTransactionItemAppliedAmountItem) ? get_class($accountingTransactionItemAppliedAmountItem) : gettype($accountingTransactionItemAppliedAmountItem)), __LINE__);
            }
        }
        $this->AppliedAmount = $appliedAmount;
        return $this;
    }
    /**
     * Add item to AppliedAmount value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionAmount $item
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function addToAppliedAmount(\Sabre\UpdateReservation\StructType\AccountingTransactionAmount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AccountingTransactionAmount) {
            throw new \InvalidArgumentException(sprintf('The AppliedAmount property can only contain items of \Sabre\UpdateReservation\StructType\AccountingTransactionAmount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AppliedAmount[] = $item;
        return $this;
    }
    /**
     * Get Passenger value
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag[]|null
     */
    public function getPassenger()
    {
        return $this->Passenger;
    }
    /**
     * Set Passenger value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag[] $passenger
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function setPassenger(array $passenger = array())
    {
        foreach ($passenger as $accountingTransactionItemPassengerItem) {
            // validation for constraint: itemType
            if (!$accountingTransactionItemPassengerItem instanceof \Sabre\UpdateReservation\StructType\NameAssociationTag) {
                throw new \InvalidArgumentException(sprintf('The Passenger property can only contain items of \Sabre\UpdateReservation\StructType\NameAssociationTag, "%s" given', is_object($accountingTransactionItemPassengerItem) ? get_class($accountingTransactionItemPassengerItem) : gettype($accountingTransactionItemPassengerItem)), __LINE__);
            }
        }
        $this->Passenger = $passenger;
        return $this;
    }
    /**
     * Add item to Passenger value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag $item
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
     */
    public function addToPassenger(\Sabre\UpdateReservation\StructType\NameAssociationTag $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\NameAssociationTag) {
            throw new \InvalidArgumentException(sprintf('The Passenger property can only contain items of \Sabre\UpdateReservation\StructType\NameAssociationTag, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Passenger[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem
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
