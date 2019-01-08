<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialPrefs StructType
 * @subpackage Structs
 */
class SpecialPrefs extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Text;
    /**
     * The LateDepartureRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $LateDepartureRequired;
    /**
     * Constructor method for SpecialPrefs
     * @uses SpecialPrefs::setText()
     * @uses SpecialPrefs::setLateDepartureRequired()
     * @param string[] $text
     * @param bool $lateDepartureRequired
     */
    public function __construct(array $text = array(), $lateDepartureRequired = null)
    {
        $this
            ->setText($text)
            ->setLateDepartureRequired($lateDepartureRequired);
    }
    /**
     * Get Text value
     * @return string[]|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @throws \InvalidArgumentException
     * @param string[] $text
     * @return \Sabre\UpdateReservation\StructType\SpecialPrefs
     */
    public function setText(array $text = array())
    {
        foreach ($text as $specialPrefsTextItem) {
            // validation for constraint: itemType
            if (!is_string($specialPrefsTextItem)) {
                throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($specialPrefsTextItem) ? get_class($specialPrefsTextItem) : gettype($specialPrefsTextItem)), __LINE__);
            }
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Add item to Text value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\SpecialPrefs
     */
    public function addToText($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }
    /**
     * Get LateDepartureRequired value
     * @return bool|null
     */
    public function getLateDepartureRequired()
    {
        return $this->LateDepartureRequired;
    }
    /**
     * Set LateDepartureRequired value
     * @param bool $lateDepartureRequired
     * @return \Sabre\UpdateReservation\StructType\SpecialPrefs
     */
    public function setLateDepartureRequired($lateDepartureRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($lateDepartureRequired) && !is_bool($lateDepartureRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($lateDepartureRequired)), __LINE__);
        }
        $this->LateDepartureRequired = $lateDepartureRequired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SpecialPrefs
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
