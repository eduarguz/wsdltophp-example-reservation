<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarriageGrp StructType
 * @subpackage Structs
 */
class MarriageGrp extends AbstractStructBase
{
    /**
     * The Ind
     * Meta informations extracted from the WSDL
     * - documentation: An indicator which represents non-contiguous group segments. Out of sequence married segment will have one other airline in between two airline group segments. | An indicator which represents non-contiguous group segments. Out of
     * sequence married segment will have one other airline in between two airline group segments.
     * - minOccurs: 0
     * @var string
     */
    public $Ind;
    /**
     * The Group
     * Meta informations extracted from the WSDL
     * - documentation: A set of air segments that are considered “married” together. This is referred to as the new married group number. Married Group may contain up to 3 segments. | A set of air segments that are considered “married” together.
     * This is referred to as the new married group number. Married Group may contain up to 3 segments.
     * - minOccurs: 0
     * @var string
     */
    public $Group;
    /**
     * The Sequence
     * Meta informations extracted from the WSDL
     * - documentation: The sequence number within the set/group of air segments that considered “married” together. | The sequence number within the set/group of air segments that considered “married” together.
     * - minOccurs: 0
     * @var string
     */
    public $Sequence;
    /**
     * Constructor method for MarriageGrp
     * @uses MarriageGrp::setInd()
     * @uses MarriageGrp::setGroup()
     * @uses MarriageGrp::setSequence()
     * @param string $ind
     * @param string $group
     * @param string $sequence
     */
    public function __construct($ind = null, $group = null, $sequence = null)
    {
        $this
            ->setInd($ind)
            ->setGroup($group)
            ->setSequence($sequence);
    }
    /**
     * Get Ind value
     * @return string|null
     */
    public function getInd()
    {
        return $this->Ind;
    }
    /**
     * Set Ind value
     * @param string $ind
     * @return \Sabre\UpdateReservation\StructType\MarriageGrp
     */
    public function setInd($ind = null)
    {
        // validation for constraint: string
        if (!is_null($ind) && !is_string($ind)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ind)), __LINE__);
        }
        $this->Ind = $ind;
        return $this;
    }
    /**
     * Get Group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param string $group
     * @return \Sabre\UpdateReservation\StructType\MarriageGrp
     */
    public function setGroup($group = null)
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($group)), __LINE__);
        }
        $this->Group = $group;
        return $this;
    }
    /**
     * Get Sequence value
     * @return string|null
     */
    public function getSequence()
    {
        return $this->Sequence;
    }
    /**
     * Set Sequence value
     * @param string $sequence
     * @return \Sabre\UpdateReservation\StructType\MarriageGrp
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: string
        if (!is_null($sequence) && !is_string($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sequence)), __LINE__);
        }
        $this->Sequence = $sequence;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MarriageGrp
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
