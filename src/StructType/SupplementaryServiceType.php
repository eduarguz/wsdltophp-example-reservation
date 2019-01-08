<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplementaryServiceType StructType
 * @subpackage Structs
 */
class SupplementaryServiceType extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\Description[]
     */
    public $Description;
    /**
     * The Charges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ChargesType
     */
    public $Charges;
    /**
     * The PassengerReferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerReferences
     */
    public $PassengerReferences;
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
     * Constructor method for SupplementaryServiceType
     * @uses SupplementaryServiceType::setDescription()
     * @uses SupplementaryServiceType::setCharges()
     * @uses SupplementaryServiceType::setPassengerReferences()
     * @uses SupplementaryServiceType::setType()
     * @uses SupplementaryServiceType::setCode()
     * @uses SupplementaryServiceType::setCodeContext()
     * @param \Sabre\UpdateReservation\StructType\Description[] $description
     * @param \Sabre\UpdateReservation\StructType\ChargesType $charges
     * @param \Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences
     * @param string $type
     * @param string $code
     * @param string $codeContext
     */
    public function __construct(array $description = array(), \Sabre\UpdateReservation\StructType\ChargesType $charges = null, \Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences = null, $type = null, $code = null, $codeContext = null)
    {
        $this
            ->setDescription($description)
            ->setCharges($charges)
            ->setPassengerReferences($passengerReferences)
            ->setType($type)
            ->setCode($code)
            ->setCodeContext($codeContext);
    }
    /**
     * Get Description value
     * @return \Sabre\UpdateReservation\StructType\Description[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Description[] $description
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServiceType
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $supplementaryServiceTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$supplementaryServiceTypeDescriptionItem instanceof \Sabre\UpdateReservation\StructType\Description) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Sabre\UpdateReservation\StructType\Description, "%s" given', is_object($supplementaryServiceTypeDescriptionItem) ? get_class($supplementaryServiceTypeDescriptionItem) : gettype($supplementaryServiceTypeDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Description $item
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServiceType
     */
    public function addToDescription(\Sabre\UpdateReservation\StructType\Description $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Description) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Sabre\UpdateReservation\StructType\Description, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get Charges value
     * @return \Sabre\UpdateReservation\StructType\ChargesType|null
     */
    public function getCharges()
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @param \Sabre\UpdateReservation\StructType\ChargesType $charges
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServiceType
     */
    public function setCharges(\Sabre\UpdateReservation\StructType\ChargesType $charges = null)
    {
        $this->Charges = $charges;
        return $this;
    }
    /**
     * Get PassengerReferences value
     * @return \Sabre\UpdateReservation\StructType\PassengerReferences|null
     */
    public function getPassengerReferences()
    {
        return $this->PassengerReferences;
    }
    /**
     * Set PassengerReferences value
     * @param \Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServiceType
     */
    public function setPassengerReferences(\Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences = null)
    {
        $this->PassengerReferences = $passengerReferences;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServiceType
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
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServiceType
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
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServiceType
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
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServiceType
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
