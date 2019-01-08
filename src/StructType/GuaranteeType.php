<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteeType StructType
 * @subpackage Structs
 */
class GuaranteeType extends AbstractStructBase
{
    /**
     * The GuaranteesAccepted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GuaranteesAccepted
     */
    public $GuaranteesAccepted;
    /**
     * The Deadline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Deadline
     */
    public $Deadline;
    /**
     * The AmountPercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AmountPercent
     */
    public $AmountPercent;
    /**
     * The GuaranteeDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GuaranteeDescription
     */
    public $GuaranteeDescription;
    /**
     * The GuaranteeType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $GuaranteeType;
    /**
     * Constructor method for GuaranteeType
     * @uses GuaranteeType::setGuaranteesAccepted()
     * @uses GuaranteeType::setDeadline()
     * @uses GuaranteeType::setAmountPercent()
     * @uses GuaranteeType::setGuaranteeDescription()
     * @uses GuaranteeType::setGuaranteeType()
     * @param \Sabre\UpdateReservation\StructType\GuaranteesAccepted $guaranteesAccepted
     * @param \Sabre\UpdateReservation\StructType\Deadline $deadline
     * @param \Sabre\UpdateReservation\StructType\AmountPercent $amountPercent
     * @param \Sabre\UpdateReservation\StructType\GuaranteeDescription $guaranteeDescription
     * @param string $guaranteeType
     */
    public function __construct(\Sabre\UpdateReservation\StructType\GuaranteesAccepted $guaranteesAccepted = null, \Sabre\UpdateReservation\StructType\Deadline $deadline = null, \Sabre\UpdateReservation\StructType\AmountPercent $amountPercent = null, \Sabre\UpdateReservation\StructType\GuaranteeDescription $guaranteeDescription = null, $guaranteeType = null)
    {
        $this
            ->setGuaranteesAccepted($guaranteesAccepted)
            ->setDeadline($deadline)
            ->setAmountPercent($amountPercent)
            ->setGuaranteeDescription($guaranteeDescription)
            ->setGuaranteeType($guaranteeType);
    }
    /**
     * Get GuaranteesAccepted value
     * @return \Sabre\UpdateReservation\StructType\GuaranteesAccepted|null
     */
    public function getGuaranteesAccepted()
    {
        return $this->GuaranteesAccepted;
    }
    /**
     * Set GuaranteesAccepted value
     * @param \Sabre\UpdateReservation\StructType\GuaranteesAccepted $guaranteesAccepted
     * @return \Sabre\UpdateReservation\StructType\GuaranteeType
     */
    public function setGuaranteesAccepted(\Sabre\UpdateReservation\StructType\GuaranteesAccepted $guaranteesAccepted = null)
    {
        $this->GuaranteesAccepted = $guaranteesAccepted;
        return $this;
    }
    /**
     * Get Deadline value
     * @return \Sabre\UpdateReservation\StructType\Deadline|null
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }
    /**
     * Set Deadline value
     * @param \Sabre\UpdateReservation\StructType\Deadline $deadline
     * @return \Sabre\UpdateReservation\StructType\GuaranteeType
     */
    public function setDeadline(\Sabre\UpdateReservation\StructType\Deadline $deadline = null)
    {
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Get AmountPercent value
     * @return \Sabre\UpdateReservation\StructType\AmountPercent|null
     */
    public function getAmountPercent()
    {
        return $this->AmountPercent;
    }
    /**
     * Set AmountPercent value
     * @param \Sabre\UpdateReservation\StructType\AmountPercent $amountPercent
     * @return \Sabre\UpdateReservation\StructType\GuaranteeType
     */
    public function setAmountPercent(\Sabre\UpdateReservation\StructType\AmountPercent $amountPercent = null)
    {
        $this->AmountPercent = $amountPercent;
        return $this;
    }
    /**
     * Get GuaranteeDescription value
     * @return \Sabre\UpdateReservation\StructType\GuaranteeDescription|null
     */
    public function getGuaranteeDescription()
    {
        return $this->GuaranteeDescription;
    }
    /**
     * Set GuaranteeDescription value
     * @param \Sabre\UpdateReservation\StructType\GuaranteeDescription $guaranteeDescription
     * @return \Sabre\UpdateReservation\StructType\GuaranteeType
     */
    public function setGuaranteeDescription(\Sabre\UpdateReservation\StructType\GuaranteeDescription $guaranteeDescription = null)
    {
        $this->GuaranteeDescription = $guaranteeDescription;
        return $this;
    }
    /**
     * Get GuaranteeType value
     * @return string|null
     */
    public function getGuaranteeType()
    {
        return $this->GuaranteeType;
    }
    /**
     * Set GuaranteeType value
     * @param string $guaranteeType
     * @return \Sabre\UpdateReservation\StructType\GuaranteeType
     */
    public function setGuaranteeType($guaranteeType = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteeType) && !is_string($guaranteeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteeType)), __LINE__);
        }
        $this->GuaranteeType = $guaranteeType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GuaranteeType
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
