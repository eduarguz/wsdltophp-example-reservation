<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialInstructions StructType
 * Meta informations extracted from the WSDL
 * - documentation: All of the special instruction should be either free form or GTA Special Instruction
 * @subpackage Structs
 */
class SpecialInstructions extends AbstractStructBase
{
    /**
     * The SpecialInstruction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - documentation: Free Form Special Instruction, but for GTA aggregator it should be pre defined code or text
     * @var string[]
     */
    public $SpecialInstruction;
    /**
     * Constructor method for SpecialInstructions
     * @uses SpecialInstructions::setSpecialInstruction()
     * @param string[] $specialInstruction
     */
    public function __construct(array $specialInstruction = array())
    {
        $this
            ->setSpecialInstruction($specialInstruction);
    }
    /**
     * Get SpecialInstruction value
     * @return string[]|null
     */
    public function getSpecialInstruction()
    {
        return $this->SpecialInstruction;
    }
    /**
     * Set SpecialInstruction value
     * @throws \InvalidArgumentException
     * @param string[] $specialInstruction
     * @return \Sabre\UpdateReservation\StructType\SpecialInstructions
     */
    public function setSpecialInstruction(array $specialInstruction = array())
    {
        foreach ($specialInstruction as $specialInstructionsSpecialInstructionItem) {
            // validation for constraint: itemType
            if (!is_string($specialInstructionsSpecialInstructionItem)) {
                throw new \InvalidArgumentException(sprintf('The SpecialInstruction property can only contain items of string, "%s" given', is_object($specialInstructionsSpecialInstructionItem) ? get_class($specialInstructionsSpecialInstructionItem) : gettype($specialInstructionsSpecialInstructionItem)), __LINE__);
            }
        }
        $this->SpecialInstruction = $specialInstruction;
        return $this;
    }
    /**
     * Add item to SpecialInstruction value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\SpecialInstructions
     */
    public function addToSpecialInstruction($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SpecialInstruction property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialInstruction[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SpecialInstructions
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
