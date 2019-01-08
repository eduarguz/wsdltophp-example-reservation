<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SkiCommonElementsType StructType
 * @subpackage Structs
 */
class SkiCommonElementsType extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Ski booking element description
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - documentation: Age in ski booking element
     * - minOccurs: 0
     * @var string
     */
    public $Age;
    /**
     * The CostPP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CostPP
     */
    public $CostPP;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: Ski booking element duration
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: OfSki bookingfer element name
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - documentation: Ski booking element notes
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - documentation: Level in Ski booking element
     * - minOccurs: 0
     * @var string
     */
    public $Level;
    /**
     * Constructor method for SkiCommonElementsType
     * @uses SkiCommonElementsType::setDescription()
     * @uses SkiCommonElementsType::setAge()
     * @uses SkiCommonElementsType::setCostPP()
     * @uses SkiCommonElementsType::setDuration()
     * @uses SkiCommonElementsType::setName()
     * @uses SkiCommonElementsType::setNotes()
     * @uses SkiCommonElementsType::setLevel()
     * @param string $description
     * @param string $age
     * @param \Sabre\UpdateReservation\StructType\CostPP $costPP
     * @param string $duration
     * @param string $name
     * @param string $notes
     * @param string $level
     */
    public function __construct($description = null, $age = null, \Sabre\UpdateReservation\StructType\CostPP $costPP = null, $duration = null, $name = null, $notes = null, $level = null)
    {
        $this
            ->setDescription($description)
            ->setAge($age)
            ->setCostPP($costPP)
            ->setDuration($duration)
            ->setName($name)
            ->setNotes($notes)
            ->setLevel($level);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param string $age
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public function setAge($age = null)
    {
        // validation for constraint: string
        if (!is_null($age) && !is_string($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Get CostPP value
     * @return \Sabre\UpdateReservation\StructType\CostPP|null
     */
    public function getCostPP()
    {
        return $this->CostPP;
    }
    /**
     * Set CostPP value
     * @param \Sabre\UpdateReservation\StructType\CostPP $costPP
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public function setCostPP(\Sabre\UpdateReservation\StructType\CostPP $costPP = null)
    {
        $this->CostPP = $costPP;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param string $level
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public function setLevel($level = null)
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($level)), __LINE__);
        }
        $this->Level = $level;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType
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
