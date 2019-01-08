<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnOptions StructType
 * @subpackage Structs
 */
class ReturnOptions extends ReturnOptions_PNRB
{
    /**
     * The RetrievePNR
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $RetrievePNR;
    /**
     * The IncludeUpdateDetails
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $IncludeUpdateDetails;
    /**
     * The ReturnLocator
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Determines if response should contain locator information if available during update operation. This setting is independent of RetrievePNR setting.
     * - use: optional
     * @var bool
     */
    public $ReturnLocator;
    /**
     * Constructor method for ReturnOptions
     * @uses ReturnOptions::setRetrievePNR()
     * @uses ReturnOptions::setIncludeUpdateDetails()
     * @uses ReturnOptions::setReturnLocator()
     * @param bool $retrievePNR
     * @param bool $includeUpdateDetails
     * @param bool $returnLocator
     */
    public function __construct($retrievePNR = false, $includeUpdateDetails = false, $returnLocator = false)
    {
        $this
            ->setRetrievePNR($retrievePNR)
            ->setIncludeUpdateDetails($includeUpdateDetails)
            ->setReturnLocator($returnLocator);
    }
    /**
     * Get RetrievePNR value
     * @return bool|null
     */
    public function getRetrievePNR()
    {
        return $this->RetrievePNR;
    }
    /**
     * Set RetrievePNR value
     * @param bool $retrievePNR
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions
     */
    public function setRetrievePNR($retrievePNR = false)
    {
        // validation for constraint: boolean
        if (!is_null($retrievePNR) && !is_bool($retrievePNR)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($retrievePNR)), __LINE__);
        }
        $this->RetrievePNR = $retrievePNR;
        return $this;
    }
    /**
     * Get IncludeUpdateDetails value
     * @return bool|null
     */
    public function getIncludeUpdateDetails()
    {
        return $this->IncludeUpdateDetails;
    }
    /**
     * Set IncludeUpdateDetails value
     * @param bool $includeUpdateDetails
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions
     */
    public function setIncludeUpdateDetails($includeUpdateDetails = false)
    {
        // validation for constraint: boolean
        if (!is_null($includeUpdateDetails) && !is_bool($includeUpdateDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeUpdateDetails)), __LINE__);
        }
        $this->IncludeUpdateDetails = $includeUpdateDetails;
        return $this;
    }
    /**
     * Get ReturnLocator value
     * @return bool|null
     */
    public function getReturnLocator()
    {
        return $this->ReturnLocator;
    }
    /**
     * Set ReturnLocator value
     * @param bool $returnLocator
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions
     */
    public function setReturnLocator($returnLocator = false)
    {
        // validation for constraint: boolean
        if (!is_null($returnLocator) && !is_bool($returnLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnLocator)), __LINE__);
        }
        $this->ReturnLocator = $returnLocator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions
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
