<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CorporateIDs.PNRB StructType
 * @subpackage Structs
 */
class CorporateIDs_PNRB extends AbstractStructBase
{
    /**
     * The CorporateID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CorporateID_PNRB[]
     */
    public $CorporateID;
    /**
     * Constructor method for CorporateIDs.PNRB
     * @uses CorporateIDs_PNRB::setCorporateID()
     * @param \Sabre\UpdateReservation\StructType\CorporateID_PNRB[] $corporateID
     */
    public function __construct(array $corporateID = array())
    {
        $this
            ->setCorporateID($corporateID);
    }
    /**
     * Get CorporateID value
     * @return \Sabre\UpdateReservation\StructType\CorporateID_PNRB[]|null
     */
    public function getCorporateID()
    {
        return $this->CorporateID;
    }
    /**
     * Set CorporateID value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CorporateID_PNRB[] $corporateID
     * @return \Sabre\UpdateReservation\StructType\CorporateIDs_PNRB
     */
    public function setCorporateID(array $corporateID = array())
    {
        foreach ($corporateID as $corporateIDs_PNRBCorporateIDItem) {
            // validation for constraint: itemType
            if (!$corporateIDs_PNRBCorporateIDItem instanceof \Sabre\UpdateReservation\StructType\CorporateID_PNRB) {
                throw new \InvalidArgumentException(sprintf('The CorporateID property can only contain items of \Sabre\UpdateReservation\StructType\CorporateID_PNRB, "%s" given', is_object($corporateIDs_PNRBCorporateIDItem) ? get_class($corporateIDs_PNRBCorporateIDItem) : gettype($corporateIDs_PNRBCorporateIDItem)), __LINE__);
            }
        }
        $this->CorporateID = $corporateID;
        return $this;
    }
    /**
     * Add item to CorporateID value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CorporateID_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\CorporateIDs_PNRB
     */
    public function addToCorporateID(\Sabre\UpdateReservation\StructType\CorporateID_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\CorporateID_PNRB) {
            throw new \InvalidArgumentException(sprintf('The CorporateID property can only contain items of \Sabre\UpdateReservation\StructType\CorporateID_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CorporateID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CorporateIDs_PNRB
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
