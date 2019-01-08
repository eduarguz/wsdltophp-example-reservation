<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTHSFOPMessage.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: 3 command process: #1 - Send form of payment format 3OTHS(opt seg #)/(credit card code)/(credit card #)EXP (2 # exp month) (last 2 #'s exp year) 3OTHS1/AX11428755558239001EXP 12 07 #2 - send cardholder name as shown on the card
 * format 3OTHS(opt seg #)/CH (card holder name) 3OTHS/CH ALLAN JACKSON #3 - send free text remarks that you have read contract of carriage information to passenger format 3OTHS(opt seg #)/(free text) 3OTHS/PAX AGREES TO OPERATOR PARTICIPANT CONTRACT
 * @subpackage Structs
 */
class OTHSFOPMessage_PNRB extends AbstractStructBase
{
    /**
     * The CreditCardCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The 2 digit code that identifies the credit card.
     * - union: _PaymentCardType | _PaymentCardType_Other
     * @var string
     */
    public $CreditCardCode;
    /**
     * The CreditCardNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardNumber;
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
     * The CardHolderName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderName;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for OTHSFOPMessage.PNRB
     * @uses OTHSFOPMessage_PNRB::setCreditCardCode()
     * @uses OTHSFOPMessage_PNRB::setCreditCardNumber()
     * @uses OTHSFOPMessage_PNRB::setExpirationMonth()
     * @uses OTHSFOPMessage_PNRB::setExpirationYear()
     * @uses OTHSFOPMessage_PNRB::setCardHolderName()
     * @uses OTHSFOPMessage_PNRB::setComment()
     * @uses OTHSFOPMessage_PNRB::setId()
     * @uses OTHSFOPMessage_PNRB::setOp()
     * @param string $creditCardCode
     * @param string $creditCardNumber
     * @param string $expirationMonth
     * @param string $expirationYear
     * @param string $cardHolderName
     * @param string $comment
     * @param string $id
     * @param string $op
     */
    public function __construct($creditCardCode = null, $creditCardNumber = null, $expirationMonth = null, $expirationYear = null, $cardHolderName = null, $comment = null, $id = null, $op = null)
    {
        $this
            ->setCreditCardCode($creditCardCode)
            ->setCreditCardNumber($creditCardNumber)
            ->setExpirationMonth($expirationMonth)
            ->setExpirationYear($expirationYear)
            ->setCardHolderName($cardHolderName)
            ->setComment($comment)
            ->setId($id)
            ->setOp($op);
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
     * @return \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB
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
     * Get CardHolderName value
     * @return string|null
     */
    public function getCardHolderName()
    {
        return $this->CardHolderName;
    }
    /**
     * Set CardHolderName value
     * @param string $cardHolderName
     * @return \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB
     */
    public function setCardHolderName($cardHolderName = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderName) && !is_string($cardHolderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderName)), __LINE__);
        }
        $this->CardHolderName = $cardHolderName;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB
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
