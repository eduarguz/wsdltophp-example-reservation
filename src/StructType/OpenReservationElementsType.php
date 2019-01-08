<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenReservationElementsType StructType
 * @subpackage Structs
 */
class OpenReservationElementsType extends AbstractStructBase
{
    /**
     * The OpenReservationElement
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OpenReservationElementType[]
     */
    public $OpenReservationElement;
    /**
     * Constructor method for OpenReservationElementsType
     * @uses OpenReservationElementsType::setOpenReservationElement()
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementType[] $openReservationElement
     */
    public function __construct(array $openReservationElement = array())
    {
        $this
            ->setOpenReservationElement($openReservationElement);
    }
    /**
     * Get OpenReservationElement value
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType[]|null
     */
    public function getOpenReservationElement()
    {
        return $this->OpenReservationElement;
    }
    /**
     * Set OpenReservationElement value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementType[] $openReservationElement
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementsType
     */
    public function setOpenReservationElement(array $openReservationElement = array())
    {
        foreach ($openReservationElement as $openReservationElementsTypeOpenReservationElementItem) {
            // validation for constraint: itemType
            if (!$openReservationElementsTypeOpenReservationElementItem instanceof \Sabre\UpdateReservation\StructType\OpenReservationElementType) {
                throw new \InvalidArgumentException(sprintf('The OpenReservationElement property can only contain items of \Sabre\UpdateReservation\StructType\OpenReservationElementType, "%s" given', is_object($openReservationElementsTypeOpenReservationElementItem) ? get_class($openReservationElementsTypeOpenReservationElementItem) : gettype($openReservationElementsTypeOpenReservationElementItem)), __LINE__);
            }
        }
        $this->OpenReservationElement = $openReservationElement;
        return $this;
    }
    /**
     * Add item to OpenReservationElement value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementType $item
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementsType
     */
    public function addToOpenReservationElement(\Sabre\UpdateReservation\StructType\OpenReservationElementType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\OpenReservationElementType) {
            throw new \InvalidArgumentException(sprintf('The OpenReservationElement property can only contain items of \Sabre\UpdateReservation\StructType\OpenReservationElementType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OpenReservationElement[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementsType
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
