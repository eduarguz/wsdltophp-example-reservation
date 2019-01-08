<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Profiles.PNRB StructType
 * @subpackage Structs
 */
class Profiles_PNRB extends AbstractStructBase
{
    /**
     * The Profile
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Profile[]
     */
    public $Profile;
    /**
     * Constructor method for Profiles.PNRB
     * @uses Profiles_PNRB::setProfile()
     * @param \Sabre\UpdateReservation\StructType\Profile[] $profile
     */
    public function __construct(array $profile = array())
    {
        $this
            ->setProfile($profile);
    }
    /**
     * Get Profile value
     * @return \Sabre\UpdateReservation\StructType\Profile[]|null
     */
    public function getProfile()
    {
        return $this->Profile;
    }
    /**
     * Set Profile value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Profile[] $profile
     * @return \Sabre\UpdateReservation\StructType\Profiles_PNRB
     */
    public function setProfile(array $profile = array())
    {
        foreach ($profile as $profiles_PNRBProfileItem) {
            // validation for constraint: itemType
            if (!$profiles_PNRBProfileItem instanceof \Sabre\UpdateReservation\StructType\Profile) {
                throw new \InvalidArgumentException(sprintf('The Profile property can only contain items of \Sabre\UpdateReservation\StructType\Profile, "%s" given', is_object($profiles_PNRBProfileItem) ? get_class($profiles_PNRBProfileItem) : gettype($profiles_PNRBProfileItem)), __LINE__);
            }
        }
        $this->Profile = $profile;
        return $this;
    }
    /**
     * Add item to Profile value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Profile $item
     * @return \Sabre\UpdateReservation\StructType\Profiles_PNRB
     */
    public function addToProfile(\Sabre\UpdateReservation\StructType\Profile $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Profile) {
            throw new \InvalidArgumentException(sprintf('The Profile property can only contain items of \Sabre\UpdateReservation\StructType\Profile, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Profile[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Profiles_PNRB
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
