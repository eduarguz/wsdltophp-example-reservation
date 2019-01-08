<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameAssociationList.PNRB StructType
 * @subpackage Structs
 */
class NameAssociationList_PNRB extends AbstractStructBase
{
    /**
     * The NameAssociationTag
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB[]
     */
    public $NameAssociationTag;
    /**
     * Constructor method for NameAssociationList.PNRB
     * @uses NameAssociationList_PNRB::setNameAssociationTag()
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB[] $nameAssociationTag
     */
    public function __construct(array $nameAssociationTag = array())
    {
        $this
            ->setNameAssociationTag($nameAssociationTag);
    }
    /**
     * Get NameAssociationTag value
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB[]|null
     */
    public function getNameAssociationTag()
    {
        return $this->NameAssociationTag;
    }
    /**
     * Set NameAssociationTag value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB[] $nameAssociationTag
     * @return \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB
     */
    public function setNameAssociationTag(array $nameAssociationTag = array())
    {
        foreach ($nameAssociationTag as $nameAssociationList_PNRBNameAssociationTagItem) {
            // validation for constraint: itemType
            if (!$nameAssociationList_PNRBNameAssociationTagItem instanceof \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB) {
                throw new \InvalidArgumentException(sprintf('The NameAssociationTag property can only contain items of \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB, "%s" given', is_object($nameAssociationList_PNRBNameAssociationTagItem) ? get_class($nameAssociationList_PNRBNameAssociationTagItem) : gettype($nameAssociationList_PNRBNameAssociationTagItem)), __LINE__);
            }
        }
        $this->NameAssociationTag = $nameAssociationTag;
        return $this;
    }
    /**
     * Add item to NameAssociationTag value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB
     */
    public function addToNameAssociationTag(\Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB) {
            throw new \InvalidArgumentException(sprintf('The NameAssociationTag property can only contain items of \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameAssociationTag[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB
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
