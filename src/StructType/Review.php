<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Review StructType
 * Meta informations extracted from the WSDL
 * - documentation: For tracking potential PNR booking for further review
 * - type: Review
 * @subpackage Structs
 */
class Review extends AbstractStructBase
{
    /**
     * The Candidate
     * Meta informations extracted from the WSDL
     * - documentation: Indicator for potential PNR booking for further review
     * @var bool
     */
    public $Candidate;
    /**
     * The Reporter
     * Meta informations extracted from the WSDL
     * - documentation: TN or Airline Code reporting potential PNR booking for further review
     * @var string
     */
    public $Reporter;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: Numeric value of the potential PNR booking for further review
     * - minOccurs: 0
     * @var int
     */
    public $Value;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Short description of reason for reporting potential PNR booking for further review
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for Review
     * @uses Review::setCandidate()
     * @uses Review::setReporter()
     * @uses Review::setValue()
     * @uses Review::setDescription()
     * @param bool $candidate
     * @param string $reporter
     * @param int $value
     * @param string $description
     */
    public function __construct($candidate = null, $reporter = null, $value = null, $description = null)
    {
        $this
            ->setCandidate($candidate)
            ->setReporter($reporter)
            ->setValue($value)
            ->setDescription($description);
    }
    /**
     * Get Candidate value
     * @return bool|null
     */
    public function getCandidate()
    {
        return $this->Candidate;
    }
    /**
     * Set Candidate value
     * @param bool $candidate
     * @return \Sabre\UpdateReservation\StructType\Review
     */
    public function setCandidate($candidate = null)
    {
        // validation for constraint: boolean
        if (!is_null($candidate) && !is_bool($candidate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($candidate)), __LINE__);
        }
        $this->Candidate = $candidate;
        return $this;
    }
    /**
     * Get Reporter value
     * @return string|null
     */
    public function getReporter()
    {
        return $this->Reporter;
    }
    /**
     * Set Reporter value
     * @param string $reporter
     * @return \Sabre\UpdateReservation\StructType\Review
     */
    public function setReporter($reporter = null)
    {
        // validation for constraint: string
        if (!is_null($reporter) && !is_string($reporter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reporter)), __LINE__);
        }
        $this->Reporter = $reporter;
        return $this;
    }
    /**
     * Get Value value
     * @return int|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param int $value
     * @return \Sabre\UpdateReservation\StructType\Review
     */
    public function setValue($value = null)
    {
        // validation for constraint: int
        if (!is_null($value) && !is_numeric($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Sabre\UpdateReservation\StructType\Review
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Review
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
