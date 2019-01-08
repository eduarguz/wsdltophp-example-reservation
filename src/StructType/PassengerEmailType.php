<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerEmailType StructType
 * @subpackage Structs
 */
class PassengerEmailType extends AbstractStructBase
{
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The EmailComment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EmailComment;
    /**
     * Constructor method for PassengerEmailType
     * @uses PassengerEmailType::setEmailAddress()
     * @uses PassengerEmailType::setEmailComment()
     * @param string $emailAddress
     * @param string $emailComment
     */
    public function __construct($emailAddress = null, $emailComment = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setEmailComment($emailComment);
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \Sabre\UpdateReservation\StructType\PassengerEmailType
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get EmailComment value
     * @return string|null
     */
    public function getEmailComment()
    {
        return $this->EmailComment;
    }
    /**
     * Set EmailComment value
     * @param string $emailComment
     * @return \Sabre\UpdateReservation\StructType\PassengerEmailType
     */
    public function setEmailComment($emailComment = null)
    {
        // validation for constraint: string
        if (!is_null($emailComment) && !is_string($emailComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailComment)), __LINE__);
        }
        $this->EmailComment = $emailComment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerEmailType
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
