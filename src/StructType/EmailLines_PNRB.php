<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailLines.PNRB StructType
 * @subpackage Structs
 */
class EmailLines_PNRB extends AbstractStructBase
{
    /**
     * The EmailLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\EmailLine_PNRB[]
     */
    public $EmailLine;
    /**
     * Constructor method for EmailLines.PNRB
     * @uses EmailLines_PNRB::setEmailLine()
     * @param \Sabre\UpdateReservation\StructType\EmailLine_PNRB[] $emailLine
     */
    public function __construct(array $emailLine = array())
    {
        $this
            ->setEmailLine($emailLine);
    }
    /**
     * Get EmailLine value
     * @return \Sabre\UpdateReservation\StructType\EmailLine_PNRB[]|null
     */
    public function getEmailLine()
    {
        return $this->EmailLine;
    }
    /**
     * Set EmailLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmailLine_PNRB[] $emailLine
     * @return \Sabre\UpdateReservation\StructType\EmailLines_PNRB
     */
    public function setEmailLine(array $emailLine = array())
    {
        foreach ($emailLine as $emailLines_PNRBEmailLineItem) {
            // validation for constraint: itemType
            if (!$emailLines_PNRBEmailLineItem instanceof \Sabre\UpdateReservation\StructType\EmailLine_PNRB) {
                throw new \InvalidArgumentException(sprintf('The EmailLine property can only contain items of \Sabre\UpdateReservation\StructType\EmailLine_PNRB, "%s" given', is_object($emailLines_PNRBEmailLineItem) ? get_class($emailLines_PNRBEmailLineItem) : gettype($emailLines_PNRBEmailLineItem)), __LINE__);
            }
        }
        $this->EmailLine = $emailLine;
        return $this;
    }
    /**
     * Add item to EmailLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmailLine_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\EmailLines_PNRB
     */
    public function addToEmailLine(\Sabre\UpdateReservation\StructType\EmailLine_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\EmailLine_PNRB) {
            throw new \InvalidArgumentException(sprintf('The EmailLine property can only contain items of \Sabre\UpdateReservation\StructType\EmailLine_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmailLine[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\EmailLines_PNRB
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
