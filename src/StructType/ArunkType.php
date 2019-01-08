<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArunkType StructType
 * @subpackage Structs
 */
class ArunkType extends AbstractStructBase
{
    /**
     * The Line
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Line
     */
    public $Line;
    /**
     * The sequence
     * Meta informations extracted from the WSDL
     * - documentation: Identifies sequence number of Itinerary
     * @var int
     */
    public $sequence;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * Constructor method for ArunkType
     * @uses ArunkType::setLine()
     * @uses ArunkType::setSequence()
     * @uses ArunkType::setId()
     * @param \Sabre\UpdateReservation\StructType\Line $line
     * @param int $sequence
     * @param string $id
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Line $line = null, $sequence = null, $id = null)
    {
        $this
            ->setLine($line)
            ->setSequence($sequence)
            ->setId($id);
    }
    /**
     * Get Line value
     * @return \Sabre\UpdateReservation\StructType\Line|null
     */
    public function getLine()
    {
        return $this->Line;
    }
    /**
     * Set Line value
     * @param \Sabre\UpdateReservation\StructType\Line $line
     * @return \Sabre\UpdateReservation\StructType\ArunkType
     */
    public function setLine(\Sabre\UpdateReservation\StructType\Line $line = null)
    {
        $this->Line = $line;
        return $this;
    }
    /**
     * Get sequence value
     * @return int|null
     */
    public function getSequence()
    {
        return $this->sequence;
    }
    /**
     * Set sequence value
     * @param int $sequence
     * @return \Sabre\UpdateReservation\StructType\ArunkType
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: int
        if (!is_null($sequence) && !is_numeric($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequence)), __LINE__);
        }
        $this->sequence = $sequence;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\ArunkType
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ArunkType
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
