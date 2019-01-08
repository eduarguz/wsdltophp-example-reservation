<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Agency address restrictions: * minimum 1 line, max 6 ones * each line has a max of 50 chars Client address restrictions: * minimum 1 line, max 6 lines * each line has a max of 50 chars Delivery address restrictions * minimum 1 line,
 * max 6 lines * each line has a max of 39 chars Formats for addresses: * add agency address W-(agency name)‡(street address)‡(city/state or country/zip or postal code) W-ABC TRAVEL‡123 MAIN ST‡DALLAS TX 75201 * add agency address when more than
 * 50 chars W-(agency name)‡(street address) W-(address line # to insert after)/(city/state or country/zip or postal code) W-ABC TRAVEL‡123 MAIN ST W-2/DALLAS TX 75201 * insert agency address line W-(address line # to insert after)/(address)
 * W-3/LANGENBERHEIMERSTR. 21 * delete entire address field W-¤ * delete specific address line W-(line #)¤ W-1¤ * entry customer address into remarks for printing on invoice/itinerary 5/(name)§5/(address)§5/(city),(state code or country code if not
 * US)(postal code)) 5/T KHOSROVI§5/123 MAIN ST§5/DALLAS, TX 76101) * modify the client address within the remarks field 5(line #)¤/(new text) 53¤/65073 DIESBURG * add delivery address 5DL-(address info) 5DL-DELIVER TO KIRK HADEO 5DL-ESTERHAZY #106
 * 5DL-KOENJI MINAMI 5-4-12 5DL-SUGINAMI-KU, TOKYO 166 5DL-JAPAN
 * @subpackage Structs
 */
class Address_PNRB extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The NumberAndStreet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NumberAndStreet;
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
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The PostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostCode;
    /**
     * The AddressLines
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressLines_PNRB
     */
    public $AddressLines;
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
     * - documentation: can be A = agency, C = client, D = delivery
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
     * Constructor method for Address.PNRB
     * @uses Address_PNRB::setName()
     * @uses Address_PNRB::setNumberAndStreet()
     * @uses Address_PNRB::setCity()
     * @uses Address_PNRB::setStateProvince()
     * @uses Address_PNRB::setCountry()
     * @uses Address_PNRB::setPostCode()
     * @uses Address_PNRB::setAddressLines()
     * @uses Address_PNRB::setId()
     * @uses Address_PNRB::setType()
     * @uses Address_PNRB::setOp()
     * @param string $name
     * @param string $numberAndStreet
     * @param string $city
     * @param string $stateProvince
     * @param string $country
     * @param string $postCode
     * @param \Sabre\UpdateReservation\StructType\AddressLines_PNRB $addressLines
     * @param string $id
     * @param string $type
     * @param string $op
     */
    public function __construct($name = null, $numberAndStreet = null, $city = null, $stateProvince = null, $country = null, $postCode = null, \Sabre\UpdateReservation\StructType\AddressLines_PNRB $addressLines = null, $id = null, $type = null, $op = null)
    {
        $this
            ->setName($name)
            ->setNumberAndStreet($numberAndStreet)
            ->setCity($city)
            ->setStateProvince($stateProvince)
            ->setCountry($country)
            ->setPostCode($postCode)
            ->setAddressLines($addressLines)
            ->setId($id)
            ->setType($type)
            ->setOp($op);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NumberAndStreet value
     * @return string|null
     */
    public function getNumberAndStreet()
    {
        return $this->NumberAndStreet;
    }
    /**
     * Set NumberAndStreet value
     * @param string $numberAndStreet
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
     */
    public function setNumberAndStreet($numberAndStreet = null)
    {
        // validation for constraint: string
        if (!is_null($numberAndStreet) && !is_string($numberAndStreet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberAndStreet)), __LINE__);
        }
        $this->NumberAndStreet = $numberAndStreet;
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
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
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
     * Get AddressLines value
     * @return \Sabre\UpdateReservation\StructType\AddressLines_PNRB|null
     */
    public function getAddressLines()
    {
        return $this->AddressLines;
    }
    /**
     * Set AddressLines value
     * @param \Sabre\UpdateReservation\StructType\AddressLines_PNRB $addressLines
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
     */
    public function setAddressLines(\Sabre\UpdateReservation\StructType\AddressLines_PNRB $addressLines = null)
    {
        $this->AddressLines = $addressLines;
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
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
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
     * @uses \Sabre\UpdateReservation\EnumType\AddressType_ACD_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\AddressType_ACD_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\AddressType_ACD_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\AddressType_ACD_PNRB::getValidValues())), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB
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
