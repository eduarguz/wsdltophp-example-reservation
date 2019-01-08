<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocatorWithPartitionType StructType
 * Meta informations extracted from the WSDL
 * - pattern: [A-Z]{6}
 * @subpackage Structs
 */
class LocatorWithPartitionType extends AbstractStructBase
{
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{6}
     * @var string
     */
    public $_;
    /**
     * The Partition
     * @var string
     */
    public $Partition;
    /**
     * Constructor method for LocatorWithPartitionType
     * @uses LocatorWithPartitionType::set_()
     * @uses LocatorWithPartitionType::setPartition()
     * @param string $_
     * @param string $partition
     */
    public function __construct($_ = null, $partition = null)
    {
        $this
            ->set_($_)
            ->setPartition($partition);
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
     * @return \Sabre\UpdateReservation\StructType\LocatorWithPartitionType
     */
    public function set_($_ = null)
    {
        // validation for constraint: pattern
        if (is_scalar($_) && !preg_match('/[A-Z]{6}/', $_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{6}", "%s" given', var_export($_, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Partition value
     * @return string|null
     */
    public function getPartition()
    {
        return $this->Partition;
    }
    /**
     * Set Partition value
     * @param string $partition
     * @return \Sabre\UpdateReservation\StructType\LocatorWithPartitionType
     */
    public function setPartition($partition = null)
    {
        // validation for constraint: string
        if (!is_null($partition) && !is_string($partition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partition)), __LINE__);
        }
        $this->Partition = $partition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LocatorWithPartitionType
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
