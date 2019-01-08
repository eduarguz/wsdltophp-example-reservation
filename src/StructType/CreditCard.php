<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCard StructType
 * @subpackage Structs
 */
class CreditCard extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The Issuer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Issuer;
    /**
     * The ExpirationMonth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationMonth;
    /**
     * The ExpirationYear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationYear;
    /**
     * The CardHolder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CardHolder
     */
    public $CardHolder;
    /**
     * Constructor method for CreditCard
     * @uses CreditCard::setNumber()
     * @uses CreditCard::setIssuer()
     * @uses CreditCard::setExpirationMonth()
     * @uses CreditCard::setExpirationYear()
     * @uses CreditCard::setCardHolder()
     * @param string $number
     * @param string $issuer
     * @param string $expirationMonth
     * @param string $expirationYear
     * @param \Sabre\UpdateReservation\StructType\CardHolder $cardHolder
     */
    public function __construct($number = null, $issuer = null, $expirationMonth = null, $expirationYear = null, \Sabre\UpdateReservation\StructType\CardHolder $cardHolder = null)
    {
        $this
            ->setNumber($number)
            ->setIssuer($issuer)
            ->setExpirationMonth($expirationMonth)
            ->setExpirationYear($expirationYear)
            ->setCardHolder($cardHolder);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Sabre\UpdateReservation\StructType\CreditCard
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Issuer value
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->Issuer;
    }
    /**
     * Set Issuer value
     * @param string $issuer
     * @return \Sabre\UpdateReservation\StructType\CreditCard
     */
    public function setIssuer($issuer = null)
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuer)), __LINE__);
        }
        $this->Issuer = $issuer;
        return $this;
    }
    /**
     * Get ExpirationMonth value
     * @return string|null
     */
    public function getExpirationMonth()
    {
        return $this->ExpirationMonth;
    }
    /**
     * Set ExpirationMonth value
     * @param string $expirationMonth
     * @return \Sabre\UpdateReservation\StructType\CreditCard
     */
    public function setExpirationMonth($expirationMonth = null)
    {
        // validation for constraint: string
        if (!is_null($expirationMonth) && !is_string($expirationMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationMonth)), __LINE__);
        }
        $this->ExpirationMonth = $expirationMonth;
        return $this;
    }
    /**
     * Get ExpirationYear value
     * @return string|null
     */
    public function getExpirationYear()
    {
        return $this->ExpirationYear;
    }
    /**
     * Set ExpirationYear value
     * @param string $expirationYear
     * @return \Sabre\UpdateReservation\StructType\CreditCard
     */
    public function setExpirationYear($expirationYear = null)
    {
        // validation for constraint: string
        if (!is_null($expirationYear) && !is_string($expirationYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationYear)), __LINE__);
        }
        $this->ExpirationYear = $expirationYear;
        return $this;
    }
    /**
     * Get CardHolder value
     * @return \Sabre\UpdateReservation\StructType\CardHolder|null
     */
    public function getCardHolder()
    {
        return $this->CardHolder;
    }
    /**
     * Set CardHolder value
     * @param \Sabre\UpdateReservation\StructType\CardHolder $cardHolder
     * @return \Sabre\UpdateReservation\StructType\CreditCard
     */
    public function setCardHolder(\Sabre\UpdateReservation\StructType\CardHolder $cardHolder = null)
    {
        $this->CardHolder = $cardHolder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CreditCard
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
