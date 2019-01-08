<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Purpose StructType
 * @subpackage Structs
 */
class Purpose extends AbstractStructBase
{
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - documentation: Purpose of issue visa
     * - minOccurs: 0
     * @var string
     */
    public $Comments;
    /**
     * Constructor method for Purpose
     * @uses Purpose::setComments()
     * @param string $comments
     */
    public function __construct($comments = null)
    {
        $this
            ->setComments($comments);
    }
    /**
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $comments
     * @return \Sabre\UpdateReservation\StructType\Purpose
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Purpose
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
