<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for APISRequest.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Max line lengths * generic DOCS/DOCO - 108 chars after the first slash. Alphas, numerics, slashses and spaces are allowed. *segment specific DOCS/DOCO - 91 chars after the first slash * DOCA is variable. It is the same as DOCS and
 * DOCO unless associated to more than one name. There is one less char allowed for each name to which the item is associated. * the AFAX DOCA (4DOCA) has a max length of 127 chars
 * @subpackage Structs
 */
class APISRequest_PNRB extends AbstractStructBase
{
    /**
     * The DOCAEntry
     * Meta informations extracted from the WSDL
     * - documentation: Code indicating the type of SSR that was sent.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB
     */
    public $DOCAEntry;
    /**
     * The DOCOEntry
     * Meta informations extracted from the WSDL
     * - documentation: Code indicating the type of SSR that was sent.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public $DOCOEntry;
    /**
     * The DOCSEntry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public $DOCSEntry;
    /**
     * Constructor method for APISRequest.PNRB
     * @uses APISRequest_PNRB::setDOCAEntry()
     * @uses APISRequest_PNRB::setDOCOEntry()
     * @uses APISRequest_PNRB::setDOCSEntry()
     * @param \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB $dOCAEntry
     * @param \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB $dOCOEntry
     * @param \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB $dOCSEntry
     */
    public function __construct(\Sabre\UpdateReservation\StructType\DOCAEntry_PNRB $dOCAEntry = null, \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB $dOCOEntry = null, \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB $dOCSEntry = null)
    {
        $this
            ->setDOCAEntry($dOCAEntry)
            ->setDOCOEntry($dOCOEntry)
            ->setDOCSEntry($dOCSEntry);
    }
    /**
     * Get DOCAEntry value
     * @return \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB|null
     */
    public function getDOCAEntry()
    {
        return $this->DOCAEntry;
    }
    /**
     * Set DOCAEntry value
     * @param \Sabre\UpdateReservation\StructType\DOCAEntry_PNRB $dOCAEntry
     * @return \Sabre\UpdateReservation\StructType\APISRequest_PNRB
     */
    public function setDOCAEntry(\Sabre\UpdateReservation\StructType\DOCAEntry_PNRB $dOCAEntry = null)
    {
        $this->DOCAEntry = $dOCAEntry;
        return $this;
    }
    /**
     * Get DOCOEntry value
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB|null
     */
    public function getDOCOEntry()
    {
        return $this->DOCOEntry;
    }
    /**
     * Set DOCOEntry value
     * @param \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB $dOCOEntry
     * @return \Sabre\UpdateReservation\StructType\APISRequest_PNRB
     */
    public function setDOCOEntry(\Sabre\UpdateReservation\StructType\DOCOEntry_PNRB $dOCOEntry = null)
    {
        $this->DOCOEntry = $dOCOEntry;
        return $this;
    }
    /**
     * Get DOCSEntry value
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB|null
     */
    public function getDOCSEntry()
    {
        return $this->DOCSEntry;
    }
    /**
     * Set DOCSEntry value
     * @param \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB $dOCSEntry
     * @return \Sabre\UpdateReservation\StructType\APISRequest_PNRB
     */
    public function setDOCSEntry(\Sabre\UpdateReservation\StructType\DOCSEntry_PNRB $dOCSEntry = null)
    {
        $this->DOCSEntry = $dOCSEntry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\APISRequest_PNRB
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
