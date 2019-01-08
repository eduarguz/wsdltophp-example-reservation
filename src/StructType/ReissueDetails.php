<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReissueDetails StructType
 * @subpackage Structs
 */
class ReissueDetails extends AbstractStructBase
{
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - documentation: Original/Exchange ticket number Mapped to: DM0Z_38_DACC
     * - minOccurs: 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The BaseFare
     * Meta informations extracted from the WSDL
     * - documentation: The base fee amount associated to the item or service which does not include taxes. Mapped to: SR05_C1_BAMT
     * - minOccurs: 0
     * @var string
     */
    public $BaseFare;
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: The total fee taxes associated to the item or service purchased. Mapped to: SR05_C1_TAMT
     * - minOccurs: 0
     * @var string
     */
    public $TaxAmount;
    /**
     * The AddCollectAmount
     * Meta informations extracted from the WSDL
     * - documentation: Add/Collect Amount Mapped to: DM0Z_C0_GAMT
     * - minOccurs: 0
     * @var string
     */
    public $AddCollectAmount;
    /**
     * Constructor method for ReissueDetails
     * @uses ReissueDetails::setDocumentNumber()
     * @uses ReissueDetails::setBaseFare()
     * @uses ReissueDetails::setTaxAmount()
     * @uses ReissueDetails::setAddCollectAmount()
     * @param string $documentNumber
     * @param string $baseFare
     * @param string $taxAmount
     * @param string $addCollectAmount
     */
    public function __construct($documentNumber = null, $baseFare = null, $taxAmount = null, $addCollectAmount = null)
    {
        $this
            ->setDocumentNumber($documentNumber)
            ->setBaseFare($baseFare)
            ->setTaxAmount($taxAmount)
            ->setAddCollectAmount($addCollectAmount);
    }
    /**
     * Get DocumentNumber value
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $documentNumber
     * @return \Sabre\UpdateReservation\StructType\ReissueDetails
     */
    public function setDocumentNumber($documentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentNumber)), __LINE__);
        }
        $this->DocumentNumber = $documentNumber;
        return $this;
    }
    /**
     * Get BaseFare value
     * @return string|null
     */
    public function getBaseFare()
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param string $baseFare
     * @return \Sabre\UpdateReservation\StructType\ReissueDetails
     */
    public function setBaseFare($baseFare = null)
    {
        // validation for constraint: string
        if (!is_null($baseFare) && !is_string($baseFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baseFare)), __LINE__);
        }
        $this->BaseFare = $baseFare;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return string|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param string $taxAmount
     * @return \Sabre\UpdateReservation\StructType\ReissueDetails
     */
    public function setTaxAmount($taxAmount = null)
    {
        // validation for constraint: string
        if (!is_null($taxAmount) && !is_string($taxAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxAmount)), __LINE__);
        }
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get AddCollectAmount value
     * @return string|null
     */
    public function getAddCollectAmount()
    {
        return $this->AddCollectAmount;
    }
    /**
     * Set AddCollectAmount value
     * @param string $addCollectAmount
     * @return \Sabre\UpdateReservation\StructType\ReissueDetails
     */
    public function setAddCollectAmount($addCollectAmount = null)
    {
        // validation for constraint: string
        if (!is_null($addCollectAmount) && !is_string($addCollectAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addCollectAmount)), __LINE__);
        }
        $this->AddCollectAmount = $addCollectAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ReissueDetails
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
