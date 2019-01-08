<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanInclusionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A List of Rate Plan Inclusions
 * @subpackage Structs
 */
class RatePlanInclusionsType extends AbstractStructBase
{
    /**
     * The RatePlanInclusionDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RatePlanInclusionDescriptionType[]
     */
    public $RatePlanInclusionDescription;
    /**
     * Constructor method for RatePlanInclusionsType
     * @uses RatePlanInclusionsType::setRatePlanInclusionDescription()
     * @param \Sabre\UpdateReservation\StructType\RatePlanInclusionDescriptionType[] $ratePlanInclusionDescription
     */
    public function __construct(array $ratePlanInclusionDescription = array())
    {
        $this
            ->setRatePlanInclusionDescription($ratePlanInclusionDescription);
    }
    /**
     * Get RatePlanInclusionDescription value
     * @return \Sabre\UpdateReservation\StructType\RatePlanInclusionDescriptionType[]|null
     */
    public function getRatePlanInclusionDescription()
    {
        return $this->RatePlanInclusionDescription;
    }
    /**
     * Set RatePlanInclusionDescription value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RatePlanInclusionDescriptionType[] $ratePlanInclusionDescription
     * @return \Sabre\UpdateReservation\StructType\RatePlanInclusionsType
     */
    public function setRatePlanInclusionDescription(array $ratePlanInclusionDescription = array())
    {
        foreach ($ratePlanInclusionDescription as $ratePlanInclusionsTypeRatePlanInclusionDescriptionItem) {
            // validation for constraint: itemType
            if (!$ratePlanInclusionsTypeRatePlanInclusionDescriptionItem instanceof \Sabre\UpdateReservation\StructType\RatePlanInclusionDescriptionType) {
                throw new \InvalidArgumentException(sprintf('The RatePlanInclusionDescription property can only contain items of \Sabre\UpdateReservation\StructType\RatePlanInclusionDescriptionType, "%s" given', is_object($ratePlanInclusionsTypeRatePlanInclusionDescriptionItem) ? get_class($ratePlanInclusionsTypeRatePlanInclusionDescriptionItem) : gettype($ratePlanInclusionsTypeRatePlanInclusionDescriptionItem)), __LINE__);
            }
        }
        $this->RatePlanInclusionDescription = $ratePlanInclusionDescription;
        return $this;
    }
    /**
     * Add item to RatePlanInclusionDescription value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RatePlanInclusionDescriptionType $item
     * @return \Sabre\UpdateReservation\StructType\RatePlanInclusionsType
     */
    public function addToRatePlanInclusionDescription(\Sabre\UpdateReservation\StructType\RatePlanInclusionDescriptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RatePlanInclusionDescriptionType) {
            throw new \InvalidArgumentException(sprintf('The RatePlanInclusionDescription property can only contain items of \Sabre\UpdateReservation\StructType\RatePlanInclusionDescriptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatePlanInclusionDescription[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RatePlanInclusionsType
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
