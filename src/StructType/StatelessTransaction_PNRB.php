<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatelessTransaction.PNRB StructType
 * @subpackage Structs
 */
class StatelessTransaction_PNRB extends AbstractStructBase
{
    /**
     * The save
     * @var string
     */
    public $save;
    /**
     * Constructor method for StatelessTransaction.PNRB
     * @uses StatelessTransaction_PNRB::setSave()
     * @param string $save
     */
    public function __construct($save = null)
    {
        $this
            ->setSave($save);
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
     * @return \Sabre\UpdateReservation\StructType\StatelessTransaction_PNRB
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\StatelessTransaction_PNRB
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
