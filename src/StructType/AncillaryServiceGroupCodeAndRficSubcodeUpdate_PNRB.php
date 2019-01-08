<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceGroupCodeAndRficSubcodeUpdate.PNRB
 * StructType
 * @subpackage Structs
 */
class AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB extends AbstractStructBase
{
    /**
     * The GroupCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GroupCode;
    /**
     * The RficSubcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RficSubcode;
    /**
     * Constructor method for AncillaryServiceGroupCodeAndRficSubcodeUpdate.PNRB
     * @uses AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB::setGroupCode()
     * @uses AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB::setRficSubcode()
     * @param string $groupCode
     * @param string $rficSubcode
     */
    public function __construct($groupCode = null, $rficSubcode = null)
    {
        $this
            ->setGroupCode($groupCode)
            ->setRficSubcode($rficSubcode);
    }
    /**
     * Get GroupCode value
     * @return string|null
     */
    public function getGroupCode()
    {
        return $this->GroupCode;
    }
    /**
     * Set GroupCode value
     * @param string $groupCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB
     */
    public function setGroupCode($groupCode = null)
    {
        // validation for constraint: string
        if (!is_null($groupCode) && !is_string($groupCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupCode)), __LINE__);
        }
        $this->GroupCode = $groupCode;
        return $this;
    }
    /**
     * Get RficSubcode value
     * @return string|null
     */
    public function getRficSubcode()
    {
        return $this->RficSubcode;
    }
    /**
     * Set RficSubcode value
     * @param string $rficSubcode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB
     */
    public function setRficSubcode($rficSubcode = null)
    {
        // validation for constraint: string
        if (!is_null($rficSubcode) && !is_string($rficSubcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rficSubcode)), __LINE__);
        }
        $this->RficSubcode = $rficSubcode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB
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
