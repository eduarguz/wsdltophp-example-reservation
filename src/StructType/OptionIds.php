<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionIds StructType
 * Meta informations extracted from the WSDL
 * - documentation: Element containing list of TripProposal option IDs related to PNR
 * @subpackage Structs
 */
class OptionIds extends AbstractStructBase
{
    /**
     * The OptionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $OptionId;
    /**
     * Constructor method for OptionIds
     * @uses OptionIds::setOptionId()
     * @param string[] $optionId
     */
    public function __construct(array $optionId = array())
    {
        $this
            ->setOptionId($optionId);
    }
    /**
     * Get OptionId value
     * @return string[]|null
     */
    public function getOptionId()
    {
        return $this->OptionId;
    }
    /**
     * Set OptionId value
     * @throws \InvalidArgumentException
     * @param string[] $optionId
     * @return \Sabre\UpdateReservation\StructType\OptionIds
     */
    public function setOptionId(array $optionId = array())
    {
        foreach ($optionId as $optionIdsOptionIdItem) {
            // validation for constraint: itemType
            if (!is_string($optionIdsOptionIdItem)) {
                throw new \InvalidArgumentException(sprintf('The OptionId property can only contain items of string, "%s" given', is_object($optionIdsOptionIdItem) ? get_class($optionIdsOptionIdItem) : gettype($optionIdsOptionIdItem)), __LINE__);
            }
        }
        $this->OptionId = $optionId;
        return $this;
    }
    /**
     * Add item to OptionId value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\OptionIds
     */
    public function addToOptionId($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The OptionId property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OptionId[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OptionIds
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
