<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeDetails.Misc StructType
 * @subpackage Structs
 */
class FeeDetails_Misc extends AbstractStructBase
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: PRAS code associated to the service or item. Mapped to: SR05_C1_PRAS
     * - use: required
     * - maxLength: 3
     * - minLength: 1
     * @var string
     */
    public $code;
    /**
     * The Base
     * Meta informations extracted from the WSDL
     * - documentation: The base fee amount associated to the item or service which does not include taxes. Mapped to: SR05_C1_BAMT
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amount
     */
    public $Base;
    /**
     * The Equiv
     * Meta informations extracted from the WSDL
     * - documentation: The equivalent or converted fee amount associated to the item or service which does not include taxes. Mapped to: SR05_C1_BAMT
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amount
     */
    public $Equiv;
    /**
     * The TotalTax
     * Meta informations extracted from the WSDL
     * - documentation: The total fee taxes associated to the item or service purchased. Mapped to: SR05_C1_TAMT
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amount
     */
    public $TotalTax;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: The total fee amount associated to the service including taxes. Mapped to: SR05_C1_FAMT
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amount
     */
    public $Total;
    /**
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - documentation: The date the fee and amounts will be effective or can be used for purchase. Mapped to: SR05_C1_EFFD
     * - minOccurs: 0
     * @var string
     */
    public $EffectiveDate;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - documentation: Description of the purchased item or service. Mapped to: SR05_C1_DESC
     * - maxLength: 21
     * - minLength: 1
     * @var string
     */
    public $description;
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of items purchased per PRAS code. Mapped to: SR05_C1_IQTY
     * @var int
     */
    public $quantity;
    /**
     * Constructor method for FeeDetails.Misc
     * @uses FeeDetails_Misc::setCode()
     * @uses FeeDetails_Misc::setBase()
     * @uses FeeDetails_Misc::setEquiv()
     * @uses FeeDetails_Misc::setTotalTax()
     * @uses FeeDetails_Misc::setTotal()
     * @uses FeeDetails_Misc::setEffectiveDate()
     * @uses FeeDetails_Misc::setDescription()
     * @uses FeeDetails_Misc::setQuantity()
     * @param string $code
     * @param \Sabre\UpdateReservation\StructType\Amount $base
     * @param \Sabre\UpdateReservation\StructType\Amount $equiv
     * @param \Sabre\UpdateReservation\StructType\Amount $totalTax
     * @param \Sabre\UpdateReservation\StructType\Amount $total
     * @param string $effectiveDate
     * @param string $description
     * @param int $quantity
     */
    public function __construct($code = null, \Sabre\UpdateReservation\StructType\Amount $base = null, \Sabre\UpdateReservation\StructType\Amount $equiv = null, \Sabre\UpdateReservation\StructType\Amount $totalTax = null, \Sabre\UpdateReservation\StructType\Amount $total = null, $effectiveDate = null, $description = null, $quantity = null)
    {
        $this
            ->setCode($code)
            ->setBase($base)
            ->setEquiv($equiv)
            ->setTotalTax($totalTax)
            ->setTotal($total)
            ->setEffectiveDate($effectiveDate)
            ->setDescription($description)
            ->setQuantity($quantity);
    }
    /**
     * Get code value
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\FeeDetails_Misc
     */
    public function setCode($code = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($code) && strlen($code) > 3) || (is_array($code) && count($code) > 3)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s) at most, "%d" length given', is_scalar($code) ? strlen($code) : count($code)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($code) && strlen($code) < 1) || (is_array($code) && count($code) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get Base value
     * @return \Sabre\UpdateReservation\StructType\Amount|null
     */
    public function getBase()
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param \Sabre\UpdateReservation\StructType\Amount $base
     * @return \Sabre\UpdateReservation\StructType\FeeDetails_Misc
     */
    public function setBase(\Sabre\UpdateReservation\StructType\Amount $base = null)
    {
        $this->Base = $base;
        return $this;
    }
    /**
     * Get Equiv value
     * @return \Sabre\UpdateReservation\StructType\Amount|null
     */
    public function getEquiv()
    {
        return $this->Equiv;
    }
    /**
     * Set Equiv value
     * @param \Sabre\UpdateReservation\StructType\Amount $equiv
     * @return \Sabre\UpdateReservation\StructType\FeeDetails_Misc
     */
    public function setEquiv(\Sabre\UpdateReservation\StructType\Amount $equiv = null)
    {
        $this->Equiv = $equiv;
        return $this;
    }
    /**
     * Get TotalTax value
     * @return \Sabre\UpdateReservation\StructType\Amount|null
     */
    public function getTotalTax()
    {
        return $this->TotalTax;
    }
    /**
     * Set TotalTax value
     * @param \Sabre\UpdateReservation\StructType\Amount $totalTax
     * @return \Sabre\UpdateReservation\StructType\FeeDetails_Misc
     */
    public function setTotalTax(\Sabre\UpdateReservation\StructType\Amount $totalTax = null)
    {
        $this->TotalTax = $totalTax;
        return $this;
    }
    /**
     * Get Total value
     * @return \Sabre\UpdateReservation\StructType\Amount|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \Sabre\UpdateReservation\StructType\Amount $total
     * @return \Sabre\UpdateReservation\StructType\FeeDetails_Misc
     */
    public function setTotal(\Sabre\UpdateReservation\StructType\Amount $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Sabre\UpdateReservation\StructType\FeeDetails_Misc
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Sabre\UpdateReservation\StructType\FeeDetails_Misc
     */
    public function setDescription($description = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($description) && strlen($description) > 21) || (is_array($description) && count($description) > 21)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 21 element(s) or a scalar of 21 character(s) at most, "%d" length given', is_scalar($description) ? strlen($description) : count($description)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($description) && strlen($description) < 1) || (is_array($description) && count($description) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
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
     * @return \Sabre\UpdateReservation\StructType\FeeDetails_Misc
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
     * @return \Sabre\UpdateReservation\StructType\FeeDetails_Misc
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
