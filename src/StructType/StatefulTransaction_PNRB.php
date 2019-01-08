<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatefulTransaction.PNRB StructType
 * @subpackage Structs
 */
class StatefulTransaction_PNRB extends AbstractStructBase
{
    /**
     * The save
     * @var string
     */
    public $save;
    /**
     * The onFail
     * @var string
     */
    public $onFail;
    /**
     * Constructor method for StatefulTransaction.PNRB
     * @uses StatefulTransaction_PNRB::setSave()
     * @uses StatefulTransaction_PNRB::setOnFail()
     * @param string $save
     * @param string $onFail
     */
    public function __construct($save = null, $onFail = null)
    {
        $this
            ->setSave($save)
            ->setOnFail($onFail);
    }
    /**
     * Get save value
     * @return string|null
     */
    public function getSave()
    {
        return $this->save;
    }
    /**
     * Set save value
     * @uses \Sabre\UpdateReservation\EnumType\Save_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\Save_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $save
     * @return \Sabre\UpdateReservation\StructType\StatefulTransaction_PNRB
     */
    public function setSave($save = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\Save_PNRB::valueIsValid($save)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $save, implode(', ', \Sabre\UpdateReservation\EnumType\Save_PNRB::getValidValues())), __LINE__);
        }
        $this->save = $save;
        return $this;
    }
    /**
     * Get onFail value
     * @return string|null
     */
    public function getOnFail()
    {
        return $this->onFail;
    }
    /**
     * Set onFail value
     * @uses \Sabre\UpdateReservation\EnumType\OnFail_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OnFail_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $onFail
     * @return \Sabre\UpdateReservation\StructType\StatefulTransaction_PNRB
     */
    public function setOnFail($onFail = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OnFail_PNRB::valueIsValid($onFail)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $onFail, implode(', ', \Sabre\UpdateReservation\EnumType\OnFail_PNRB::getValidValues())), __LINE__);
        }
        $this->onFail = $onFail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\StatefulTransaction_PNRB
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
