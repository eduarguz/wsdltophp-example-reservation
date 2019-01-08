<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LangDetailsType StructType
 * @subpackage Structs
 */
class LangDetailsType extends AbstractStructBase
{
    /**
     * The Data
     * @var \Sabre\UpdateReservation\StructType\LangDataType
     */
    public $Data;
    /**
     * The MatchData
     * @var \Sabre\UpdateReservation\StructType\LangMatchDataType
     */
    public $MatchData;
    /**
     * The lang
     * @var string
     */
    public $lang;
    /**
     * Constructor method for LangDetailsType
     * @uses LangDetailsType::setData()
     * @uses LangDetailsType::setMatchData()
     * @uses LangDetailsType::setLang()
     * @param \Sabre\UpdateReservation\StructType\LangDataType $data
     * @param \Sabre\UpdateReservation\StructType\LangMatchDataType $matchData
     * @param string $lang
     */
    public function __construct(\Sabre\UpdateReservation\StructType\LangDataType $data = null, \Sabre\UpdateReservation\StructType\LangMatchDataType $matchData = null, $lang = null)
    {
        $this
            ->setData($data)
            ->setMatchData($matchData)
            ->setLang($lang);
    }
    /**
     * Get Data value
     * @return \Sabre\UpdateReservation\StructType\LangDataType|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param \Sabre\UpdateReservation\StructType\LangDataType $data
     * @return \Sabre\UpdateReservation\StructType\LangDetailsType
     */
    public function setData(\Sabre\UpdateReservation\StructType\LangDataType $data = null)
    {
        $this->Data = $data;
        return $this;
    }
    /**
     * Get MatchData value
     * @return \Sabre\UpdateReservation\StructType\LangMatchDataType|null
     */
    public function getMatchData()
    {
        return $this->MatchData;
    }
    /**
     * Set MatchData value
     * @param \Sabre\UpdateReservation\StructType\LangMatchDataType $matchData
     * @return \Sabre\UpdateReservation\StructType\LangDetailsType
     */
    public function setMatchData(\Sabre\UpdateReservation\StructType\LangMatchDataType $matchData = null)
    {
        $this->MatchData = $matchData;
        return $this;
    }
    /**
     * Get lang value
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \Sabre\UpdateReservation\StructType\LangDetailsType
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LangDetailsType
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
