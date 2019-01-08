<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemarkLine.PNRB StructType
 * @subpackage Structs
 */
class RemarkLine_PNRB extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The OriginalText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NativeLanguageValueType
     */
    public $OriginalText;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $index;
    /**
     * Constructor method for RemarkLine.PNRB
     * @uses RemarkLine_PNRB::setText()
     * @uses RemarkLine_PNRB::setOriginalText()
     * @uses RemarkLine_PNRB::setId()
     * @uses RemarkLine_PNRB::setIndex()
     * @param string $text
     * @param \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalText
     * @param string $id
     * @param int $index
     */
    public function __construct($text = null, \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalText = null, $id = null, $index = null)
    {
        $this
            ->setText($text)
            ->setOriginalText($originalText)
            ->setId($id)
            ->setIndex($index);
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Sabre\UpdateReservation\StructType\RemarkLine_PNRB
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get OriginalText value
     * @return \Sabre\UpdateReservation\StructType\NativeLanguageValueType|null
     */
    public function getOriginalText()
    {
        return $this->OriginalText;
    }
    /**
     * Set OriginalText value
     * @param \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalText
     * @return \Sabre\UpdateReservation\StructType\RemarkLine_PNRB
     */
    public function setOriginalText(\Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalText = null)
    {
        $this->OriginalText = $originalText;
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
     * @return \Sabre\UpdateReservation\StructType\RemarkLine_PNRB
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
     * Get index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Sabre\UpdateReservation\StructType\RemarkLine_PNRB
     */
    public function setIndex($index = null)
    {
        // validation for constraint: maxInclusive
        if ($index > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $index), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($index < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $index), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->index = $index;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RemarkLine_PNRB
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
