<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServicePdcSeatPartialUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServicePdcSeatPartialUpdate_PNRB extends AbstractStructBase
{
    /**
     * The PdcSeat
     * Meta informations extracted from the WSDL
     * - documentation: Pdc seat number.
     * - minOccurs: 1
     * @var string
     */
    public $PdcSeat;
    /**
     * Constructor method for AncillaryServicePdcSeatPartialUpdate.PNRB
     * @uses AncillaryServicePdcSeatPartialUpdate_PNRB::setPdcSeat()
     * @param string $pdcSeat
     */
    public function __construct($pdcSeat = null)
    {
        $this
            ->setPdcSeat($pdcSeat);
    }
    /**
     * Get PdcSeat value
     * @return string
     */
    public function getPdcSeat()
    {
        return $this->PdcSeat;
    }
    /**
     * Set PdcSeat value
     * @param string $pdcSeat
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePdcSeatPartialUpdate_PNRB
     */
    public function setPdcSeat($pdcSeat = null)
    {
        // validation for constraint: string
        if (!is_null($pdcSeat) && !is_string($pdcSeat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pdcSeat)), __LINE__);
        }
        $this->PdcSeat = $pdcSeat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePdcSeatPartialUpdate_PNRB
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
