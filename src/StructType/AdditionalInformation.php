<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalInformation StructType
 * @subpackage Structs
 */
class AdditionalInformation extends AbstractStructBase
{
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ConfirmationNumber[]
     */
    public $ConfirmationNumber;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Address
     */
    public $Address;
    /**
     * The ContactNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ContactNumbers
     */
    public $ContactNumbers;
    /**
     * The CancelPenaltyPolicyCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CancelPenaltyPolicyCode;
    /**
     * The CustLoyaltyMembershipID
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CustLoyaltyMembershipID;
    /**
     * The IDNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $IDNumber;
    /**
     * The CorporateIDNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CorporateIDNumber;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Text;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Commission
     */
    public $Commission;
    /**
     * The WrittenConfirmation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WrittenConfirmation;
    /**
     * Constructor method for AdditionalInformation
     * @uses AdditionalInformation::setConfirmationNumber()
     * @uses AdditionalInformation::setAddress()
     * @uses AdditionalInformation::setContactNumbers()
     * @uses AdditionalInformation::setCancelPenaltyPolicyCode()
     * @uses AdditionalInformation::setCustLoyaltyMembershipID()
     * @uses AdditionalInformation::setIDNumber()
     * @uses AdditionalInformation::setCorporateIDNumber()
     * @uses AdditionalInformation::setText()
     * @uses AdditionalInformation::setCommission()
     * @uses AdditionalInformation::setWrittenConfirmation()
     * @param \Sabre\UpdateReservation\StructType\ConfirmationNumber[] $confirmationNumber
     * @param \Sabre\UpdateReservation\StructType\Address $address
     * @param \Sabre\UpdateReservation\StructType\ContactNumbers $contactNumbers
     * @param string[] $cancelPenaltyPolicyCode
     * @param string[] $custLoyaltyMembershipID
     * @param string[] $iDNumber
     * @param string[] $corporateIDNumber
     * @param string[] $text
     * @param \Sabre\UpdateReservation\StructType\Commission $commission
     * @param bool $writtenConfirmation
     */
    public function __construct(array $confirmationNumber = array(), \Sabre\UpdateReservation\StructType\Address $address = null, \Sabre\UpdateReservation\StructType\ContactNumbers $contactNumbers = null, array $cancelPenaltyPolicyCode = array(), array $custLoyaltyMembershipID = array(), array $iDNumber = array(), array $corporateIDNumber = array(), array $text = array(), \Sabre\UpdateReservation\StructType\Commission $commission = null, $writtenConfirmation = null)
    {
        $this
            ->setConfirmationNumber($confirmationNumber)
            ->setAddress($address)
            ->setContactNumbers($contactNumbers)
            ->setCancelPenaltyPolicyCode($cancelPenaltyPolicyCode)
            ->setCustLoyaltyMembershipID($custLoyaltyMembershipID)
            ->setIDNumber($iDNumber)
            ->setCorporateIDNumber($corporateIDNumber)
            ->setText($text)
            ->setCommission($commission)
            ->setWrittenConfirmation($writtenConfirmation);
    }
    /**
     * Get ConfirmationNumber value
     * @return \Sabre\UpdateReservation\StructType\ConfirmationNumber[]|null
     */
    public function getConfirmationNumber()
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ConfirmationNumber[] $confirmationNumber
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function setConfirmationNumber(array $confirmationNumber = array())
    {
        foreach ($confirmationNumber as $additionalInformationConfirmationNumberItem) {
            // validation for constraint: itemType
            if (!$additionalInformationConfirmationNumberItem instanceof \Sabre\UpdateReservation\StructType\ConfirmationNumber) {
                throw new \InvalidArgumentException(sprintf('The ConfirmationNumber property can only contain items of \Sabre\UpdateReservation\StructType\ConfirmationNumber, "%s" given', is_object($additionalInformationConfirmationNumberItem) ? get_class($additionalInformationConfirmationNumberItem) : gettype($additionalInformationConfirmationNumberItem)), __LINE__);
            }
        }
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    /**
     * Add item to ConfirmationNumber value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ConfirmationNumber $item
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function addToConfirmationNumber(\Sabre\UpdateReservation\StructType\ConfirmationNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ConfirmationNumber) {
            throw new \InvalidArgumentException(sprintf('The ConfirmationNumber property can only contain items of \Sabre\UpdateReservation\StructType\ConfirmationNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConfirmationNumber[] = $item;
        return $this;
    }
    /**
     * Get Address value
     * @return \Sabre\UpdateReservation\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Sabre\UpdateReservation\StructType\Address $address
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function setAddress(\Sabre\UpdateReservation\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get ContactNumbers value
     * @return \Sabre\UpdateReservation\StructType\ContactNumbers|null
     */
    public function getContactNumbers()
    {
        return $this->ContactNumbers;
    }
    /**
     * Set ContactNumbers value
     * @param \Sabre\UpdateReservation\StructType\ContactNumbers $contactNumbers
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function setContactNumbers(\Sabre\UpdateReservation\StructType\ContactNumbers $contactNumbers = null)
    {
        $this->ContactNumbers = $contactNumbers;
        return $this;
    }
    /**
     * Get CancelPenaltyPolicyCode value
     * @return string[]|null
     */
    public function getCancelPenaltyPolicyCode()
    {
        return $this->CancelPenaltyPolicyCode;
    }
    /**
     * Set CancelPenaltyPolicyCode value
     * @throws \InvalidArgumentException
     * @param string[] $cancelPenaltyPolicyCode
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function setCancelPenaltyPolicyCode(array $cancelPenaltyPolicyCode = array())
    {
        foreach ($cancelPenaltyPolicyCode as $additionalInformationCancelPenaltyPolicyCodeItem) {
            // validation for constraint: itemType
            if (!is_string($additionalInformationCancelPenaltyPolicyCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The CancelPenaltyPolicyCode property can only contain items of string, "%s" given', is_object($additionalInformationCancelPenaltyPolicyCodeItem) ? get_class($additionalInformationCancelPenaltyPolicyCodeItem) : gettype($additionalInformationCancelPenaltyPolicyCodeItem)), __LINE__);
            }
        }
        $this->CancelPenaltyPolicyCode = $cancelPenaltyPolicyCode;
        return $this;
    }
    /**
     * Add item to CancelPenaltyPolicyCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function addToCancelPenaltyPolicyCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CancelPenaltyPolicyCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelPenaltyPolicyCode[] = $item;
        return $this;
    }
    /**
     * Get CustLoyaltyMembershipID value
     * @return string[]|null
     */
    public function getCustLoyaltyMembershipID()
    {
        return $this->CustLoyaltyMembershipID;
    }
    /**
     * Set CustLoyaltyMembershipID value
     * @throws \InvalidArgumentException
     * @param string[] $custLoyaltyMembershipID
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function setCustLoyaltyMembershipID(array $custLoyaltyMembershipID = array())
    {
        foreach ($custLoyaltyMembershipID as $additionalInformationCustLoyaltyMembershipIDItem) {
            // validation for constraint: itemType
            if (!is_string($additionalInformationCustLoyaltyMembershipIDItem)) {
                throw new \InvalidArgumentException(sprintf('The CustLoyaltyMembershipID property can only contain items of string, "%s" given', is_object($additionalInformationCustLoyaltyMembershipIDItem) ? get_class($additionalInformationCustLoyaltyMembershipIDItem) : gettype($additionalInformationCustLoyaltyMembershipIDItem)), __LINE__);
            }
        }
        $this->CustLoyaltyMembershipID = $custLoyaltyMembershipID;
        return $this;
    }
    /**
     * Add item to CustLoyaltyMembershipID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function addToCustLoyaltyMembershipID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CustLoyaltyMembershipID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustLoyaltyMembershipID[] = $item;
        return $this;
    }
    /**
     * Get IDNumber value
     * @return string[]|null
     */
    public function getIDNumber()
    {
        return $this->IDNumber;
    }
    /**
     * Set IDNumber value
     * @throws \InvalidArgumentException
     * @param string[] $iDNumber
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function setIDNumber(array $iDNumber = array())
    {
        foreach ($iDNumber as $additionalInformationIDNumberItem) {
            // validation for constraint: itemType
            if (!is_string($additionalInformationIDNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The IDNumber property can only contain items of string, "%s" given', is_object($additionalInformationIDNumberItem) ? get_class($additionalInformationIDNumberItem) : gettype($additionalInformationIDNumberItem)), __LINE__);
            }
        }
        $this->IDNumber = $iDNumber;
        return $this;
    }
    /**
     * Add item to IDNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function addToIDNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The IDNumber property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->IDNumber[] = $item;
        return $this;
    }
    /**
     * Get CorporateIDNumber value
     * @return string[]|null
     */
    public function getCorporateIDNumber()
    {
        return $this->CorporateIDNumber;
    }
    /**
     * Set CorporateIDNumber value
     * @throws \InvalidArgumentException
     * @param string[] $corporateIDNumber
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function setCorporateIDNumber(array $corporateIDNumber = array())
    {
        foreach ($corporateIDNumber as $additionalInformationCorporateIDNumberItem) {
            // validation for constraint: itemType
            if (!is_string($additionalInformationCorporateIDNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The CorporateIDNumber property can only contain items of string, "%s" given', is_object($additionalInformationCorporateIDNumberItem) ? get_class($additionalInformationCorporateIDNumberItem) : gettype($additionalInformationCorporateIDNumberItem)), __LINE__);
            }
        }
        $this->CorporateIDNumber = $corporateIDNumber;
        return $this;
    }
    /**
     * Add item to CorporateIDNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function addToCorporateIDNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CorporateIDNumber property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CorporateIDNumber[] = $item;
        return $this;
    }
    /**
     * Get Text value
     * @return string[]|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @throws \InvalidArgumentException
     * @param string[] $text
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function setText(array $text = array())
    {
        foreach ($text as $additionalInformationTextItem) {
            // validation for constraint: itemType
            if (!is_string($additionalInformationTextItem)) {
                throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($additionalInformationTextItem) ? get_class($additionalInformationTextItem) : gettype($additionalInformationTextItem)), __LINE__);
            }
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Add item to Text value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function addToText($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }
    /**
     * Get Commission value
     * @return \Sabre\UpdateReservation\StructType\Commission|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Sabre\UpdateReservation\StructType\Commission $commission
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function setCommission(\Sabre\UpdateReservation\StructType\Commission $commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get WrittenConfirmation value
     * @return bool|null
     */
    public function getWrittenConfirmation()
    {
        return $this->WrittenConfirmation;
    }
    /**
     * Set WrittenConfirmation value
     * @param bool $writtenConfirmation
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public function setWrittenConfirmation($writtenConfirmation = null)
    {
        // validation for constraint: boolean
        if (!is_null($writtenConfirmation) && !is_bool($writtenConfirmation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($writtenConfirmation)), __LINE__);
        }
        $this->WrittenConfirmation = $writtenConfirmation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation
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
