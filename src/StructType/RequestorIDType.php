<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestorIDType StructType
 * @subpackage Structs
 */
class RequestorIDType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: A reference to the type of object defined by the UniqueID element. Refer to OTA Code List Unique ID Type (UIT).
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     * - use: required
     * @var string
     */
    public $ID;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the company that is associated with the UniqueID.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CompanyNameType
     */
    public $CompanyName;
    /**
     * The ArrangerDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ArrangerDetailsType
     */
    public $ArrangerDetails;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: URL that identifies the location associated with the record identified by the UniqueID.
     * @var string
     */
    public $URL;
    /**
     * The Instance
     * Meta informations extracted from the WSDL
     * - documentation: The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being
     * updated.
     * @var string
     */
    public $Instance;
    /**
     * The ID_Context
     * Meta informations extracted from the WSDL
     * - documentation: Used to identify the source of the identifier (e.g., IATA, ABTA).
     * @var string
     */
    public $ID_Context;
    /**
     * The MessagePassword
     * Meta informations extracted from the WSDL
     * - documentation: This password provides an additional level of security that the recipient can use to validate the sending party's authority to use the message.
     * @var string
     */
    public $MessagePassword;
    /**
     * Constructor method for RequestorIDType
     * @uses RequestorIDType::setType()
     * @uses RequestorIDType::setID()
     * @uses RequestorIDType::setCompanyName()
     * @uses RequestorIDType::setArrangerDetails()
     * @uses RequestorIDType::setURL()
     * @uses RequestorIDType::setInstance()
     * @uses RequestorIDType::setID_Context()
     * @uses RequestorIDType::setMessagePassword()
     * @param string $type
     * @param string $iD
     * @param \Sabre\UpdateReservation\StructType\CompanyNameType $companyName
     * @param \Sabre\UpdateReservation\StructType\ArrangerDetailsType $arrangerDetails
     * @param string $uRL
     * @param string $instance
     * @param string $iD_Context
     * @param string $messagePassword
     */
    public function __construct($type = null, $iD = null, \Sabre\UpdateReservation\StructType\CompanyNameType $companyName = null, \Sabre\UpdateReservation\StructType\ArrangerDetailsType $arrangerDetails = null, $uRL = null, $instance = null, $iD_Context = null, $messagePassword = null)
    {
        $this
            ->setType($type)
            ->setID($iD)
            ->setCompanyName($companyName)
            ->setArrangerDetails($arrangerDetails)
            ->setURL($uRL)
            ->setInstance($instance)
            ->setID_Context($iD_Context)
            ->setMessagePassword($messagePassword);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\RequestorIDType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ID value
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Sabre\UpdateReservation\StructType\RequestorIDType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return \Sabre\UpdateReservation\StructType\CompanyNameType|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param \Sabre\UpdateReservation\StructType\CompanyNameType $companyName
     * @return \Sabre\UpdateReservation\StructType\RequestorIDType
     */
    public function setCompanyName(\Sabre\UpdateReservation\StructType\CompanyNameType $companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get ArrangerDetails value
     * @return \Sabre\UpdateReservation\StructType\ArrangerDetailsType|null
     */
    public function getArrangerDetails()
    {
        return $this->ArrangerDetails;
    }
    /**
     * Set ArrangerDetails value
     * @param \Sabre\UpdateReservation\StructType\ArrangerDetailsType $arrangerDetails
     * @return \Sabre\UpdateReservation\StructType\RequestorIDType
     */
    public function setArrangerDetails(\Sabre\UpdateReservation\StructType\ArrangerDetailsType $arrangerDetails = null)
    {
        $this->ArrangerDetails = $arrangerDetails;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Sabre\UpdateReservation\StructType\RequestorIDType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get Instance value
     * @return string|null
     */
    public function getInstance()
    {
        return $this->Instance;
    }
    /**
     * Set Instance value
     * @param string $instance
     * @return \Sabre\UpdateReservation\StructType\RequestorIDType
     */
    public function setInstance($instance = null)
    {
        // validation for constraint: string
        if (!is_null($instance) && !is_string($instance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($instance)), __LINE__);
        }
        $this->Instance = $instance;
        return $this;
    }
    /**
     * Get ID_Context value
     * @return string|null
     */
    public function getID_Context()
    {
        return $this->ID_Context;
    }
    /**
     * Set ID_Context value
     * @param string $iD_Context
     * @return \Sabre\UpdateReservation\StructType\RequestorIDType
     */
    public function setID_Context($iD_Context = null)
    {
        // validation for constraint: string
        if (!is_null($iD_Context) && !is_string($iD_Context)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD_Context)), __LINE__);
        }
        $this->ID_Context = $iD_Context;
        return $this;
    }
    /**
     * Get MessagePassword value
     * @return string|null
     */
    public function getMessagePassword()
    {
        return $this->MessagePassword;
    }
    /**
     * Set MessagePassword value
     * @param string $messagePassword
     * @return \Sabre\UpdateReservation\StructType\RequestorIDType
     */
    public function setMessagePassword($messagePassword = null)
    {
        // validation for constraint: string
        if (!is_null($messagePassword) && !is_string($messagePassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messagePassword)), __LINE__);
        }
        $this->MessagePassword = $messagePassword;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RequestorIDType
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
