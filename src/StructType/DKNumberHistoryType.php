<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DKNumberHistoryType StructType
 * @subpackage Structs
 */
class DKNumberHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The DKNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DKNumber;
    /**
     * Constructor method for DKNumberHistoryType
     * @uses DKNumberHistoryType::setHistoryAction()
     * @uses DKNumberHistoryType::setDKNumber()
     * @param string $historyAction
     * @param string $dKNumber
     */
    public function __construct($historyAction = null, $dKNumber = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setDKNumber($dKNumber);
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
     * @return \Sabre\UpdateReservation\StructType\DKNumberHistoryType
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
     * Get DKNumber value
     * @return string|null
     */
    public function getDKNumber()
    {
        return $this->DKNumber;
    }
    /**
     * Set DKNumber value
     * @param string $dKNumber
     * @return \Sabre\UpdateReservation\StructType\DKNumberHistoryType
     */
    public function setDKNumber($dKNumber = null)
    {
        // validation for constraint: string
        if (!is_null($dKNumber) && !is_string($dKNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dKNumber)), __LINE__);
        }
        $this->DKNumber = $dKNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DKNumberHistoryType
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
