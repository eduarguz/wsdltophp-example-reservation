<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceData StructType
 * Meta informations extracted from the WSDL
 * - type: InvoiceData
 * @subpackage Structs
 */
class InvoiceData extends AbstractStructBase
{
    /**
     * The SnapshotId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SnapshotId;
    /**
     * The InvoiceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceId;
    /**
     * The InvoiceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InvoiceNumber;
    /**
     * The InvoiceCreateDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceCreateDate;
    /**
     * The DkNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DkNumber;
    /**
     * The TravellerLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravellerLastName;
    /**
     * The TravellerFirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravellerFirstName;
    /**
     * The TravellerName
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociationTag[]
     */
    public $TravellerName;
    /**
     * The AccountingLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AccountingLine;
    /**
     * The SegmentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SegmentNumber;
    /**
     * Constructor method for InvoiceData
     * @uses InvoiceData::setSnapshotId()
     * @uses InvoiceData::setInvoiceId()
     * @uses InvoiceData::setInvoiceNumber()
     * @uses InvoiceData::setInvoiceCreateDate()
     * @uses InvoiceData::setDkNumber()
     * @uses InvoiceData::setTravellerLastName()
     * @uses InvoiceData::setTravellerFirstName()
     * @uses InvoiceData::setTravellerName()
     * @uses InvoiceData::setAccountingLine()
     * @uses InvoiceData::setSegmentNumber()
     * @param string $snapshotId
     * @param string $invoiceId
     * @param int $invoiceNumber
     * @param string $invoiceCreateDate
     * @param string $dkNumber
     * @param string $travellerLastName
     * @param string $travellerFirstName
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag[] $travellerName
     * @param string[] $accountingLine
     * @param string[] $segmentNumber
     */
    public function __construct($snapshotId = null, $invoiceId = null, $invoiceNumber = null, $invoiceCreateDate = null, $dkNumber = null, $travellerLastName = null, $travellerFirstName = null, array $travellerName = array(), array $accountingLine = array(), array $segmentNumber = array())
    {
        $this
            ->setSnapshotId($snapshotId)
            ->setInvoiceId($invoiceId)
            ->setInvoiceNumber($invoiceNumber)
            ->setInvoiceCreateDate($invoiceCreateDate)
            ->setDkNumber($dkNumber)
            ->setTravellerLastName($travellerLastName)
            ->setTravellerFirstName($travellerFirstName)
            ->setTravellerName($travellerName)
            ->setAccountingLine($accountingLine)
            ->setSegmentNumber($segmentNumber);
    }
    /**
     * Get SnapshotId value
     * @return string|null
     */
    public function getSnapshotId()
    {
        return $this->SnapshotId;
    }
    /**
     * Set SnapshotId value
     * @param string $snapshotId
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function setSnapshotId($snapshotId = null)
    {
        // validation for constraint: string
        if (!is_null($snapshotId) && !is_string($snapshotId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($snapshotId)), __LINE__);
        }
        $this->SnapshotId = $snapshotId;
        return $this;
    }
    /**
     * Get InvoiceId value
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->InvoiceId;
    }
    /**
     * Set InvoiceId value
     * @param string $invoiceId
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function setInvoiceId($invoiceId = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceId) && !is_string($invoiceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceId)), __LINE__);
        }
        $this->InvoiceId = $invoiceId;
        return $this;
    }
    /**
     * Get InvoiceNumber value
     * @return int|null
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }
    /**
     * Set InvoiceNumber value
     * @param int $invoiceNumber
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function setInvoiceNumber($invoiceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($invoiceNumber) && !is_numeric($invoiceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($invoiceNumber)), __LINE__);
        }
        $this->InvoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * Get InvoiceCreateDate value
     * @return string|null
     */
    public function getInvoiceCreateDate()
    {
        return $this->InvoiceCreateDate;
    }
    /**
     * Set InvoiceCreateDate value
     * @param string $invoiceCreateDate
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function setInvoiceCreateDate($invoiceCreateDate = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceCreateDate) && !is_string($invoiceCreateDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceCreateDate)), __LINE__);
        }
        $this->InvoiceCreateDate = $invoiceCreateDate;
        return $this;
    }
    /**
     * Get DkNumber value
     * @return string|null
     */
    public function getDkNumber()
    {
        return $this->DkNumber;
    }
    /**
     * Set DkNumber value
     * @param string $dkNumber
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function setDkNumber($dkNumber = null)
    {
        // validation for constraint: string
        if (!is_null($dkNumber) && !is_string($dkNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dkNumber)), __LINE__);
        }
        $this->DkNumber = $dkNumber;
        return $this;
    }
    /**
     * Get TravellerLastName value
     * @return string|null
     */
    public function getTravellerLastName()
    {
        return $this->TravellerLastName;
    }
    /**
     * Set TravellerLastName value
     * @param string $travellerLastName
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function setTravellerLastName($travellerLastName = null)
    {
        // validation for constraint: string
        if (!is_null($travellerLastName) && !is_string($travellerLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travellerLastName)), __LINE__);
        }
        $this->TravellerLastName = $travellerLastName;
        return $this;
    }
    /**
     * Get TravellerFirstName value
     * @return string|null
     */
    public function getTravellerFirstName()
    {
        return $this->TravellerFirstName;
    }
    /**
     * Set TravellerFirstName value
     * @param string $travellerFirstName
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function setTravellerFirstName($travellerFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($travellerFirstName) && !is_string($travellerFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travellerFirstName)), __LINE__);
        }
        $this->TravellerFirstName = $travellerFirstName;
        return $this;
    }
    /**
     * Get TravellerName value
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag[]|null
     */
    public function getTravellerName()
    {
        return $this->TravellerName;
    }
    /**
     * Set TravellerName value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag[] $travellerName
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function setTravellerName(array $travellerName = array())
    {
        foreach ($travellerName as $invoiceDataTravellerNameItem) {
            // validation for constraint: itemType
            if (!$invoiceDataTravellerNameItem instanceof \Sabre\UpdateReservation\StructType\NameAssociationTag) {
                throw new \InvalidArgumentException(sprintf('The TravellerName property can only contain items of \Sabre\UpdateReservation\StructType\NameAssociationTag, "%s" given', is_object($invoiceDataTravellerNameItem) ? get_class($invoiceDataTravellerNameItem) : gettype($invoiceDataTravellerNameItem)), __LINE__);
            }
        }
        $this->TravellerName = $travellerName;
        return $this;
    }
    /**
     * Add item to TravellerName value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag $item
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function addToTravellerName(\Sabre\UpdateReservation\StructType\NameAssociationTag $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\NameAssociationTag) {
            throw new \InvalidArgumentException(sprintf('The TravellerName property can only contain items of \Sabre\UpdateReservation\StructType\NameAssociationTag, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravellerName[] = $item;
        return $this;
    }
    /**
     * Get AccountingLine value
     * @return string[]|null
     */
    public function getAccountingLine()
    {
        return $this->AccountingLine;
    }
    /**
     * Set AccountingLine value
     * @throws \InvalidArgumentException
     * @param string[] $accountingLine
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function setAccountingLine(array $accountingLine = array())
    {
        foreach ($accountingLine as $invoiceDataAccountingLineItem) {
            // validation for constraint: itemType
            if (!is_string($invoiceDataAccountingLineItem)) {
                throw new \InvalidArgumentException(sprintf('The AccountingLine property can only contain items of string, "%s" given', is_object($invoiceDataAccountingLineItem) ? get_class($invoiceDataAccountingLineItem) : gettype($invoiceDataAccountingLineItem)), __LINE__);
            }
        }
        $this->AccountingLine = $accountingLine;
        return $this;
    }
    /**
     * Add item to AccountingLine value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function addToAccountingLine($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AccountingLine property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AccountingLine[] = $item;
        return $this;
    }
    /**
     * Get SegmentNumber value
     * @return string[]|null
     */
    public function getSegmentNumber()
    {
        return $this->SegmentNumber;
    }
    /**
     * Set SegmentNumber value
     * @throws \InvalidArgumentException
     * @param string[] $segmentNumber
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function setSegmentNumber(array $segmentNumber = array())
    {
        foreach ($segmentNumber as $invoiceDataSegmentNumberItem) {
            // validation for constraint: itemType
            if (!is_string($invoiceDataSegmentNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The SegmentNumber property can only contain items of string, "%s" given', is_object($invoiceDataSegmentNumberItem) ? get_class($invoiceDataSegmentNumberItem) : gettype($invoiceDataSegmentNumberItem)), __LINE__);
            }
        }
        $this->SegmentNumber = $segmentNumber;
        return $this;
    }
    /**
     * Add item to SegmentNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public function addToSegmentNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SegmentNumber property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SegmentNumber[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\InvoiceData
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
