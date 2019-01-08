<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePreferences StructType
 * @subpackage Structs
 */
class VehiclePreferences extends AbstractStructBase
{
    /**
     * The Preference
     * @var \Sabre\UpdateReservation\StructType\Preference
     */
    public $Preference;
    /**
     * Constructor method for VehiclePreferences
     * @uses VehiclePreferences::setPreference()
     * @param \Sabre\UpdateReservation\StructType\Preference $preference
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Preference $preference = null)
    {
        $this
            ->setPreference($preference);
    }
    /**
     * Get Preference value
     * @return \Sabre\UpdateReservation\StructType\Preference|null
     */
    public function getPreference()
    {
        return $this->Preference;
    }
    /**
     * Set Preference value
     * @param \Sabre\UpdateReservation\StructType\Preference $preference
     * @return \Sabre\UpdateReservation\StructType\VehiclePreferences
     */
    public function setPreference(\Sabre\UpdateReservation\StructType\Preference $preference = null)
    {
        $this->Preference = $preference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VehiclePreferences
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
