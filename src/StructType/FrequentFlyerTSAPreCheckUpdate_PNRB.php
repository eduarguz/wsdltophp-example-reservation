<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequentFlyerTSAPreCheckUpdate.PNRB StructType
 * @subpackage Structs
 */
class FrequentFlyerTSAPreCheckUpdate_PNRB extends AbstractStructBase
{
    /**
     * The NameAssociationList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB
     */
    public $NameAssociationList;
    /**
     * The SegmentAssociationList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB
     */
    public $SegmentAssociationList;
    /**
     * The Loyalty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public $Loyalty;
    /**
     * The TSAPreCheck
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TSAPreCheck_PNRB
     */
    public $TSAPreCheck;
    /**
     * The PassengerMetaData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerMetaData_PNRB
     */
    public $PassengerMetaData;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for FrequentFlyerTSAPreCheckUpdate.PNRB
     * @uses FrequentFlyerTSAPreCheckUpdate_PNRB::setNameAssociationList()
     * @uses FrequentFlyerTSAPreCheckUpdate_PNRB::setSegmentAssociationList()
     * @uses FrequentFlyerTSAPreCheckUpdate_PNRB::setLoyalty()
     * @uses FrequentFlyerTSAPreCheckUpdate_PNRB::setTSAPreCheck()
     * @uses FrequentFlyerTSAPreCheckUpdate_PNRB::setPassengerMetaData()
     * @uses FrequentFlyerTSAPreCheckUpdate_PNRB::setId()
     * @uses FrequentFlyerTSAPreCheckUpdate_PNRB::setOp()
     * @param \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList
     * @param \Sabre\UpdateReservation\StructType\Loyalty_PNRB $loyalty
     * @param \Sabre\UpdateReservation\StructType\TSAPreCheck_PNRB $tSAPreCheck
     * @param \Sabre\UpdateReservation\StructType\PassengerMetaData_PNRB $passengerMetaData
     * @param string $id
     * @param string $op
     */
    public function __construct(\Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null, \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList = null, \Sabre\UpdateReservation\StructType\Loyalty_PNRB $loyalty = null, \Sabre\UpdateReservation\StructType\TSAPreCheck_PNRB $tSAPreCheck = null, \Sabre\UpdateReservation\StructType\PassengerMetaData_PNRB $passengerMetaData = null, $id = null, $op = null)
    {
        $this
            ->setNameAssociationList($nameAssociationList)
            ->setSegmentAssociationList($segmentAssociationList)
            ->setLoyalty($loyalty)
            ->setTSAPreCheck($tSAPreCheck)
            ->setPassengerMetaData($passengerMetaData)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get NameAssociationList value
     * @return \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB|null
     */
    public function getNameAssociationList()
    {
        return $this->NameAssociationList;
    }
    /**
     * Set NameAssociationList value
     * @param \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB
     */
    public function setNameAssociationList(\Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null)
    {
        $this->NameAssociationList = $nameAssociationList;
        return $this;
    }
    /**
     * Get SegmentAssociationList value
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB|null
     */
    public function getSegmentAssociationList()
    {
        return $this->SegmentAssociationList;
    }
    /**
     * Set SegmentAssociationList value
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB
     */
    public function setSegmentAssociationList(\Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList = null)
    {
        $this->SegmentAssociationList = $segmentAssociationList;
        return $this;
    }
    /**
     * Get Loyalty value
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB|null
     */
    public function getLoyalty()
    {
        return $this->Loyalty;
    }
    /**
     * Set Loyalty value
     * @param \Sabre\UpdateReservation\StructType\Loyalty_PNRB $loyalty
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB
     */
    public function setLoyalty(\Sabre\UpdateReservation\StructType\Loyalty_PNRB $loyalty = null)
    {
        $this->Loyalty = $loyalty;
        return $this;
    }
    /**
     * Get TSAPreCheck value
     * @return \Sabre\UpdateReservation\StructType\TSAPreCheck_PNRB|null
     */
    public function getTSAPreCheck()
    {
        return $this->TSAPreCheck;
    }
    /**
     * Set TSAPreCheck value
     * @param \Sabre\UpdateReservation\StructType\TSAPreCheck_PNRB $tSAPreCheck
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB
     */
    public function setTSAPreCheck(\Sabre\UpdateReservation\StructType\TSAPreCheck_PNRB $tSAPreCheck = null)
    {
        $this->TSAPreCheck = $tSAPreCheck;
        return $this;
    }
    /**
     * Get PassengerMetaData value
     * @return \Sabre\UpdateReservation\StructType\PassengerMetaData_PNRB|null
     */
    public function getPassengerMetaData()
    {
        return $this->PassengerMetaData;
    }
    /**
     * Set PassengerMetaData value
     * @param \Sabre\UpdateReservation\StructType\PassengerMetaData_PNRB $passengerMetaData
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB
     */
    public function setPassengerMetaData(\Sabre\UpdateReservation\StructType\PassengerMetaData_PNRB $passengerMetaData = null)
    {
        $this->PassengerMetaData = $passengerMetaData;
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
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB
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
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB
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
