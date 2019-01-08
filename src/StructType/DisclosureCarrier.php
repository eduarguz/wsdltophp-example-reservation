<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisclosureCarrier StructType
 * Meta informations extracted from the WSDL
 * - documentation: Disclosure carrier field (DCX) added. Optional data from DSS. If the DCX is not available, whole section is excluded from the RS. | Disclosure Carrier is used to return operated flight data.
 * @subpackage Structs
 */
class DisclosureCarrier extends AbstractStructBase
{
    /**
     * The Banner
     * Meta informations extracted from the WSDL
     * - documentation: "DisclosureCarrier/Banner" is used to return the disclosure carrier name | "DisclosureCarrier/Banner" is used to return the disclosure carrier name
     * - minOccurs: 0
     * @var string
     */
    public $Banner;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: "Code" is used to return the disclosure carrier code associated with the particular vehicle segment | "Code" is used to return the disclosure carrier code associated with the particular vehicle segment
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The DOT
     * Meta informations extracted from the WSDL
     * - documentation: "DOT" is optional data from DSS (DOT) it determines Banner appearance | "DOT" is optional data from DSS (DOT) it determines Banner appearance
     * - use: optional
     * @var bool
     */
    public $DOT;
    /**
     * Constructor method for DisclosureCarrier
     * @uses DisclosureCarrier::setBanner()
     * @uses DisclosureCarrier::setCode()
     * @uses DisclosureCarrier::setDOT()
     * @param string $banner
     * @param string $code
     * @param bool $dOT
     */
    public function __construct($banner = null, $code = null, $dOT = null)
    {
        $this
            ->setBanner($banner)
            ->setCode($code)
            ->setDOT($dOT);
    }
    /**
     * Get Banner value
     * @return string|null
     */
    public function getBanner()
    {
        return $this->Banner;
    }
    /**
     * Set Banner value
     * @param string $banner
     * @return \Sabre\UpdateReservation\StructType\DisclosureCarrier
     */
    public function setBanner($banner = null)
    {
        // validation for constraint: string
        if (!is_null($banner) && !is_string($banner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($banner)), __LINE__);
        }
        $this->Banner = $banner;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\DisclosureCarrier
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get DOT value
     * @return bool|null
     */
    public function getDOT()
    {
        return $this->DOT;
    }
    /**
     * Set DOT value
     * @param bool $dOT
     * @return \Sabre\UpdateReservation\StructType\DisclosureCarrier
     */
    public function setDOT($dOT = null)
    {
        // validation for constraint: boolean
        if (!is_null($dOT) && !is_bool($dOT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dOT)), __LINE__);
        }
        $this->DOT = $dOT;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DisclosureCarrier
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
