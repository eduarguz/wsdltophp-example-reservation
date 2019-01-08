<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Commission StructType
 * @subpackage Structs
 */
class Commission extends AbstractStructBase
{
    /**
     * The Indicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Indicator;
    /**
     * The PerNight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PerNight;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - documentation: "amount" is used to return the commission amount if applicable.
     * - use: optional
     * @var string
     */
    public $amount;
    /**
     * The percent
     * Meta informations extracted from the WSDL
     * - documentation: "percent" is used to return the commission percentage if applicable.
     * - use: optional
     * @var string
     */
    public $percent;
    /**
     * Constructor method for Commission
     * @uses Commission::setIndicator()
     * @uses Commission::setPerNight()
     * @uses Commission::setText()
     * @uses Commission::setAmount()
     * @uses Commission::setPercent()
     * @param string $indicator
     * @param string $perNight
     * @param string $text
     * @param string $amount
     * @param string $percent
     */
    public function __construct($indicator = null, $perNight = null, $text = null, $amount = null, $percent = null)
    {
        $this
            ->setIndicator($indicator)
            ->setPerNight($perNight)
            ->setText($text)
            ->setAmount($amount)
            ->setPercent($percent);
    }
    /**
     * Get Indicator value
     * @return string|null
     */
    public function getIndicator()
    {
        return $this->Indicator;
    }
    /**
     * Set Indicator value
     * @param string $indicator
     * @return \Sabre\UpdateReservation\StructType\Commission
     */
    public function setIndicator($indicator = null)
    {
        // validation for constraint: string
        if (!is_null($indicator) && !is_string($indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicator)), __LINE__);
        }
        $this->Indicator = $indicator;
        return $this;
    }
    /**
     * Get PerNight value
     * @return string|null
     */
    public function getPerNight()
    {
        return $this->PerNight;
    }
    /**
     * Set PerNight value
     * @param string $perNight
     * @return \Sabre\UpdateReservation\StructType\Commission
     */
    public function setPerNight($perNight = null)
    {
        // validation for constraint: string
        if (!is_null($perNight) && !is_string($perNight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($perNight)), __LINE__);
        }
        $this->PerNight = $perNight;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Sabre\UpdateReservation\StructType\Commission
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \Sabre\UpdateReservation\StructType\Commission
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get percent value
     * @return string|null
     */
    public function getPercent()
    {
        return $this->percent;
    }
    /**
     * Set percent value
     * @param string $percent
     * @return \Sabre\UpdateReservation\StructType\Commission
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percent)), __LINE__);
        }
        $this->percent = $percent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Commission
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
