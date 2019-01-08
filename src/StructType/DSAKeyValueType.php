<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DSAKeyValueType StructType
 * @subpackage Structs
 */
class DSAKeyValueType extends AbstractStructBase
{
    /**
     * The P
     * @var string
     */
    public $P;
    /**
     * The Q
     * @var string
     */
    public $Q;
    /**
     * The G
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $G;
    /**
     * The Y
     * @var string
     */
    public $Y;
    /**
     * The J
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $J;
    /**
     * The Seed
     * @var string
     */
    public $Seed;
    /**
     * The PgenCounter
     * @var string
     */
    public $PgenCounter;
    /**
     * Constructor method for DSAKeyValueType
     * @uses DSAKeyValueType::setP()
     * @uses DSAKeyValueType::setQ()
     * @uses DSAKeyValueType::setG()
     * @uses DSAKeyValueType::setY()
     * @uses DSAKeyValueType::setJ()
     * @uses DSAKeyValueType::setSeed()
     * @uses DSAKeyValueType::setPgenCounter()
     * @param string $p
     * @param string $q
     * @param string $g
     * @param string $y
     * @param string $j
     * @param string $seed
     * @param string $pgenCounter
     */
    public function __construct($p = null, $q = null, $g = null, $y = null, $j = null, $seed = null, $pgenCounter = null)
    {
        $this
            ->setP($p)
            ->setQ($q)
            ->setG($g)
            ->setY($y)
            ->setJ($j)
            ->setSeed($seed)
            ->setPgenCounter($pgenCounter);
    }
    /**
     * Get P value
     * @return string|null
     */
    public function getP()
    {
        return $this->P;
    }
    /**
     * Set P value
     * @param string $p
     * @return \Sabre\UpdateReservation\StructType\DSAKeyValueType
     */
    public function setP($p = null)
    {
        // validation for constraint: string
        if (!is_null($p) && !is_string($p)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($p)), __LINE__);
        }
        $this->P = $p;
        return $this;
    }
    /**
     * Get Q value
     * @return string|null
     */
    public function getQ()
    {
        return $this->Q;
    }
    /**
     * Set Q value
     * @param string $q
     * @return \Sabre\UpdateReservation\StructType\DSAKeyValueType
     */
    public function setQ($q = null)
    {
        // validation for constraint: string
        if (!is_null($q) && !is_string($q)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($q)), __LINE__);
        }
        $this->Q = $q;
        return $this;
    }
    /**
     * Get G value
     * @return string|null
     */
    public function getG()
    {
        return $this->G;
    }
    /**
     * Set G value
     * @param string $g
     * @return \Sabre\UpdateReservation\StructType\DSAKeyValueType
     */
    public function setG($g = null)
    {
        // validation for constraint: string
        if (!is_null($g) && !is_string($g)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($g)), __LINE__);
        }
        $this->G = $g;
        return $this;
    }
    /**
     * Get Y value
     * @return string|null
     */
    public function getY()
    {
        return $this->Y;
    }
    /**
     * Set Y value
     * @param string $y
     * @return \Sabre\UpdateReservation\StructType\DSAKeyValueType
     */
    public function setY($y = null)
    {
        // validation for constraint: string
        if (!is_null($y) && !is_string($y)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($y)), __LINE__);
        }
        $this->Y = $y;
        return $this;
    }
    /**
     * Get J value
     * @return string|null
     */
    public function getJ()
    {
        return $this->J;
    }
    /**
     * Set J value
     * @param string $j
     * @return \Sabre\UpdateReservation\StructType\DSAKeyValueType
     */
    public function setJ($j = null)
    {
        // validation for constraint: string
        if (!is_null($j) && !is_string($j)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($j)), __LINE__);
        }
        $this->J = $j;
        return $this;
    }
    /**
     * Get Seed value
     * @return string|null
     */
    public function getSeed()
    {
        return $this->Seed;
    }
    /**
     * Set Seed value
     * @param string $seed
     * @return \Sabre\UpdateReservation\StructType\DSAKeyValueType
     */
    public function setSeed($seed = null)
    {
        // validation for constraint: string
        if (!is_null($seed) && !is_string($seed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seed)), __LINE__);
        }
        $this->Seed = $seed;
        return $this;
    }
    /**
     * Get PgenCounter value
     * @return string|null
     */
    public function getPgenCounter()
    {
        return $this->PgenCounter;
    }
    /**
     * Set PgenCounter value
     * @param string $pgenCounter
     * @return \Sabre\UpdateReservation\StructType\DSAKeyValueType
     */
    public function setPgenCounter($pgenCounter = null)
    {
        // validation for constraint: string
        if (!is_null($pgenCounter) && !is_string($pgenCounter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pgenCounter)), __LINE__);
        }
        $this->PgenCounter = $pgenCounter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DSAKeyValueType
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
