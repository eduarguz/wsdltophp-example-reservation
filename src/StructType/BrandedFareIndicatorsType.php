<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandedFareIndicatorsType StructType
 * @subpackage Structs
 */
class BrandedFareIndicatorsType extends AbstractStructBase
{
    /**
     * The ReturnCheapestUnbrandedFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndRequiredType
     */
    public $ReturnCheapestUnbrandedFare;
    /**
     * The singleBrandedFare
     * Meta informations extracted from the WSDL
     * - documentation: Return single brand option per itin
     * @var bool
     */
    public $singleBrandedFare;
    /**
     * The multipleBrandedFares
     * Meta informations extracted from the WSDL
     * - documentation: Return multiple brand options per itin
     * @var bool
     */
    public $multipleBrandedFares;
    /**
     * The returnBrandAncillaries
     * Meta informations extracted from the WSDL
     * - documentation: Return ancillaries from the ATPCO Branded Fares Feature Table 166
     * @var bool
     */
    public $returnBrandAncillaries;
    /**
     * Constructor method for BrandedFareIndicatorsType
     * @uses BrandedFareIndicatorsType::setReturnCheapestUnbrandedFare()
     * @uses BrandedFareIndicatorsType::setSingleBrandedFare()
     * @uses BrandedFareIndicatorsType::setMultipleBrandedFares()
     * @uses BrandedFareIndicatorsType::setReturnBrandAncillaries()
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $returnCheapestUnbrandedFare
     * @param bool $singleBrandedFare
     * @param bool $multipleBrandedFares
     * @param bool $returnBrandAncillaries
     */
    public function __construct(\Sabre\UpdateReservation\StructType\IndRequiredType $returnCheapestUnbrandedFare = null, $singleBrandedFare = null, $multipleBrandedFares = null, $returnBrandAncillaries = null)
    {
        $this
            ->setReturnCheapestUnbrandedFare($returnCheapestUnbrandedFare)
            ->setSingleBrandedFare($singleBrandedFare)
            ->setMultipleBrandedFares($multipleBrandedFares)
            ->setReturnBrandAncillaries($returnBrandAncillaries);
    }
    /**
     * Get ReturnCheapestUnbrandedFare value
     * @return \Sabre\UpdateReservation\StructType\IndRequiredType|null
     */
    public function getReturnCheapestUnbrandedFare()
    {
        return $this->ReturnCheapestUnbrandedFare;
    }
    /**
     * Set ReturnCheapestUnbrandedFare value
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $returnCheapestUnbrandedFare
     * @return \Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType
     */
    public function setReturnCheapestUnbrandedFare(\Sabre\UpdateReservation\StructType\IndRequiredType $returnCheapestUnbrandedFare = null)
    {
        $this->ReturnCheapestUnbrandedFare = $returnCheapestUnbrandedFare;
        return $this;
    }
    /**
     * Get singleBrandedFare value
     * @return bool|null
     */
    public function getSingleBrandedFare()
    {
        return $this->singleBrandedFare;
    }
    /**
     * Set singleBrandedFare value
     * @param bool $singleBrandedFare
     * @return \Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType
     */
    public function setSingleBrandedFare($singleBrandedFare = null)
    {
        // validation for constraint: boolean
        if (!is_null($singleBrandedFare) && !is_bool($singleBrandedFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($singleBrandedFare)), __LINE__);
        }
        $this->singleBrandedFare = $singleBrandedFare;
        return $this;
    }
    /**
     * Get multipleBrandedFares value
     * @return bool|null
     */
    public function getMultipleBrandedFares()
    {
        return $this->multipleBrandedFares;
    }
    /**
     * Set multipleBrandedFares value
     * @param bool $multipleBrandedFares
     * @return \Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType
     */
    public function setMultipleBrandedFares($multipleBrandedFares = null)
    {
        // validation for constraint: boolean
        if (!is_null($multipleBrandedFares) && !is_bool($multipleBrandedFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($multipleBrandedFares)), __LINE__);
        }
        $this->multipleBrandedFares = $multipleBrandedFares;
        return $this;
    }
    /**
     * Get returnBrandAncillaries value
     * @return bool|null
     */
    public function getReturnBrandAncillaries()
    {
        return $this->returnBrandAncillaries;
    }
    /**
     * Set returnBrandAncillaries value
     * @param bool $returnBrandAncillaries
     * @return \Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType
     */
    public function setReturnBrandAncillaries($returnBrandAncillaries = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnBrandAncillaries) && !is_bool($returnBrandAncillaries)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnBrandAncillaries)), __LINE__);
        }
        $this->returnBrandAncillaries = $returnBrandAncillaries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType
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
