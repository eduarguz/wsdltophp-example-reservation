<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NegotiatedFareCodeType StructType
 * @subpackage Structs
 */
class NegotiatedFareCodeType extends AbstractStructBase
{
    /**
     * The Supplier
     * Meta informations extracted from the WSDL
     * - documentation: This element indicates the supplier associated with a negotiated fare code.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Supplier;
    /**
     * The secondaryCode
     * Meta informations extracted from the WSDL
     * - documentation: An additional attribute to allow flexibility for particular organizations who require an additional code.
     * @var string
     */
    public $secondaryCode;
    /**
     * The supplierCode
     * Meta informations extracted from the WSDL
     * - documentation: An additional attribute to allow flexibility for particular organizations who require an additional supplier code.
     * @var string
     */
    public $supplierCode;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     * @var string
     */
    public $code;
    /**
     * The codeContext
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the source authority for the code.
     * @var string
     */
    public $codeContext;
    /**
     * The URI
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the location of the code table
     * @var string
     */
    public $URI;
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of items that are identified by the Code (e.g., 2 adults, 5 first class seats).
     * @var int
     */
    public $quantity;
    /**
     * Constructor method for NegotiatedFareCodeType
     * @uses NegotiatedFareCodeType::setSupplier()
     * @uses NegotiatedFareCodeType::setSecondaryCode()
     * @uses NegotiatedFareCodeType::setSupplierCode()
     * @uses NegotiatedFareCodeType::setCode()
     * @uses NegotiatedFareCodeType::setCodeContext()
     * @uses NegotiatedFareCodeType::setURI()
     * @uses NegotiatedFareCodeType::setQuantity()
     * @param string[] $supplier
     * @param string $secondaryCode
     * @param string $supplierCode
     * @param string $code
     * @param string $codeContext
     * @param string $uRI
     * @param int $quantity
     */
    public function __construct(array $supplier = array(), $secondaryCode = null, $supplierCode = null, $code = null, $codeContext = null, $uRI = null, $quantity = null)
    {
        $this
            ->setSupplier($supplier)
            ->setSecondaryCode($secondaryCode)
            ->setSupplierCode($supplierCode)
            ->setCode($code)
            ->setCodeContext($codeContext)
            ->setURI($uRI)
            ->setQuantity($quantity);
    }
    /**
     * Get Supplier value
     * @return string[]|null
     */
    public function getSupplier()
    {
        return $this->Supplier;
    }
    /**
     * Set Supplier value
     * @throws \InvalidArgumentException
     * @param string[] $supplier
     * @return \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType
     */
    public function setSupplier(array $supplier = array())
    {
        foreach ($supplier as $negotiatedFareCodeTypeSupplierItem) {
            // validation for constraint: itemType
            if (!is_string($negotiatedFareCodeTypeSupplierItem)) {
                throw new \InvalidArgumentException(sprintf('The Supplier property can only contain items of string, "%s" given', is_object($negotiatedFareCodeTypeSupplierItem) ? get_class($negotiatedFareCodeTypeSupplierItem) : gettype($negotiatedFareCodeTypeSupplierItem)), __LINE__);
            }
        }
        $this->Supplier = $supplier;
        return $this;
    }
    /**
     * Add item to Supplier value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType
     */
    public function addToSupplier($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Supplier property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Supplier[] = $item;
        return $this;
    }
    /**
     * Get secondaryCode value
     * @return string|null
     */
    public function getSecondaryCode()
    {
        return $this->secondaryCode;
    }
    /**
     * Set secondaryCode value
     * @param string $secondaryCode
     * @return \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType
     */
    public function setSecondaryCode($secondaryCode = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryCode) && !is_string($secondaryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryCode)), __LINE__);
        }
        $this->secondaryCode = $secondaryCode;
        return $this;
    }
    /**
     * Get supplierCode value
     * @return string|null
     */
    public function getSupplierCode()
    {
        return $this->supplierCode;
    }
    /**
     * Set supplierCode value
     * @param string $supplierCode
     * @return \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType
     */
    public function setSupplierCode($supplierCode = null)
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierCode)), __LINE__);
        }
        $this->supplierCode = $supplierCode;
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
     * @return \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType
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
     * @return \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType
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
     * Get URI value
     * @return string|null
     */
    public function getURI()
    {
        return $this->URI;
    }
    /**
     * Set URI value
     * @param string $uRI
     * @return \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType
     */
    public function setURI($uRI = null)
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRI)), __LINE__);
        }
        $this->URI = $uRI;
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType
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
