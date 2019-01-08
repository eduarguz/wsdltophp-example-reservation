<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingLines.PNRB StructType
 * @subpackage Structs
 */
class AccountingLines_PNRB extends AbstractStructBase
{
    /**
     * The AccountingLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountingLine_PNRB[]
     */
    public $AccountingLine;
    /**
     * Constructor method for AccountingLines.PNRB
     * @uses AccountingLines_PNRB::setAccountingLine()
     * @param \Sabre\UpdateReservation\StructType\AccountingLine_PNRB[] $accountingLine
     */
    public function __construct(array $accountingLine = array())
    {
        $this
            ->setAccountingLine($accountingLine);
    }
    /**
     * Get AccountingLine value
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB[]|null
     */
    public function getAccountingLine()
    {
        return $this->AccountingLine;
    }
    /**
     * Set AccountingLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingLine_PNRB[] $accountingLine
     * @return \Sabre\UpdateReservation\StructType\AccountingLines_PNRB
     */
    public function setAccountingLine(array $accountingLine = array())
    {
        foreach ($accountingLine as $accountingLines_PNRBAccountingLineItem) {
            // validation for constraint: itemType
            if (!$accountingLines_PNRBAccountingLineItem instanceof \Sabre\UpdateReservation\StructType\AccountingLine_PNRB) {
                throw new \InvalidArgumentException(sprintf('The AccountingLine property can only contain items of \Sabre\UpdateReservation\StructType\AccountingLine_PNRB, "%s" given', is_object($accountingLines_PNRBAccountingLineItem) ? get_class($accountingLines_PNRBAccountingLineItem) : gettype($accountingLines_PNRBAccountingLineItem)), __LINE__);
            }
        }
        $this->AccountingLine = $accountingLine;
        return $this;
    }
    /**
     * Add item to AccountingLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingLine_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\AccountingLines_PNRB
     */
    public function addToAccountingLine(\Sabre\UpdateReservation\StructType\AccountingLine_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AccountingLine_PNRB) {
            throw new \InvalidArgumentException(sprintf('The AccountingLine property can only contain items of \Sabre\UpdateReservation\StructType\AccountingLine_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AccountingLine[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AccountingLines_PNRB
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
