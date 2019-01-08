<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Voucher StructType
 * @subpackage Structs
 */
class Voucher extends AbstractStructBase
{
    /**
     * The billingNumber
     * Meta informations extracted from the WSDL
     * - documentation: "billingNumber" used to return the voucher billing number associated with the vehicle reservation if applicable.
     * - use: optional
     * @var string
     */
    public $billingNumber;
    /**
     * The format
     * Meta informations extracted from the WSDL
     * - documentation: "format" is used to return the voucher format associated with the vehicle reservation if applicable.
     * - use: optional
     * @var string
     */
    public $format;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - documentation: "id" is used to return the voucher ID associated with the vehicle reservation if applicable.
     * - use: optional
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: "type" is used to return the type of voucher associated with the vehicle reservation if applicable.
     * - use: optional
     * @var string
     */
    public $type;
    /**
     * Constructor method for Voucher
     * @uses Voucher::setBillingNumber()
     * @uses Voucher::setFormat()
     * @uses Voucher::setId()
     * @uses Voucher::setType()
     * @param string $billingNumber
     * @param string $format
     * @param string $id
     * @param string $type
     */
    public function __construct($billingNumber = null, $format = null, $id = null, $type = null)
    {
        $this
            ->setBillingNumber($billingNumber)
            ->setFormat($format)
            ->setId($id)
            ->setType($type);
    }
    /**
     * Get billingNumber value
     * @return string|null
     */
    public function getBillingNumber()
    {
        return $this->billingNumber;
    }
    /**
     * Set billingNumber value
     * @param string $billingNumber
     * @return \Sabre\UpdateReservation\StructType\Voucher
     */
    public function setBillingNumber($billingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($billingNumber) && !is_string($billingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingNumber)), __LINE__);
        }
        $this->billingNumber = $billingNumber;
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Sabre\UpdateReservation\StructType\Voucher
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->format = $format;
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
     * @return \Sabre\UpdateReservation\StructType\Voucher
     */
    public function setId($id = null)
    {
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
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Voucher
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\Voucher
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
