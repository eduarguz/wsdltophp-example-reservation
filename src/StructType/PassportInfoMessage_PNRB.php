<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassportInfoMessage.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: limited to 57 chars optional fields are: passport number, country of issue, date of birth, name field, gender field, primary passport holder inidicator and name number
 * @subpackage Structs
 */
class PassportInfoMessage_PNRB extends AbstractStructBase
{
    /**
     * The PassportNumber
     * Meta informations extracted from the WSDL
     * - documentation: Number issued for the indicated document.
     * - minOccurs: 0
     * @var string
     */
    public $PassportNumber;
    /**
     * The CountryOfIssue
     * Meta informations extracted from the WSDL
     * - documentation: Country code of the government that issued the indicated document.
     * - minOccurs: 0
     * @var string
     */
    public $CountryOfIssue;
    /**
     * The ExpireDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpireDate;
    /**
     * The DateOfBirth
     * Meta informations extracted from the WSDL
     * - documentation: format ddmmmyy
     * - minOccurs: 0
     * @var string
     */
    public $DateOfBirth;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - documentation: Surname of the passenger for whom the SSR is being sent. May be different than the passenger who is the document holder in the case of an infant.
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - documentation: First name of the passenger for whom the SSR is being sent. May be different than the passenger who is the document holder in the case of an infant.
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - documentation: F = Female M = Male U = Unknown
     * - minOccurs: 0
     * @var string
     */
    public $Gender;
    /**
     * The IncludedChild
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludedChild;
    /**
     * The PrimaryHolder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PrimaryHolder;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - documentation: Indication of the status of the SSR notification. A value of 'HK' indicates the intended carrier has received the message and has confirmed its contents.
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Number of passengers for whom the Special Service Request is being requested. | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberInParty;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
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
     * Constructor method for PassportInfoMessage.PNRB
     * @uses PassportInfoMessage_PNRB::setPassportNumber()
     * @uses PassportInfoMessage_PNRB::setCountryOfIssue()
     * @uses PassportInfoMessage_PNRB::setExpireDate()
     * @uses PassportInfoMessage_PNRB::setDateOfBirth()
     * @uses PassportInfoMessage_PNRB::setLastName()
     * @uses PassportInfoMessage_PNRB::setFirstName()
     * @uses PassportInfoMessage_PNRB::setGender()
     * @uses PassportInfoMessage_PNRB::setIncludedChild()
     * @uses PassportInfoMessage_PNRB::setPrimaryHolder()
     * @uses PassportInfoMessage_PNRB::setActionCode()
     * @uses PassportInfoMessage_PNRB::setNumberInParty()
     * @uses PassportInfoMessage_PNRB::setComment()
     * @uses PassportInfoMessage_PNRB::setId()
     * @uses PassportInfoMessage_PNRB::setOp()
     * @param string $passportNumber
     * @param string $countryOfIssue
     * @param string $expireDate
     * @param string $dateOfBirth
     * @param string $lastName
     * @param string $firstName
     * @param string $gender
     * @param bool $includedChild
     * @param bool $primaryHolder
     * @param string $actionCode
     * @param int $numberInParty
     * @param string $comment
     * @param string $id
     * @param string $op
     */
    public function __construct($passportNumber = null, $countryOfIssue = null, $expireDate = null, $dateOfBirth = null, $lastName = null, $firstName = null, $gender = null, $includedChild = null, $primaryHolder = null, $actionCode = null, $numberInParty = null, $comment = null, $id = null, $op = null)
    {
        $this
            ->setPassportNumber($passportNumber)
            ->setCountryOfIssue($countryOfIssue)
            ->setExpireDate($expireDate)
            ->setDateOfBirth($dateOfBirth)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setGender($gender)
            ->setIncludedChild($includedChild)
            ->setPrimaryHolder($primaryHolder)
            ->setActionCode($actionCode)
            ->setNumberInParty($numberInParty)
            ->setComment($comment)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get PassportNumber value
     * @return string|null
     */
    public function getPassportNumber()
    {
        return $this->PassportNumber;
    }
    /**
     * Set PassportNumber value
     * @param string $passportNumber
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setPassportNumber($passportNumber = null)
    {
        // validation for constraint: string
        if (!is_null($passportNumber) && !is_string($passportNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passportNumber)), __LINE__);
        }
        $this->PassportNumber = $passportNumber;
        return $this;
    }
    /**
     * Get CountryOfIssue value
     * @return string|null
     */
    public function getCountryOfIssue()
    {
        return $this->CountryOfIssue;
    }
    /**
     * Set CountryOfIssue value
     * @param string $countryOfIssue
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setCountryOfIssue($countryOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($countryOfIssue) && !is_string($countryOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryOfIssue)), __LINE__);
        }
        $this->CountryOfIssue = $countryOfIssue;
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;
        return $this;
    }
    /**
     * Get DateOfBirth value
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->DateOfBirth;
    }
    /**
     * Set DateOfBirth value
     * @param string $dateOfBirth
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfBirth)), __LINE__);
        }
        $this->DateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @uses \Sabre\UpdateReservation\EnumType\Gender_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\Gender_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gender
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setGender($gender = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\Gender_PNRB::valueIsValid($gender)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gender, implode(', ', \Sabre\UpdateReservation\EnumType\Gender_PNRB::getValidValues())), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get IncludedChild value
     * @return bool|null
     */
    public function getIncludedChild()
    {
        return $this->IncludedChild;
    }
    /**
     * Set IncludedChild value
     * @param bool $includedChild
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setIncludedChild($includedChild = null)
    {
        // validation for constraint: boolean
        if (!is_null($includedChild) && !is_bool($includedChild)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includedChild)), __LINE__);
        }
        $this->IncludedChild = $includedChild;
        return $this;
    }
    /**
     * Get PrimaryHolder value
     * @return bool|null
     */
    public function getPrimaryHolder()
    {
        return $this->PrimaryHolder;
    }
    /**
     * Set PrimaryHolder value
     * @param bool $primaryHolder
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setPrimaryHolder($primaryHolder = null)
    {
        // validation for constraint: boolean
        if (!is_null($primaryHolder) && !is_bool($primaryHolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primaryHolder)), __LINE__);
        }
        $this->PrimaryHolder = $primaryHolder;
        return $this;
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param int $numberInParty
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: maxInclusive
        if ($numberInParty > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberInParty < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
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
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
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
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB
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
