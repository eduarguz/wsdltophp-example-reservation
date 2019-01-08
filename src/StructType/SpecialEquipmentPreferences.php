<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialEquipmentPreferences StructType
 * @subpackage Structs
 */
class SpecialEquipmentPreferences extends AbstractStructBase
{
    /**
     * The Preference
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * @var \Sabre\UpdateReservation\StructType\Preference[]
     */
    public $Preference;
    /**
     * Constructor method for SpecialEquipmentPreferences
     * @uses SpecialEquipmentPreferences::setPreference()
     * @param \Sabre\UpdateReservation\StructType\Preference[] $preference
     */
    public function __construct(array $preference = array())
    {
        $this
            ->setPreference($preference);
    }
    /**
     * Get Preference value
     * @return \Sabre\UpdateReservation\StructType\Preference[]|null
     */
    public function getPreference()
    {
        return $this->Preference;
    }
    /**
     * Set Preference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Preference[] $preference
     * @return \Sabre\UpdateReservation\StructType\SpecialEquipmentPreferences
     */
    public function setPreference(array $preference = array())
    {
        foreach ($preference as $specialEquipmentPreferencesPreferenceItem) {
            // validation for constraint: itemType
            if (!$specialEquipmentPreferencesPreferenceItem instanceof \Sabre\UpdateReservation\StructType\Preference) {
                throw new \InvalidArgumentException(sprintf('The Preference property can only contain items of \Sabre\UpdateReservation\StructType\Preference, "%s" given', is_object($specialEquipmentPreferencesPreferenceItem) ? get_class($specialEquipmentPreferencesPreferenceItem) : gettype($specialEquipmentPreferencesPreferenceItem)), __LINE__);
            }
        }
        $this->Preference = $preference;
        return $this;
    }
    /**
     * Add item to Preference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Preference $item
     * @return \Sabre\UpdateReservation\StructType\SpecialEquipmentPreferences
     */
    public function addToPreference(\Sabre\UpdateReservation\StructType\Preference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Preference) {
            throw new \InvalidArgumentException(sprintf('The Preference property can only contain items of \Sabre\UpdateReservation\StructType\Preference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Preference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SpecialEquipmentPreferences
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
