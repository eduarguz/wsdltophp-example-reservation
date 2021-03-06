<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddress.PNRB StructType
 * @subpackage Structs
 */
class EmailAddress_PNRB extends AbstractStructBase
{
    /**
     * The Address
     * @var string
     */
    public $Address;
    /**
     * The Comment
     * @var string
     */
    public $Comment;
    /**
     * The OverrideFrom
     * @var string
     */
    public $OverrideFrom;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier identifying a specific Email instance
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
     * Constructor method for EmailAddress.PNRB
     * @uses EmailAddress_PNRB::setAddress()
     * @uses EmailAddress_PNRB::setComment()
     * @uses EmailAddress_PNRB::setOverrideFrom()
     * @uses EmailAddress_PNRB::setId()
     * @uses EmailAddress_PNRB::setOp()
     * @param string $address
     * @param string $comment
     * @param string $overrideFrom
     * @param string $id
     * @param string $op
     */
    public function __construct($address = null, $comment = null, $overrideFrom = null, $id = null, $op = null)
    {
        $this
            ->setAddress($address)
            ->setComment($comment)
            ->setOverrideFrom($overrideFrom)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \Sabre\UpdateReservation\StructType\EmailAddress_PNRB
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->Address = $address;
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
     * @return \Sabre\UpdateReservation\StructType\EmailAddress_PNRB
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
     * Get OverrideFrom value
     * @return string|null
     */
    public function getOverrideFrom()
    {
        return $this->OverrideFrom;
    }
    /**
     * Set OverrideFrom value
     * @param string $overrideFrom
     * @return \Sabre\UpdateReservation\StructType\EmailAddress_PNRB
     */
    public function setOverrideFrom($overrideFrom = null)
    {
        // validation for constraint: string
        if (!is_null($overrideFrom) && !is_string($overrideFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($overrideFrom)), __LINE__);
        }
        $this->OverrideFrom = $overrideFrom;
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
     * @return \Sabre\UpdateReservation\StructType\EmailAddress_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\EmailAddress_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\EmailAddress_PNRB
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
