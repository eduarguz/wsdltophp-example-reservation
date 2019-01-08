<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Parent StructType
 * @subpackage Structs
 */
class _Parent extends AbstractStructBase
{
    /**
     * The ref
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ref;
    /**
     * The newRef
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $newRef;
    /**
     * Constructor method for Parent
     * @uses _Parent::setRef()
     * @uses _Parent::setNewRef()
     * @param string $ref
     * @param string $newRef
     */
    public function __construct($ref = null, $newRef = null)
    {
        $this
            ->setRef($ref)
            ->setNewRef($newRef);
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef()
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \Sabre\UpdateReservation\StructType\_Parent
     */
    public function setRef($ref = null)
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        return $this;
    }
    /**
     * Get newRef value
     * @return string|null
     */
    public function getNewRef()
    {
        return $this->newRef;
    }
    /**
     * Set newRef value
     * @param string $newRef
     * @return \Sabre\UpdateReservation\StructType\_Parent
     */
    public function setNewRef($newRef = null)
    {
        // validation for constraint: string
        if (!is_null($newRef) && !is_string($newRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newRef)), __LINE__);
        }
        $this->newRef = $newRef;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\_Parent
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
