<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemarkLines.PNRB StructType
 * @subpackage Structs
 */
class RemarkLines_PNRB extends AbstractStructBase
{
    /**
     * The RemarkLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RemarkLine_PNRB[]
     */
    public $RemarkLine;
    /**
     * The lang
     * @var string
     */
    public $lang;
    /**
     * Constructor method for RemarkLines.PNRB
     * @uses RemarkLines_PNRB::setRemarkLine()
     * @uses RemarkLines_PNRB::setLang()
     * @param \Sabre\UpdateReservation\StructType\RemarkLine_PNRB[] $remarkLine
     * @param string $lang
     */
    public function __construct(array $remarkLine = array(), $lang = null)
    {
        $this
            ->setRemarkLine($remarkLine)
            ->setLang($lang);
    }
    /**
     * Get RemarkLine value
     * @return \Sabre\UpdateReservation\StructType\RemarkLine_PNRB[]|null
     */
    public function getRemarkLine()
    {
        return $this->RemarkLine;
    }
    /**
     * Set RemarkLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RemarkLine_PNRB[] $remarkLine
     * @return \Sabre\UpdateReservation\StructType\RemarkLines_PNRB
     */
    public function setRemarkLine(array $remarkLine = array())
    {
        foreach ($remarkLine as $remarkLines_PNRBRemarkLineItem) {
            // validation for constraint: itemType
            if (!$remarkLines_PNRBRemarkLineItem instanceof \Sabre\UpdateReservation\StructType\RemarkLine_PNRB) {
                throw new \InvalidArgumentException(sprintf('The RemarkLine property can only contain items of \Sabre\UpdateReservation\StructType\RemarkLine_PNRB, "%s" given', is_object($remarkLines_PNRBRemarkLineItem) ? get_class($remarkLines_PNRBRemarkLineItem) : gettype($remarkLines_PNRBRemarkLineItem)), __LINE__);
            }
        }
        $this->RemarkLine = $remarkLine;
        return $this;
    }
    /**
     * Add item to RemarkLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RemarkLine_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\RemarkLines_PNRB
     */
    public function addToRemarkLine(\Sabre\UpdateReservation\StructType\RemarkLine_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RemarkLine_PNRB) {
            throw new \InvalidArgumentException(sprintf('The RemarkLine property can only contain items of \Sabre\UpdateReservation\StructType\RemarkLine_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RemarkLine[] = $item;
        return $this;
    }
    /**
     * Get lang value
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \Sabre\UpdateReservation\StructType\RemarkLines_PNRB
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RemarkLines_PNRB
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
