<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorPreferences StructType
 * @subpackage Structs
 */
class VendorPreferences extends AbstractStructBase
{
    /**
     * The VendorPreference
     * Meta informations extracted from the WSDL
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VendorPreference[]
     */
    public $VendorPreference;
    /**
     * The exclude
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $exclude;
    /**
     * Constructor method for VendorPreferences
     * @uses VendorPreferences::setVendorPreference()
     * @uses VendorPreferences::setExclude()
     * @param \Sabre\UpdateReservation\StructType\VendorPreference[] $vendorPreference
     * @param bool $exclude
     */
    public function __construct(array $vendorPreference = array(), $exclude = null)
    {
        $this
            ->setVendorPreference($vendorPreference)
            ->setExclude($exclude);
    }
    /**
     * Get VendorPreference value
     * @return \Sabre\UpdateReservation\StructType\VendorPreference[]|null
     */
    public function getVendorPreference()
    {
        return $this->VendorPreference;
    }
    /**
     * Set VendorPreference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\VendorPreference[] $vendorPreference
     * @return \Sabre\UpdateReservation\StructType\VendorPreferences
     */
    public function setVendorPreference(array $vendorPreference = array())
    {
        foreach ($vendorPreference as $vendorPreferencesVendorPreferenceItem) {
            // validation for constraint: itemType
            if (!$vendorPreferencesVendorPreferenceItem instanceof \Sabre\UpdateReservation\StructType\VendorPreference) {
                throw new \InvalidArgumentException(sprintf('The VendorPreference property can only contain items of \Sabre\UpdateReservation\StructType\VendorPreference, "%s" given', is_object($vendorPreferencesVendorPreferenceItem) ? get_class($vendorPreferencesVendorPreferenceItem) : gettype($vendorPreferencesVendorPreferenceItem)), __LINE__);
            }
        }
        $this->VendorPreference = $vendorPreference;
        return $this;
    }
    /**
     * Add item to VendorPreference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\VendorPreference $item
     * @return \Sabre\UpdateReservation\StructType\VendorPreferences
     */
    public function addToVendorPreference(\Sabre\UpdateReservation\StructType\VendorPreference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\VendorPreference) {
            throw new \InvalidArgumentException(sprintf('The VendorPreference property can only contain items of \Sabre\UpdateReservation\StructType\VendorPreference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VendorPreference[] = $item;
        return $this;
    }
    /**
     * Get exclude value
     * @return bool|null
     */
    public function getExclude()
    {
        return $this->exclude;
    }
    /**
     * Set exclude value
     * @param bool $exclude
     * @return \Sabre\UpdateReservation\StructType\VendorPreferences
     */
    public function setExclude($exclude = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude) && !is_bool($exclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exclude)), __LINE__);
        }
        $this->exclude = $exclude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VendorPreferences
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
