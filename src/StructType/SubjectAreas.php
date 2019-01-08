<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubjectAreas StructType
 * @subpackage Structs
 */
class SubjectAreas extends AbstractStructBase
{
    /**
     * The SubjectArea
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $SubjectArea;
    /**
     * Constructor method for SubjectAreas
     * @uses SubjectAreas::setSubjectArea()
     * @param string[] $subjectArea
     */
    public function __construct(array $subjectArea = array())
    {
        $this
            ->setSubjectArea($subjectArea);
    }
    /**
     * Get SubjectArea value
     * @return string[]
     */
    public function getSubjectArea()
    {
        return $this->SubjectArea;
    }
    /**
     * Set SubjectArea value
     * @throws \InvalidArgumentException
     * @param string[] $subjectArea
     * @return \Sabre\UpdateReservation\StructType\SubjectAreas
     */
    public function setSubjectArea(array $subjectArea = array())
    {
        foreach ($subjectArea as $subjectAreasSubjectAreaItem) {
            // validation for constraint: itemType
            if (!is_string($subjectAreasSubjectAreaItem)) {
                throw new \InvalidArgumentException(sprintf('The SubjectArea property can only contain items of string, "%s" given', is_object($subjectAreasSubjectAreaItem) ? get_class($subjectAreasSubjectAreaItem) : gettype($subjectAreasSubjectAreaItem)), __LINE__);
            }
        }
        $this->SubjectArea = $subjectArea;
        return $this;
    }
    /**
     * Add item to SubjectArea value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\SubjectAreas
     */
    public function addToSubjectArea($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SubjectArea property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SubjectArea[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SubjectAreas
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
