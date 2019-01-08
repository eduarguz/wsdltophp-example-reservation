<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtFrequentTravelerHistoryType StructType
 * @subpackage Structs
 */
class ExtFrequentTravelerHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The IsDXAIndirectCancel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDXAIndirectCancel;
    /**
     * The IsAAAModifiedItem
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAAAModifiedItem;
    /**
     * The ExFqtuType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExFqtuType;
    /**
     * The ItemType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemType;
    /**
     * The CancelledName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CancelledName;
    /**
     * The FqtvBasicData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public $FqtvBasicData;
    /**
     * The FqtvNameSpecificData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType
     */
    public $FqtvNameSpecificData;
    /**
     * Constructor method for ExtFrequentTravelerHistoryType
     * @uses ExtFrequentTravelerHistoryType::setHistoryAction()
     * @uses ExtFrequentTravelerHistoryType::setIsDXAIndirectCancel()
     * @uses ExtFrequentTravelerHistoryType::setIsAAAModifiedItem()
     * @uses ExtFrequentTravelerHistoryType::setExFqtuType()
     * @uses ExtFrequentTravelerHistoryType::setItemType()
     * @uses ExtFrequentTravelerHistoryType::setCancelledName()
     * @uses ExtFrequentTravelerHistoryType::setFqtvBasicData()
     * @uses ExtFrequentTravelerHistoryType::setFqtvNameSpecificData()
     * @param string $historyAction
     * @param bool $isDXAIndirectCancel
     * @param bool $isAAAModifiedItem
     * @param string $exFqtuType
     * @param string $itemType
     * @param string $cancelledName
     * @param \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType $fqtvBasicData
     * @param \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType $fqtvNameSpecificData
     */
    public function __construct($historyAction = null, $isDXAIndirectCancel = null, $isAAAModifiedItem = null, $exFqtuType = null, $itemType = null, $cancelledName = null, \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType $fqtvBasicData = null, \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType $fqtvNameSpecificData = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setIsDXAIndirectCancel($isDXAIndirectCancel)
            ->setIsAAAModifiedItem($isAAAModifiedItem)
            ->setExFqtuType($exFqtuType)
            ->setItemType($itemType)
            ->setCancelledName($cancelledName)
            ->setFqtvBasicData($fqtvBasicData)
            ->setFqtvNameSpecificData($fqtvNameSpecificData);
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
     * @return \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType
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
     * Get IsDXAIndirectCancel value
     * @return bool|null
     */
    public function getIsDXAIndirectCancel()
    {
        return $this->IsDXAIndirectCancel;
    }
    /**
     * Set IsDXAIndirectCancel value
     * @param bool $isDXAIndirectCancel
     * @return \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType
     */
    public function setIsDXAIndirectCancel($isDXAIndirectCancel = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDXAIndirectCancel) && !is_bool($isDXAIndirectCancel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDXAIndirectCancel)), __LINE__);
        }
        $this->IsDXAIndirectCancel = $isDXAIndirectCancel;
        return $this;
    }
    /**
     * Get IsAAAModifiedItem value
     * @return bool|null
     */
    public function getIsAAAModifiedItem()
    {
        return $this->IsAAAModifiedItem;
    }
    /**
     * Set IsAAAModifiedItem value
     * @param bool $isAAAModifiedItem
     * @return \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType
     */
    public function setIsAAAModifiedItem($isAAAModifiedItem = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAAAModifiedItem) && !is_bool($isAAAModifiedItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAAAModifiedItem)), __LINE__);
        }
        $this->IsAAAModifiedItem = $isAAAModifiedItem;
        return $this;
    }
    /**
     * Get ExFqtuType value
     * @return string|null
     */
    public function getExFqtuType()
    {
        return $this->ExFqtuType;
    }
    /**
     * Set ExFqtuType value
     * @param string $exFqtuType
     * @return \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType
     */
    public function setExFqtuType($exFqtuType = null)
    {
        // validation for constraint: string
        if (!is_null($exFqtuType) && !is_string($exFqtuType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exFqtuType)), __LINE__);
        }
        $this->ExFqtuType = $exFqtuType;
        return $this;
    }
    /**
     * Get ItemType value
     * @return string|null
     */
    public function getItemType()
    {
        return $this->ItemType;
    }
    /**
     * Set ItemType value
     * @param string $itemType
     * @return \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType
     */
    public function setItemType($itemType = null)
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemType)), __LINE__);
        }
        $this->ItemType = $itemType;
        return $this;
    }
    /**
     * Get CancelledName value
     * @return string|null
     */
    public function getCancelledName()
    {
        return $this->CancelledName;
    }
    /**
     * Set CancelledName value
     * @param string $cancelledName
     * @return \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType
     */
    public function setCancelledName($cancelledName = null)
    {
        // validation for constraint: string
        if (!is_null($cancelledName) && !is_string($cancelledName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelledName)), __LINE__);
        }
        $this->CancelledName = $cancelledName;
        return $this;
    }
    /**
     * Get FqtvBasicData value
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType|null
     */
    public function getFqtvBasicData()
    {
        return $this->FqtvBasicData;
    }
    /**
     * Set FqtvBasicData value
     * @param \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType $fqtvBasicData
     * @return \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType
     */
    public function setFqtvBasicData(\Sabre\UpdateReservation\StructType\FrequentTravelerBasicType $fqtvBasicData = null)
    {
        $this->FqtvBasicData = $fqtvBasicData;
        return $this;
    }
    /**
     * Get FqtvNameSpecificData value
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType|null
     */
    public function getFqtvNameSpecificData()
    {
        return $this->FqtvNameSpecificData;
    }
    /**
     * Set FqtvNameSpecificData value
     * @param \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType $fqtvNameSpecificData
     * @return \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType
     */
    public function setFqtvNameSpecificData(\Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType $fqtvNameSpecificData = null)
    {
        $this->FqtvNameSpecificData = $fqtvNameSpecificData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType
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
