<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingSearchParameters StructType
 * Meta informations extracted from the WSDL
 * - documentation: Optional Parameters for future enhancements
 * @subpackage Structs
 */
class LodgingSearchParameters extends AbstractStructBase
{
    /**
     * The SearchParameter
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\AttributeType[]
     */
    public $SearchParameter;
    /**
     * Constructor method for LodgingSearchParameters
     * @uses LodgingSearchParameters::setSearchParameter()
     * @param \Sabre\UpdateReservation\StructType\AttributeType[] $searchParameter
     */
    public function __construct(array $searchParameter = array())
    {
        $this
            ->setSearchParameter($searchParameter);
    }
    /**
     * Get SearchParameter value
     * @return \Sabre\UpdateReservation\StructType\AttributeType[]|null
     */
    public function getSearchParameter()
    {
        return $this->SearchParameter;
    }
    /**
     * Set SearchParameter value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AttributeType[] $searchParameter
     * @return \Sabre\UpdateReservation\StructType\LodgingSearchParameters
     */
    public function setSearchParameter(array $searchParameter = array())
    {
        foreach ($searchParameter as $lodgingSearchParametersSearchParameterItem) {
            // validation for constraint: itemType
            if (!$lodgingSearchParametersSearchParameterItem instanceof \Sabre\UpdateReservation\StructType\AttributeType) {
                throw new \InvalidArgumentException(sprintf('The SearchParameter property can only contain items of \Sabre\UpdateReservation\StructType\AttributeType, "%s" given', is_object($lodgingSearchParametersSearchParameterItem) ? get_class($lodgingSearchParametersSearchParameterItem) : gettype($lodgingSearchParametersSearchParameterItem)), __LINE__);
            }
        }
        $this->SearchParameter = $searchParameter;
        return $this;
    }
    /**
     * Add item to SearchParameter value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AttributeType $item
     * @return \Sabre\UpdateReservation\StructType\LodgingSearchParameters
     */
    public function addToSearchParameter(\Sabre\UpdateReservation\StructType\AttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AttributeType) {
            throw new \InvalidArgumentException(sprintf('The SearchParameter property can only contain items of \Sabre\UpdateReservation\StructType\AttributeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchParameter[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LodgingSearchParameters
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
