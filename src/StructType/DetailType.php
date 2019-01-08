<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailType StructType
 * @subpackage Structs
 */
class DetailType extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The codeContext
     * @var string
     */
    public $codeContext;
    /**
     * Constructor method for DetailType
     * @uses DetailType::setType()
     * @uses DetailType::setCode()
     * @uses DetailType::setCodeContext()
     * @param string $type
     * @param string $code
     * @param string $codeContext
     */
    public function __construct($type = null, $code = null, $codeContext = null)
    {
        $this
            ->setType($type)
            ->setCode($code)
            ->setCodeContext($codeContext);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\DetailType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\DetailType
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
     * @return \Sabre\UpdateReservation\StructType\DetailType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DetailType
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
