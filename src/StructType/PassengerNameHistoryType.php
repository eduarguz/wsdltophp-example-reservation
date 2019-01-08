<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerNameHistoryType StructType
 * @subpackage Structs
 */
class PassengerNameHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The NameSeqID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NameSeqID;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for PassengerNameHistoryType
     * @uses PassengerNameHistoryType::setHistoryAction()
     * @uses PassengerNameHistoryType::setNameSeqID()
     * @uses PassengerNameHistoryType::setLastName()
     * @uses PassengerNameHistoryType::setFirstName()
     * @uses PassengerNameHistoryType::setType()
     * @param string $historyAction
     * @param int $nameSeqID
     * @param string $lastName
     * @param string $firstName
     * @param string $type
     */
    public function __construct($historyAction = null, $nameSeqID = null, $lastName = null, $firstName = null, $type = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setNameSeqID($nameSeqID)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setType($type);
    }
    /**
     * Get HistoryAction value
     * @return string|null
     */
    public function getHistoryAction()
    {
        return $this->HistoryAction;
    }
    /**
     * Set HistoryAction value
     * @param string $historyAction
     * @return \Sabre\UpdateReservation\StructType\PassengerNameHistoryType
     */
    public function setHistoryAction($historyAction = null)
    {
        // validation for constraint: string
        if (!is_null($historyAction) && !is_string($historyAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyAction)), __LINE__);
        }
        $this->HistoryAction = $historyAction;
        return $this;
    }
    /**
     * Get NameSeqID value
     * @return int|null
     */
    public function getNameSeqID()
    {
        return $this->NameSeqID;
    }
    /**
     * Set NameSeqID value
     * @param int $nameSeqID
     * @return \Sabre\UpdateReservation\StructType\PassengerNameHistoryType
     */
    public function setNameSeqID($nameSeqID = null)
    {
        // validation for constraint: int
        if (!is_null($nameSeqID) && !is_numeric($nameSeqID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nameSeqID)), __LINE__);
        }
        $this->NameSeqID = $nameSeqID;
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
     * @return \Sabre\UpdateReservation\StructType\PassengerNameHistoryType
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
     * @return \Sabre\UpdateReservation\StructType\PassengerNameHistoryType
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
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Sabre\UpdateReservation\EnumType\PassengerType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\PassengerType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\PassengerNameHistoryType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\PassengerType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\PassengerType_PNRB::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerNameHistoryType
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
