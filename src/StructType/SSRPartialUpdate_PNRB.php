<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SSRPartialUpdate.PNRB StructType
 * @subpackage Structs
 */
class SSRPartialUpdate_PNRB extends AbstractStructBase
{
    /**
     * The ActionCodeUpdate
     * @var \Sabre\UpdateReservation\StructType\ActionCodeUpdate
     */
    public $ActionCodeUpdate;
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
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: G = General, H = Hosted
     * @var string
     */
    public $type;
    /**
     * Constructor method for SSRPartialUpdate.PNRB
     * @uses SSRPartialUpdate_PNRB::setActionCodeUpdate()
     * @uses SSRPartialUpdate_PNRB::setId()
     * @uses SSRPartialUpdate_PNRB::setOp()
     * @uses SSRPartialUpdate_PNRB::setType()
     * @param \Sabre\UpdateReservation\StructType\ActionCodeUpdate $actionCodeUpdate
     * @param string $id
     * @param string $op
     * @param string $type
     */
    public function __construct(\Sabre\UpdateReservation\StructType\ActionCodeUpdate $actionCodeUpdate = null, $id = null, $op = null, $type = null)
    {
        $this
            ->setActionCodeUpdate($actionCodeUpdate)
            ->setId($id)
            ->setOp($op)
            ->setType($type);
    }
    /**
     * Get ActionCodeUpdate value
     * @return \Sabre\UpdateReservation\StructType\ActionCodeUpdate|null
     */
    public function getActionCodeUpdate()
    {
        return $this->ActionCodeUpdate;
    }
    /**
     * Set ActionCodeUpdate value
     * @param \Sabre\UpdateReservation\StructType\ActionCodeUpdate $actionCodeUpdate
     * @return \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB
     */
    public function setActionCodeUpdate(\Sabre\UpdateReservation\StructType\ActionCodeUpdate $actionCodeUpdate = null)
    {
        $this->ActionCodeUpdate = $actionCodeUpdate;
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
     * @return \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Sabre\UpdateReservation\EnumType\FactType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\FactType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\FactType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\FactType_PNRB::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB
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
