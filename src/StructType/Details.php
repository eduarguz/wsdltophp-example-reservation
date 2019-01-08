<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Details StructType
 * Meta informations extracted from the WSDL
 * - documentation: added by Rail Team - to be checked what for
 * @subpackage Structs
 */
class Details extends AbstractStructBase
{
    /**
     * The Detail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\Detail_1[]
     */
    public $Detail;
    /**
     * Constructor method for Details
     * @uses Details::setDetail()
     * @param \Sabre\UpdateReservation\StructType\Detail_1[] $detail
     */
    public function __construct(array $detail = array())
    {
        $this
            ->setDetail($detail);
    }
    /**
     * Get Detail value
     * @return \Sabre\UpdateReservation\StructType\Detail_1[]|null
     */
    public function getDetail()
    {
        return $this->Detail;
    }
    /**
     * Set Detail value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Detail_1[] $detail
     * @return \Sabre\UpdateReservation\StructType\Details
     */
    public function setDetail(array $detail = array())
    {
        foreach ($detail as $detailsDetailItem) {
            // validation for constraint: itemType
            if (!$detailsDetailItem instanceof \Sabre\UpdateReservation\StructType\Detail_1) {
                throw new \InvalidArgumentException(sprintf('The Detail property can only contain items of \Sabre\UpdateReservation\StructType\Detail_1, "%s" given', is_object($detailsDetailItem) ? get_class($detailsDetailItem) : gettype($detailsDetailItem)), __LINE__);
            }
        }
        $this->Detail = $detail;
        return $this;
    }
    /**
     * Add item to Detail value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Detail_1 $item
     * @return \Sabre\UpdateReservation\StructType\Details
     */
    public function addToDetail(\Sabre\UpdateReservation\StructType\Detail_1 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Detail_1) {
            throw new \InvalidArgumentException(sprintf('The Detail property can only contain items of \Sabre\UpdateReservation\StructType\Detail_1, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Detail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Details
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
