<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DOCAEntry.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Format: 3DOCA(segment number)/(address type)/(country)/(street)/(city)/(state or province)/(zip or postal code)/(lap child indicator)/(pnr name assoc) * enter destinationa address info 3DOCA2/D/GB/10 DOWNING STREET/LONDON/EN/7A1
 * H30-2.1 * lap child 3DOC12/D/USA/987 CENTER ST/AUSTIN/TX/76160/I-1.2 * enter residence address info 3DOCA1/R/US/1234 MAIN/EULESS/TX/76040-1.2 * enter address info with multiple segment selection 3DOCA2,3/R/GBR/14 CHARING RD/LONDON/EN/7A1 H3P * enter
 * residence address with mandatory components only 3DOCA/R/GB * enter desitnation address with mandatory components only 3DOCA/D/USA/SHERATON WAIKIKI/HONOLULU/HAWAII * delete a DOCA entry 3(line/itme number)¤ 37¤
 * @subpackage Structs
 */
class DOCAEntry_PNRB extends AbstractStructBase
{
    /**
     * The AddressType
     * Meta informations extracted from the WSDL
     * - documentation: R = Residence D = Destination
     * - minOccurs: 0
     * @var string
     */
    public $AddressType;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Street;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The StateProvince
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StateProvince;
    /**
     * The PostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostCode;
    /**
     * The LapChild
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $LapChild;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - documentation: Flight and freetext data. Ex. "DOCA LA HK1/D/US/987 MAIN/EULESS/TEXAS/76040"
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - documentation: Indication of the status of the SSR notification. A value of 'HK' indicates the intended carrier has received the message and has confirmed its contents. Ex. "HK"
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Number of passengers for whom the Special Service Request is being requested. Ex."1" | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberInParty;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: A = AFAX G = GFAX
     * @var string
     */
    public $type;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for DOCAEntry.PNRB
     * @uses DOCAEntry_PNRB::setAddressType()
     * @uses DOCAEntry_PNRB::setCountry()
     * @uses DOCAEntry_PNRB::setStreet()
     * @uses DOCAEntry_PNRB::setCity()
     * @uses DOCAEntry_PNRB::setStateProvince()
     * @uses DOCAEntry_PNRB::setPostCode()
     * @uses DOCAEntry_PNRB::setLapChild()
     * @uses DOCAEntry_PNRB::setFreeText()
     * @uses DOCAEntry_PNRB::setActionCode()
     * @uses DOCAEntry_PNRB::setNumberInParty()
     * @uses DOCAEntry_PNRB::setId()
     * @uses DOCAEntry_PNRB::setType()
     * @uses DOCAEntry_PNRB::setOp()
     * @param string $addressType
     * @param string $country
     * @param string $street
     * @param string $city
     * @param string $stateProvince
     * @param string $postCode
     * @param bool $lapChild
     * @param string $freeText
     * @param string $actionCode
     * @param int $numberInParty
     * @param string $id
     * @param string $type
     * @param string $op
     */
    public function __construct($addressType = null, $country = null, $street = null, $city = null, $stateProvince = null, $postCode = null, $lapChild = null, $freeText = null, $actionCode = null, $numberInParty = null, $id = null, $type = null, $op = null)
    {
        $this
            ->setAddressType($addressType)
            ->setCountry($country)
            ->setStreet($street)
            ->setCity($city)
            ->setStateProvince($stateProvince)
            ->setPostCode($postCode)
            ->setLapChild($lapChild)
            ->setFreeText($freeText)
            ->setActionCode($actionCode)
            ->setNumberInParty($numberInParty)
            ->setId($id)
            ->setType($type)
            ->setOp($op);
    }
    /**
     * Get AddressType value
     * @return string|null
     */
    public function getAddressType()
    {
        return $this->AddressType;
    }
    /**
     * Set AddressType value
     * @uses \Sabre\UpdateReservation\EnumType\AddressType_RD_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\AddressType_RD_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addressType
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
     */
    public function setAddressType($addressType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\AddressType_RD_PNRB::valueIsValid($addressType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $addressType, implode(', ', \Sabre\UpdateReservation\EnumType\AddressType_RD_PNRB::getValidValues())), __LINE__);
        }
        $this->AddressType = $addressType;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->Street = $street;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get StateProvince value
     * @return string|null
     */
    public function getStateProvince()
    {
        return $this->StateProvince;
    }
    /**
     * Set StateProvince value
     * @param string $stateProvince
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
     */
    public function setStateProvince($stateProvince = null)
    {
        // validation for constraint: string
        if (!is_null($stateProvince) && !is_string($stateProvince)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateProvince)), __LINE__);
        }
        $this->StateProvince = $stateProvince;
        return $this;
    }
    /**
     * Get PostCode value
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->PostCode;
    }
    /**
     * Set PostCode value
     * @param string $postCode
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
     */
    public function setPostCode($postCode = null)
    {
        // validation for constraint: string
        if (!is_null($postCode) && !is_string($postCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postCode)), __LINE__);
        }
        $this->PostCode = $postCode;
        return $this;
    }
    /**
     * Get LapChild value
     * @return bool|null
     */
    public function getLapChild()
    {
        return $this->LapChild;
    }
    /**
     * Set LapChild value
     * @param bool $lapChild
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
     */
    public function setLapChild($lapChild = null)
    {
        // validation for constraint: boolean
        if (!is_null($lapChild) && !is_bool($lapChild)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($lapChild)), __LINE__);
        }
        $this->LapChild = $lapChild;
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
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
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues())), __LINE__);
        }
        $this->type = $type;
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
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
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
