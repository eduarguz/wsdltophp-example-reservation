<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Airport StructType
 * Meta informations extracted from the WSDL
 * - pattern: [A-Z0-9]{3,5}
 * @subpackage Structs
 */
class Airport extends AbstractStructBase
{
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z0-9]{3,5}
     * @var string
     */
    public $_;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $name;
    /**
     * The codeContext
     * Meta informations extracted from the WSDL
     * - default: IATA
     * - maxLength: 32
     * - minLength: 1
     * @var string
     */
    public $codeContext;
    /**
     * The terminal
     * Meta informations extracted from the WSDL
     * - maxLength: 16
     * - minLength: 1
     * @var string
     */
    public $terminal;
    /**
     * The gate
     * Meta informations extracted from the WSDL
     * - maxLength: 16
     * - minLength: 1
     * @var string
     */
    public $gate;
    /**
     * Constructor method for Airport
     * @uses Airport::set_()
     * @uses Airport::setName()
     * @uses Airport::setCodeContext()
     * @uses Airport::setTerminal()
     * @uses Airport::setGate()
     * @param string $_
     * @param string $name
     * @param string $codeContext
     * @param string $terminal
     * @param string $gate
     */
    public function __construct($_ = null, $name = null, $codeContext = 'IATA', $terminal = null, $gate = null)
    {
        $this
            ->set_($_)
            ->setName($name)
            ->setCodeContext($codeContext)
            ->setTerminal($terminal)
            ->setGate($gate);
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
     * @return \Sabre\UpdateReservation\StructType\Airport
     */
    public function set_($_ = null)
    {
        // validation for constraint: pattern
        if (is_scalar($_) && !preg_match('/[A-Z0-9]{3,5}/', $_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9]{3,5}", "%s" given', var_export($_, true)), __LINE__);
        }
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
     * @return \Sabre\UpdateReservation\StructType\Airport
     */
    public function setName($name = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name) && strlen($name) > 100) || (is_array($name) && count($name) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($name) ? strlen($name) : count($name)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($name) && strlen($name) < 1) || (is_array($name) && count($name) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get codeContext value
     * @return string|null
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }
    /**
     * Set codeContext value
     * @param string $codeContext
     * @return \Sabre\UpdateReservation\StructType\Airport
     */
    public function setCodeContext($codeContext = 'IATA')
    {
        // validation for constraint: maxLength
        if ((is_scalar($codeContext) && strlen($codeContext) > 32) || (is_array($codeContext) && count($codeContext) > 32)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 32 element(s) or a scalar of 32 character(s) at most, "%d" length given', is_scalar($codeContext) ? strlen($codeContext) : count($codeContext)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($codeContext) && strlen($codeContext) < 1) || (is_array($codeContext) && count($codeContext) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->codeContext = $codeContext;
        return $this;
    }
    /**
     * Get terminal value
     * @return string|null
     */
    public function getTerminal()
    {
        return $this->terminal;
    }
    /**
     * Set terminal value
     * @param string $terminal
     * @return \Sabre\UpdateReservation\StructType\Airport
     */
    public function setTerminal($terminal = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($terminal) && strlen($terminal) > 16) || (is_array($terminal) && count($terminal) > 16)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 16 element(s) or a scalar of 16 character(s) at most, "%d" length given', is_scalar($terminal) ? strlen($terminal) : count($terminal)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($terminal) && strlen($terminal) < 1) || (is_array($terminal) && count($terminal) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($terminal) && !is_string($terminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminal)), __LINE__);
        }
        $this->terminal = $terminal;
        return $this;
    }
    /**
     * Get gate value
     * @return string|null
     */
    public function getGate()
    {
        return $this->gate;
    }
    /**
     * Set gate value
     * @param string $gate
     * @return \Sabre\UpdateReservation\StructType\Airport
     */
    public function setGate($gate = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($gate) && strlen($gate) > 16) || (is_array($gate) && count($gate) > 16)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 16 element(s) or a scalar of 16 character(s) at most, "%d" length given', is_scalar($gate) ? strlen($gate) : count($gate)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($gate) && strlen($gate) < 1) || (is_array($gate) && count($gate) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($gate) && !is_string($gate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gate)), __LINE__);
        }
        $this->gate = $gate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Airport
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
