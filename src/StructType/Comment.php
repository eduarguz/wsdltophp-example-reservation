<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Comment StructType
 * Meta informations extracted from the WSDL
 * - documentation: max 63 chars | User-provided comment
 * - minOccurs: 0
 * - type: xsd:string
 * @subpackage Structs
 */
class Comment extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: User-defined comment name to identify specific comment
     * @var string
     */
    public $name;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: User-defined comment type
     * @var string
     */
    public $type;
    /**
     * Constructor method for Comment
     * @uses Comment::set_()
     * @uses Comment::setName()
     * @uses Comment::setType()
     * @param string $_
     * @param string $name
     * @param string $type
     */
    public function __construct($_ = null, $name = null, $type = null)
    {
        $this
            ->set_($_)
            ->setName($name)
            ->setType($type);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\Comment
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\Comment
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Comment
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Comment
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
