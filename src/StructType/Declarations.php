<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Declarations StructType
 * @subpackage Structs
 */
class Declarations extends AbstractStructBase
{
    /**
     * The Declaration
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Declaration[]
     */
    public $Declaration;
    /**
     * Constructor method for Declarations
     * @uses Declarations::setDeclaration()
     * @param \Sabre\UpdateReservation\StructType\Declaration[] $declaration
     */
    public function __construct(array $declaration = array())
    {
        $this
            ->setDeclaration($declaration);
    }
    /**
     * Get Declaration value
     * @return \Sabre\UpdateReservation\StructType\Declaration[]|null
     */
    public function getDeclaration()
    {
        return $this->Declaration;
    }
    /**
     * Set Declaration value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Declaration[] $declaration
     * @return \Sabre\UpdateReservation\StructType\Declarations
     */
    public function setDeclaration(array $declaration = array())
    {
        foreach ($declaration as $declarationsDeclarationItem) {
            // validation for constraint: itemType
            if (!$declarationsDeclarationItem instanceof \Sabre\UpdateReservation\StructType\Declaration) {
                throw new \InvalidArgumentException(sprintf('The Declaration property can only contain items of \Sabre\UpdateReservation\StructType\Declaration, "%s" given', is_object($declarationsDeclarationItem) ? get_class($declarationsDeclarationItem) : gettype($declarationsDeclarationItem)), __LINE__);
            }
        }
        $this->Declaration = $declaration;
        return $this;
    }
    /**
     * Add item to Declaration value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Declaration $item
     * @return \Sabre\UpdateReservation\StructType\Declarations
     */
    public function addToDeclaration(\Sabre\UpdateReservation\StructType\Declaration $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Declaration) {
            throw new \InvalidArgumentException(sprintf('The Declaration property can only contain items of \Sabre\UpdateReservation\StructType\Declaration, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Declaration[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Declarations
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
