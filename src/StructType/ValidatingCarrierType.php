<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatingCarrierType StructType
 * @subpackage Structs
 */
class ValidatingCarrierType extends AbstractStructBase
{
    /**
     * The Preference
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Preference[]
     */
    public $Preference;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: Validating Carrier code
     * - pattern: [0-9A-Z]{2,3}
     * @var string
     */
    public $code;
    /**
     * Constructor method for ValidatingCarrierType
     * @uses ValidatingCarrierType::setPreference()
     * @uses ValidatingCarrierType::setCode()
     * @param \Sabre\UpdateReservation\StructType\Preference[] $preference
     * @param string $code
     */
    public function __construct(array $preference = array(), $code = null)
    {
        $this
            ->setPreference($preference)
            ->setCode($code);
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
     * @return \Sabre\UpdateReservation\StructType\ValidatingCarrierType
     */
    public function setPreference(array $preference = array())
    {
        foreach ($preference as $validatingCarrierTypePreferenceItem) {
            // validation for constraint: itemType
            if (!$validatingCarrierTypePreferenceItem instanceof \Sabre\UpdateReservation\StructType\Preference) {
                throw new \InvalidArgumentException(sprintf('The Preference property can only contain items of \Sabre\UpdateReservation\StructType\Preference, "%s" given', is_object($validatingCarrierTypePreferenceItem) ? get_class($validatingCarrierTypePreferenceItem) : gettype($validatingCarrierTypePreferenceItem)), __LINE__);
            }
        }
        $this->Preference = $preference;
        return $this;
    }
    /**
     * Add item to Preference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Preference $item
     * @return \Sabre\UpdateReservation\StructType\ValidatingCarrierType
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
     * @return \Sabre\UpdateReservation\StructType\ValidatingCarrierType
     */
    public function setCode($code = null)
    {
        // validation for constraint: pattern
        if (is_scalar($code) && !preg_match('/[0-9A-Z]{2,3}/', $code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]{2,3}", "%s" given', var_export($code, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ValidatingCarrierType
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
