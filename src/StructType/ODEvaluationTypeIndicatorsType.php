<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ODEvaluationTypeIndicatorsType StructType
 * @subpackage Structs
 */
class ODEvaluationTypeIndicatorsType extends AbstractStructBase
{
    /**
     * The default
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $default;
    /**
     * The sumOfLocals
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $sumOfLocals;
    /**
     * The trueOD
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $trueOD;
    /**
     * The longestSegmentFare
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $longestSegmentFare;
    /**
     * The dominantSegmentFare
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $dominantSegmentFare;
    /**
     * The local
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $local;
    /**
     * The financial
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $financial;
    /**
     * The physical
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $physical;
    /**
     * Constructor method for ODEvaluationTypeIndicatorsType
     * @uses ODEvaluationTypeIndicatorsType::setDefault()
     * @uses ODEvaluationTypeIndicatorsType::setSumOfLocals()
     * @uses ODEvaluationTypeIndicatorsType::setTrueOD()
     * @uses ODEvaluationTypeIndicatorsType::setLongestSegmentFare()
     * @uses ODEvaluationTypeIndicatorsType::setDominantSegmentFare()
     * @uses ODEvaluationTypeIndicatorsType::setLocal()
     * @uses ODEvaluationTypeIndicatorsType::setFinancial()
     * @uses ODEvaluationTypeIndicatorsType::setPhysical()
     * @param bool $default
     * @param bool $sumOfLocals
     * @param bool $trueOD
     * @param bool $longestSegmentFare
     * @param bool $dominantSegmentFare
     * @param bool $local
     * @param bool $financial
     * @param bool $physical
     */
    public function __construct($default = false, $sumOfLocals = false, $trueOD = false, $longestSegmentFare = false, $dominantSegmentFare = false, $local = false, $financial = false, $physical = false)
    {
        $this
            ->setDefault($default)
            ->setSumOfLocals($sumOfLocals)
            ->setTrueOD($trueOD)
            ->setLongestSegmentFare($longestSegmentFare)
            ->setDominantSegmentFare($dominantSegmentFare)
            ->setLocal($local)
            ->setFinancial($financial)
            ->setPhysical($physical);
    }
    /**
     * Get default value
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * Set default value
     * @param bool $default
     * @return \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType
     */
    public function setDefault($default = false)
    {
        // validation for constraint: boolean
        if (!is_null($default) && !is_bool($default)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($default)), __LINE__);
        }
        $this->default = $default;
        return $this;
    }
    /**
     * Get sumOfLocals value
     * @return bool|null
     */
    public function getSumOfLocals()
    {
        return $this->sumOfLocals;
    }
    /**
     * Set sumOfLocals value
     * @param bool $sumOfLocals
     * @return \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType
     */
    public function setSumOfLocals($sumOfLocals = false)
    {
        // validation for constraint: boolean
        if (!is_null($sumOfLocals) && !is_bool($sumOfLocals)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sumOfLocals)), __LINE__);
        }
        $this->sumOfLocals = $sumOfLocals;
        return $this;
    }
    /**
     * Get trueOD value
     * @return bool|null
     */
    public function getTrueOD()
    {
        return $this->trueOD;
    }
    /**
     * Set trueOD value
     * @param bool $trueOD
     * @return \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType
     */
    public function setTrueOD($trueOD = false)
    {
        // validation for constraint: boolean
        if (!is_null($trueOD) && !is_bool($trueOD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($trueOD)), __LINE__);
        }
        $this->trueOD = $trueOD;
        return $this;
    }
    /**
     * Get longestSegmentFare value
     * @return bool|null
     */
    public function getLongestSegmentFare()
    {
        return $this->longestSegmentFare;
    }
    /**
     * Set longestSegmentFare value
     * @param bool $longestSegmentFare
     * @return \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType
     */
    public function setLongestSegmentFare($longestSegmentFare = false)
    {
        // validation for constraint: boolean
        if (!is_null($longestSegmentFare) && !is_bool($longestSegmentFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($longestSegmentFare)), __LINE__);
        }
        $this->longestSegmentFare = $longestSegmentFare;
        return $this;
    }
    /**
     * Get dominantSegmentFare value
     * @return bool|null
     */
    public function getDominantSegmentFare()
    {
        return $this->dominantSegmentFare;
    }
    /**
     * Set dominantSegmentFare value
     * @param bool $dominantSegmentFare
     * @return \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType
     */
    public function setDominantSegmentFare($dominantSegmentFare = false)
    {
        // validation for constraint: boolean
        if (!is_null($dominantSegmentFare) && !is_bool($dominantSegmentFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dominantSegmentFare)), __LINE__);
        }
        $this->dominantSegmentFare = $dominantSegmentFare;
        return $this;
    }
    /**
     * Get local value
     * @return bool|null
     */
    public function getLocal()
    {
        return $this->local;
    }
    /**
     * Set local value
     * @param bool $local
     * @return \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType
     */
    public function setLocal($local = false)
    {
        // validation for constraint: boolean
        if (!is_null($local) && !is_bool($local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($local)), __LINE__);
        }
        $this->local = $local;
        return $this;
    }
    /**
     * Get financial value
     * @return bool|null
     */
    public function getFinancial()
    {
        return $this->financial;
    }
    /**
     * Set financial value
     * @param bool $financial
     * @return \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType
     */
    public function setFinancial($financial = false)
    {
        // validation for constraint: boolean
        if (!is_null($financial) && !is_bool($financial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($financial)), __LINE__);
        }
        $this->financial = $financial;
        return $this;
    }
    /**
     * Get physical value
     * @return bool|null
     */
    public function getPhysical()
    {
        return $this->physical;
    }
    /**
     * Set physical value
     * @param bool $physical
     * @return \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType
     */
    public function setPhysical($physical = false)
    {
        // validation for constraint: boolean
        if (!is_null($physical) && !is_bool($physical)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($physical)), __LINE__);
        }
        $this->physical = $physical;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType
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
