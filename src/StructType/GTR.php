<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GTR StructType
 * @subpackage Structs
 */
class GTR extends AbstractStructBase
{
    /**
     * The GR
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GR
     */
    public $GR;
    /**
     * The SGR
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SGR
     */
    public $SGR;
    /**
     * The GGR
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GGR
     */
    public $GGR;
    /**
     * The FGR
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FGR
     */
    public $FGR;
    /**
     * The BNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BNumber;
    /**
     * Constructor method for GTR
     * @uses GTR::setGR()
     * @uses GTR::setSGR()
     * @uses GTR::setGGR()
     * @uses GTR::setFGR()
     * @uses GTR::setBNumber()
     * @param \Sabre\UpdateReservation\StructType\GR $gR
     * @param \Sabre\UpdateReservation\StructType\SGR $sGR
     * @param \Sabre\UpdateReservation\StructType\GGR $gGR
     * @param \Sabre\UpdateReservation\StructType\FGR $fGR
     * @param string $bNumber
     */
    public function __construct(\Sabre\UpdateReservation\StructType\GR $gR = null, \Sabre\UpdateReservation\StructType\SGR $sGR = null, \Sabre\UpdateReservation\StructType\GGR $gGR = null, \Sabre\UpdateReservation\StructType\FGR $fGR = null, $bNumber = null)
    {
        $this
            ->setGR($gR)
            ->setSGR($sGR)
            ->setGGR($gGR)
            ->setFGR($fGR)
            ->setBNumber($bNumber);
    }
    /**
     * Get GR value
     * @return \Sabre\UpdateReservation\StructType\GR|null
     */
    public function getGR()
    {
        return $this->GR;
    }
    /**
     * Set GR value
     * @param \Sabre\UpdateReservation\StructType\GR $gR
     * @return \Sabre\UpdateReservation\StructType\GTR
     */
    public function setGR(\Sabre\UpdateReservation\StructType\GR $gR = null)
    {
        $this->GR = $gR;
        return $this;
    }
    /**
     * Get SGR value
     * @return \Sabre\UpdateReservation\StructType\SGR|null
     */
    public function getSGR()
    {
        return $this->SGR;
    }
    /**
     * Set SGR value
     * @param \Sabre\UpdateReservation\StructType\SGR $sGR
     * @return \Sabre\UpdateReservation\StructType\GTR
     */
    public function setSGR(\Sabre\UpdateReservation\StructType\SGR $sGR = null)
    {
        $this->SGR = $sGR;
        return $this;
    }
    /**
     * Get GGR value
     * @return \Sabre\UpdateReservation\StructType\GGR|null
     */
    public function getGGR()
    {
        return $this->GGR;
    }
    /**
     * Set GGR value
     * @param \Sabre\UpdateReservation\StructType\GGR $gGR
     * @return \Sabre\UpdateReservation\StructType\GTR
     */
    public function setGGR(\Sabre\UpdateReservation\StructType\GGR $gGR = null)
    {
        $this->GGR = $gGR;
        return $this;
    }
    /**
     * Get FGR value
     * @return \Sabre\UpdateReservation\StructType\FGR|null
     */
    public function getFGR()
    {
        return $this->FGR;
    }
    /**
     * Set FGR value
     * @param \Sabre\UpdateReservation\StructType\FGR $fGR
     * @return \Sabre\UpdateReservation\StructType\GTR
     */
    public function setFGR(\Sabre\UpdateReservation\StructType\FGR $fGR = null)
    {
        $this->FGR = $fGR;
        return $this;
    }
    /**
     * Get BNumber value
     * @return string|null
     */
    public function getBNumber()
    {
        return $this->BNumber;
    }
    /**
     * Set BNumber value
     * @param string $bNumber
     * @return \Sabre\UpdateReservation\StructType\GTR
     */
    public function setBNumber($bNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bNumber) && !is_string($bNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bNumber)), __LINE__);
        }
        $this->BNumber = $bNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GTR
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
