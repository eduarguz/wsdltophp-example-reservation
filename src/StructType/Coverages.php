<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coverages StructType
 * @subpackage Structs
 */
class Coverages extends AbstractStructBase
{
    /**
     * The Coverage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\InsuranceCoverage[]
     */
    public $Coverage;
    /**
     * Constructor method for Coverages
     * @uses Coverages::setCoverage()
     * @param \Sabre\UpdateReservation\StructType\InsuranceCoverage[] $coverage
     */
    public function __construct(array $coverage = array())
    {
        $this
            ->setCoverage($coverage);
    }
    /**
     * Get Coverage value
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverage[]|null
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }
    /**
     * Set Coverage value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\InsuranceCoverage[] $coverage
     * @return \Sabre\UpdateReservation\StructType\Coverages
     */
    public function setCoverage(array $coverage = array())
    {
        foreach ($coverage as $coveragesCoverageItem) {
            // validation for constraint: itemType
            if (!$coveragesCoverageItem instanceof \Sabre\UpdateReservation\StructType\InsuranceCoverage) {
                throw new \InvalidArgumentException(sprintf('The Coverage property can only contain items of \Sabre\UpdateReservation\StructType\InsuranceCoverage, "%s" given', is_object($coveragesCoverageItem) ? get_class($coveragesCoverageItem) : gettype($coveragesCoverageItem)), __LINE__);
            }
        }
        $this->Coverage = $coverage;
        return $this;
    }
    /**
     * Add item to Coverage value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\InsuranceCoverage $item
     * @return \Sabre\UpdateReservation\StructType\Coverages
     */
    public function addToCoverage(\Sabre\UpdateReservation\StructType\InsuranceCoverage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\InsuranceCoverage) {
            throw new \InvalidArgumentException(sprintf('The Coverage property can only contain items of \Sabre\UpdateReservation\StructType\InsuranceCoverage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Coverage[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Coverages
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
