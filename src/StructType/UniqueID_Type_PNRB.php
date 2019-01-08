<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniqueID_Type.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: An identifier used to uniquely reference an object in a system (e.g. an airline reservation reference, customer profile reference, booking confirmation number, or a reference to a previous availability quote).
 * @subpackage Structs
 */
class UniqueID_Type_PNRB extends AbstractStructBase
{
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
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: A reference to the type of object defined by the UniqueID element. Refer to OTA Code List Unique ID Type (UIT). | Used for codes in the OTA code tables. Possible values of this pattern are 1, 101, 101.EQP, or 101.EQP.X.
     * - pattern: [0-9A-Z]{1,3}(\.[A-Z]{3}(\.X){0,1}){0,1}
     * @var string
     */
    public $Type;
    /**
     * The Instance
     * @var string
     */
    public $Instance;
    /**
     * The ID_Context
     * @var string
     */
    public $ID_Context;
    /**
     * The ID
     * @var string
     */
    public $ID;
    /**
     * Constructor method for UniqueID_Type.PNRB
     * @uses UniqueID_Type_PNRB::setCompanyName()
     * @uses UniqueID_Type_PNRB::setArrangerDetails()
     * @uses UniqueID_Type_PNRB::setURL()
     * @uses UniqueID_Type_PNRB::setType()
     * @uses UniqueID_Type_PNRB::setInstance()
     * @uses UniqueID_Type_PNRB::setID_Context()
     * @uses UniqueID_Type_PNRB::setID()
     * @param \Sabre\UpdateReservation\StructType\CompanyNameType $companyName
     * @param \Sabre\UpdateReservation\StructType\ArrangerDetailsType $arrangerDetails
     * @param string $uRL
     * @param string $type
     * @param string $instance
     * @param string $iD_Context
     * @param string $iD
     */
    public function __construct(\Sabre\UpdateReservation\StructType\CompanyNameType $companyName = null, \Sabre\UpdateReservation\StructType\ArrangerDetailsType $arrangerDetails = null, $uRL = null, $type = null, $instance = null, $iD_Context = null, $iD = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setArrangerDetails($arrangerDetails)
            ->setURL($uRL)
            ->setType($type)
            ->setInstance($instance)
            ->setID_Context($iD_Context)
            ->setID($iD);
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
     * @return \Sabre\UpdateReservation\StructType\UniqueID_Type_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UniqueID_Type_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UniqueID_Type_PNRB
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
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\UniqueID_Type_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: pattern
        if (is_scalar($type) && !preg_match('/[0-9A-Z]{1,3}(\\.[A-Z]{3}(\\.X){0,1}){0,1}/', $type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]{1,3}(\.[A-Z]{3}(\.X){0,1}){0,1}", "%s" given', var_export($type, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
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
     * @return \Sabre\UpdateReservation\StructType\UniqueID_Type_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UniqueID_Type_PNRB
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
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Sabre\UpdateReservation\StructType\UniqueID_Type_PNRB
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\UniqueID_Type_PNRB
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
