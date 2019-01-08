<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestType StructType
 * @subpackage Structs
 */
class RequestType extends \Sabre\UpdateReservation\EnumType\RequestEnumerationType
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The commitTransaction
     * Meta informations extracted from the WSDL
     * - documentation: Allows to control if ET should be called at the end of STATEFUL call. This option is ignored in STATELESS mode. By default it is set to false.
     * @var bool
     */
    public $commitTransaction;
    /**
     * The initialIgnore
     * Meta informations extracted from the WSDL
     * - documentation: Allows to control if IG should be called at the beginning of STATEFUL call. This option is ignored in STATELESS mode. By default it is set to false.
     * @var bool
     */
    public $initialIgnore;
    /**
     * Constructor method for RequestType
     * @uses RequestType::set_()
     * @uses RequestType::setCommitTransaction()
     * @uses RequestType::setInitialIgnore()
     * @param string $_
     * @param bool $commitTransaction
     * @param bool $initialIgnore
     */
    public function __construct($_ = null, $commitTransaction = null, $initialIgnore = null)
    {
        $this
            ->set_($_)
            ->setCommitTransaction($commitTransaction)
            ->setInitialIgnore($initialIgnore);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @uses \Sabre\UpdateReservation\EnumType\RequestEnumerationType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RequestEnumerationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\RequestType
     */
    public function set_($_ = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RequestEnumerationType::valueIsValid($_)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $_, implode(', ', \Sabre\UpdateReservation\EnumType\RequestEnumerationType::getValidValues())), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get commitTransaction value
     * @return bool|null
     */
    public function getCommitTransaction()
    {
        return $this->commitTransaction;
    }
    /**
     * Set commitTransaction value
     * @param bool $commitTransaction
     * @return \Sabre\UpdateReservation\StructType\RequestType
     */
    public function setCommitTransaction($commitTransaction = null)
    {
        // validation for constraint: boolean
        if (!is_null($commitTransaction) && !is_bool($commitTransaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($commitTransaction)), __LINE__);
        }
        $this->commitTransaction = $commitTransaction;
        return $this;
    }
    /**
     * Get initialIgnore value
     * @return bool|null
     */
    public function getInitialIgnore()
    {
        return $this->initialIgnore;
    }
    /**
     * Set initialIgnore value
     * @param bool $initialIgnore
     * @return \Sabre\UpdateReservation\StructType\RequestType
     */
    public function setInitialIgnore($initialIgnore = null)
    {
        // validation for constraint: boolean
        if (!is_null($initialIgnore) && !is_bool($initialIgnore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($initialIgnore)), __LINE__);
        }
        $this->initialIgnore = $initialIgnore;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RequestType
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
