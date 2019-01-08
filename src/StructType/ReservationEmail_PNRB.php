<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReservationEmail.PNRB StructType
 * @subpackage Structs
 */
class ReservationEmail_PNRB extends AbstractStructBase
{
    /**
     * The EmailText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\EmailLines_PNRB
     */
    public $EmailText;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - documentation: can be up to 65 chars
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The PseudoEmailAddress
     * Meta informations extracted from the WSDL
     * - documentation: this field contains only the info to the left of the @. This generates a pseudo email address for use on the Sabre Virtually There website by those travelers that do not want to provide their real address. max of 63 chars You cannot
     * use the _ char. If there is an _ char to the left of the @ then you need to replace that with two = (i.e., ==) The extra = counts as a char towards the max # of chars Use a / in place of a '
     * - minOccurs: 0
     * @var string
     */
    public $PseudoEmailAddress;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The highPriority
     * @var bool
     */
    public $highPriority;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for ReservationEmail.PNRB
     * @uses ReservationEmail_PNRB::setEmailText()
     * @uses ReservationEmail_PNRB::setSubject()
     * @uses ReservationEmail_PNRB::setPseudoEmailAddress()
     * @uses ReservationEmail_PNRB::setId()
     * @uses ReservationEmail_PNRB::setHighPriority()
     * @uses ReservationEmail_PNRB::setOp()
     * @uses ReservationEmail_PNRB::setRPH()
     * @param \Sabre\UpdateReservation\StructType\EmailLines_PNRB $emailText
     * @param string $subject
     * @param string $pseudoEmailAddress
     * @param string $id
     * @param bool $highPriority
     * @param string $op
     * @param string $rPH
     */
    public function __construct(\Sabre\UpdateReservation\StructType\EmailLines_PNRB $emailText = null, $subject = null, $pseudoEmailAddress = null, $id = null, $highPriority = null, $op = null, $rPH = null)
    {
        $this
            ->setEmailText($emailText)
            ->setSubject($subject)
            ->setPseudoEmailAddress($pseudoEmailAddress)
            ->setId($id)
            ->setHighPriority($highPriority)
            ->setOp($op)
            ->setRPH($rPH);
    }
    /**
     * Get EmailText value
     * @return \Sabre\UpdateReservation\StructType\EmailLines_PNRB|null
     */
    public function getEmailText()
    {
        return $this->EmailText;
    }
    /**
     * Set EmailText value
     * @param \Sabre\UpdateReservation\StructType\EmailLines_PNRB $emailText
     * @return \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB
     */
    public function setEmailText(\Sabre\UpdateReservation\StructType\EmailLines_PNRB $emailText = null)
    {
        $this->EmailText = $emailText;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get PseudoEmailAddress value
     * @return string|null
     */
    public function getPseudoEmailAddress()
    {
        return $this->PseudoEmailAddress;
    }
    /**
     * Set PseudoEmailAddress value
     * @param string $pseudoEmailAddress
     * @return \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB
     */
    public function setPseudoEmailAddress($pseudoEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($pseudoEmailAddress) && !is_string($pseudoEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pseudoEmailAddress)), __LINE__);
        }
        $this->PseudoEmailAddress = $pseudoEmailAddress;
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
     * @return \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB
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
     * Get highPriority value
     * @return bool|null
     */
    public function getHighPriority()
    {
        return $this->highPriority;
    }
    /**
     * Set highPriority value
     * @param bool $highPriority
     * @return \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB
     */
    public function setHighPriority($highPriority = null)
    {
        // validation for constraint: boolean
        if (!is_null($highPriority) && !is_bool($highPriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($highPriority)), __LINE__);
        }
        $this->highPriority = $highPriority;
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
     * @return \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB
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
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB
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
