<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenericSpecialRequests.PNRB StructType
 * @subpackage Structs
 */
class GenericSpecialRequests_PNRB extends AbstractStructBase
{
    /**
     * The GenericSpecialRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public $GenericSpecialRequest;
    /**
     * Constructor method for GenericSpecialRequests.PNRB
     * @uses GenericSpecialRequests_PNRB::setGenericSpecialRequest()
     * @param \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB $genericSpecialRequest
     */
    public function __construct(\Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB $genericSpecialRequest = null)
    {
        $this
            ->setGenericSpecialRequest($genericSpecialRequest);
    }
    /**
     * Get GenericSpecialRequest value
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB|null
     */
    public function getGenericSpecialRequest()
    {
        return $this->GenericSpecialRequest;
    }
    /**
     * Set GenericSpecialRequest value
     * @param \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB $genericSpecialRequest
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequests_PNRB
     */
    public function setGenericSpecialRequest(\Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB $genericSpecialRequest = null)
    {
        $this->GenericSpecialRequest = $genericSpecialRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequests_PNRB
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
