<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CorporateID.PNRB StructType
 * @subpackage Structs
 */
class CorporateID_PNRB extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The PrimeHost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PrimeHost;
    /**
     * The Prefix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Prefix;
    /**
     * Constructor method for CorporateID.PNRB
     * @uses CorporateID_PNRB::setNumber()
     * @uses CorporateID_PNRB::setName()
     * @uses CorporateID_PNRB::setPrimeHost()
     * @uses CorporateID_PNRB::setPrefix()
     * @param string $number
     * @param string $name
     * @param string $primeHost
     * @param string $prefix
     */
    public function __construct($number = null, $name = null, $primeHost = null, $prefix = null)
    {
        $this
            ->setNumber($number)
            ->setName($name)
            ->setPrimeHost($primeHost)
            ->setPrefix($prefix);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Sabre\UpdateReservation\StructType\CorporateID_PNRB
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\CorporateID_PNRB
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get PrimeHost value
     * @return string|null
     */
    public function getPrimeHost()
    {
        return $this->PrimeHost;
    }
    /**
     * Set PrimeHost value
     * @param string $primeHost
     * @return \Sabre\UpdateReservation\StructType\CorporateID_PNRB
     */
    public function setPrimeHost($primeHost = null)
    {
        // validation for constraint: string
        if (!is_null($primeHost) && !is_string($primeHost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primeHost)), __LINE__);
        }
        $this->PrimeHost = $primeHost;
        return $this;
    }
    /**
     * Get Prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->Prefix;
    }
    /**
     * Set Prefix value
     * @param string $prefix
     * @return \Sabre\UpdateReservation\StructType\CorporateID_PNRB
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->Prefix = $prefix;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CorporateID_PNRB
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
