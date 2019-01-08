<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerCountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the number of travelers of a specific type (e.g. a driver type can be either one of: Adult, YoungDriver, YoungerDriver, or it may be a code that is acceptable to both Trading Partners).
 * @subpackage Structs
 */
class TravelerCountType extends AbstractStructBase
{
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The codeContext
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the source authority for the code.
     * @var string
     */
    public $codeContext;
    /**
     * The URI
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the location of the code table
     * @var string
     */
    public $URI;
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of travelers.
     * @var int
     */
    public $quantity;
    /**
     * Constructor method for TravelerCountType
     * @uses TravelerCountType::setCode()
     * @uses TravelerCountType::setCodeContext()
     * @uses TravelerCountType::setURI()
     * @uses TravelerCountType::setQuantity()
     * @param string $code
     * @param string $codeContext
     * @param string $uRI
     * @param int $quantity
     */
    public function __construct($code = null, $codeContext = null, $uRI = null, $quantity = null)
    {
        $this
            ->setCode($code)
            ->setCodeContext($codeContext)
            ->setURI($uRI)
            ->setQuantity($quantity);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\TravelerCountType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
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
     * @return \Sabre\UpdateReservation\StructType\TravelerCountType
     */
    public function setCodeContext($codeContext = null)
    {
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->codeContext = $codeContext;
        return $this;
    }
    /**
     * Get URI value
     * @return string|null
     */
    public function getURI()
    {
        return $this->URI;
    }
    /**
     * Set URI value
     * @param string $uRI
     * @return \Sabre\UpdateReservation\StructType\TravelerCountType
     */
    public function setURI($uRI = null)
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRI)), __LINE__);
        }
        $this->URI = $uRI;
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \Sabre\UpdateReservation\StructType\TravelerCountType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TravelerCountType
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
