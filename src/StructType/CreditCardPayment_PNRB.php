<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardPayment.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Formats for FOP: * Form of payment B Number - BSP Netherlands only 5-(FOP entry).B(number) 5-CHEQUE.B12345 * add cash FOP 5-CASH * add check FOP 5-CHECK 5-CK 5-CHEQUE * add credit card FOP that generates an approval 5-*(credit card
 * code)(credit card number)‡(2-digit month of exp)(2-digit year of exp) 5-*AX1234567890123456‡XX/XX * suppress credit card number on invoice with form of payment in remarKs 5-*(credit card code)(credit card #)‡(2-digit month of exp)/(2-digit year
 * of ex)-XN 5-*AX1234567890123456‡XX/XX-XN * add credit card form of payment that does not generate an approval 5-(credit card code)(credit card #)‡(2-digit month of exp)/(2-digit year of exp) 5-AX1234567890123456‡XX/XX * add credit card with
 * extended payment 5-*(credit card code)(credit card number)‡(2-digit month of exp)/(2-digit year of exp)*(extendede payment entry if applicable) 5-*AX1234567890123456‡XX/XX*E * add credit card with card security code 5-*(credit card code)(credit
 * card number)‡(2-digit month of exp)/(2-digit year of exp)(*extended payment entry if applicable)‡CSC/(2 letter airline code) 5-*AX1234567890123456‡XX/XX‡1234/AL * add GTR 5-GR‡(GTR entry) 5-GR‡K19876543002 * add GTR when using it as a
 * form of payment for travel on Delta airlines and you issue the ticket electronically 5-GR(one letter followed by up to seven numbers) 5-GRD9999999 * delete form of payment 5(line number)¤ 51¤ * modify FOP 5(line #)¤-(new FOP entry)
 * 51¤-*AX1234567890123456‡XX/XX
 * @subpackage Structs
 */
class CreditCardPayment_PNRB extends Payment_PNRB
{
    /**
     * The CreditCardNumber
     * Meta informations extracted from the WSDL
     * - documentation: do not enter spaces
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardNumber;
    /**
     * The CreditCardCode
     * Meta informations extracted from the WSDL
     * - documentation: the code for the appropriate credit card company | The 2 digit code that identifies the credit card.
     * - minOccurs: 0
     * - union: _PaymentCardType | _PaymentCardType_Other
     * @var string
     */
    public $CreditCardCode;
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
     * The CSC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CSC;
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: 2 to 4 character code for an airline. Note: OTA uses a 3 character field.
     * @var string
     */
    public $AirlineCode;
    /**
     * The RequestApprovalCode
     * Meta informations extracted from the WSDL
     * - documentation: causes credit card form of payment to make a request for approval. The sabre system will request verification of the card and a validation check of the expiration date. this must be set to true for credit card masking to work.
     * - minOccurs: 0
     * @var bool
     */
    public $RequestApprovalCode;
    /**
     * The MonthsExtendedPayments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $MonthsExtendedPayments;
    /**
     * The CardHolderInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CardHolderInfo_PNRB
     */
    public $CardHolderInfo;
    /**
     * The ShortText
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ShortText;
    /**
     * Constructor method for CreditCardPayment.PNRB
     * @uses CreditCardPayment_PNRB::setCreditCardNumber()
     * @uses CreditCardPayment_PNRB::setCreditCardCode()
     * @uses CreditCardPayment_PNRB::setExpirationMonth()
     * @uses CreditCardPayment_PNRB::setExpirationYear()
     * @uses CreditCardPayment_PNRB::setCSC()
     * @uses CreditCardPayment_PNRB::setAirlineCode()
     * @uses CreditCardPayment_PNRB::setRequestApprovalCode()
     * @uses CreditCardPayment_PNRB::setMonthsExtendedPayments()
     * @uses CreditCardPayment_PNRB::setCardHolderInfo()
     * @uses CreditCardPayment_PNRB::setShortText()
     * @param string $creditCardNumber
     * @param string $creditCardCode
     * @param string $expirationMonth
     * @param string $expirationYear
     * @param string $cSC
     * @param string $airlineCode
     * @param bool $requestApprovalCode
     * @param int $monthsExtendedPayments
     * @param \Sabre\UpdateReservation\StructType\CardHolderInfo_PNRB $cardHolderInfo
     * @param string $shortText
     */
    public function __construct($creditCardNumber = null, $creditCardCode = null, $expirationMonth = null, $expirationYear = null, $cSC = null, $airlineCode = null, $requestApprovalCode = null, $monthsExtendedPayments = null, \Sabre\UpdateReservation\StructType\CardHolderInfo_PNRB $cardHolderInfo = null, $shortText = null)
    {
        $this
            ->setCreditCardNumber($creditCardNumber)
            ->setCreditCardCode($creditCardCode)
            ->setExpirationMonth($expirationMonth)
            ->setExpirationYear($expirationYear)
            ->setCSC($cSC)
            ->setAirlineCode($airlineCode)
            ->setRequestApprovalCode($requestApprovalCode)
            ->setMonthsExtendedPayments($monthsExtendedPayments)
            ->setCardHolderInfo($cardHolderInfo)
            ->setShortText($shortText);
    }
    /**
     * Get CreditCardNumber value
     * @return string|null
     */
    public function getCreditCardNumber()
    {
        return $this->CreditCardNumber;
    }
    /**
     * Set CreditCardNumber value
     * @param string $creditCardNumber
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
     */
    public function setCreditCardNumber($creditCardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardNumber) && !is_string($creditCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardNumber)), __LINE__);
        }
        $this->CreditCardNumber = $creditCardNumber;
        return $this;
    }
    /**
     * Get CreditCardCode value
     * @return string|null
     */
    public function getCreditCardCode()
    {
        return $this->CreditCardCode;
    }
    /**
     * Set CreditCardCode value
     * @param string $creditCardCode
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
     */
    public function setCreditCardCode($creditCardCode = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardCode) && !is_string($creditCardCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardCode)), __LINE__);
        }
        $this->CreditCardCode = $creditCardCode;
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
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
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
     * Get CSC value
     * @return string|null
     */
    public function getCSC()
    {
        return $this->CSC;
    }
    /**
     * Set CSC value
     * @param string $cSC
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
     */
    public function setCSC($cSC = null)
    {
        // validation for constraint: string
        if (!is_null($cSC) && !is_string($cSC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cSC)), __LINE__);
        }
        $this->CSC = $cSC;
        return $this;
    }
    /**
     * Get AirlineCode value
     * @return string|null
     */
    public function getAirlineCode()
    {
        return $this->AirlineCode;
    }
    /**
     * Set AirlineCode value
     * @param string $airlineCode
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->AirlineCode = $airlineCode;
        return $this;
    }
    /**
     * Get RequestApprovalCode value
     * @return bool|null
     */
    public function getRequestApprovalCode()
    {
        return $this->RequestApprovalCode;
    }
    /**
     * Set RequestApprovalCode value
     * @param bool $requestApprovalCode
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
     */
    public function setRequestApprovalCode($requestApprovalCode = null)
    {
        // validation for constraint: boolean
        if (!is_null($requestApprovalCode) && !is_bool($requestApprovalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($requestApprovalCode)), __LINE__);
        }
        $this->RequestApprovalCode = $requestApprovalCode;
        return $this;
    }
    /**
     * Get MonthsExtendedPayments value
     * @return int|null
     */
    public function getMonthsExtendedPayments()
    {
        return $this->MonthsExtendedPayments;
    }
    /**
     * Set MonthsExtendedPayments value
     * @param int $monthsExtendedPayments
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
     */
    public function setMonthsExtendedPayments($monthsExtendedPayments = null)
    {
        // validation for constraint: maxInclusive
        if ($monthsExtendedPayments > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $monthsExtendedPayments), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($monthsExtendedPayments < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $monthsExtendedPayments), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($monthsExtendedPayments) && !is_numeric($monthsExtendedPayments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($monthsExtendedPayments)), __LINE__);
        }
        $this->MonthsExtendedPayments = $monthsExtendedPayments;
        return $this;
    }
    /**
     * Get CardHolderInfo value
     * @return \Sabre\UpdateReservation\StructType\CardHolderInfo_PNRB|null
     */
    public function getCardHolderInfo()
    {
        return $this->CardHolderInfo;
    }
    /**
     * Set CardHolderInfo value
     * @param \Sabre\UpdateReservation\StructType\CardHolderInfo_PNRB $cardHolderInfo
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
     */
    public function setCardHolderInfo(\Sabre\UpdateReservation\StructType\CardHolderInfo_PNRB $cardHolderInfo = null)
    {
        $this->CardHolderInfo = $cardHolderInfo;
        return $this;
    }
    /**
     * Get ShortText value
     * @return string|null
     */
    public function getShortText()
    {
        return $this->ShortText;
    }
    /**
     * Set ShortText value
     * @param string $shortText
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
     */
    public function setShortText($shortText = null)
    {
        // validation for constraint: string
        if (!is_null($shortText) && !is_string($shortText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortText)), __LINE__);
        }
        $this->ShortText = $shortText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB
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
