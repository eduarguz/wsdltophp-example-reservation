<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectionDeliveryInfo StructType
 * @subpackage Structs
 */
class CollectionDeliveryInfo extends AbstractStructBase
{
    /**
     * The CollectionInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CollectionInfo
     */
    public $CollectionInfo;
    /**
     * The DeliveryInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DeliveryInfo
     */
    public $DeliveryInfo;
    /**
     * Constructor method for CollectionDeliveryInfo
     * @uses CollectionDeliveryInfo::setCollectionInfo()
     * @uses CollectionDeliveryInfo::setDeliveryInfo()
     * @param \Sabre\UpdateReservation\StructType\CollectionInfo $collectionInfo
     * @param \Sabre\UpdateReservation\StructType\DeliveryInfo $deliveryInfo
     */
    public function __construct(\Sabre\UpdateReservation\StructType\CollectionInfo $collectionInfo = null, \Sabre\UpdateReservation\StructType\DeliveryInfo $deliveryInfo = null)
    {
        $this
            ->setCollectionInfo($collectionInfo)
            ->setDeliveryInfo($deliveryInfo);
    }
    /**
     * Get CollectionInfo value
     * @return \Sabre\UpdateReservation\StructType\CollectionInfo|null
     */
    public function getCollectionInfo()
    {
        return $this->CollectionInfo;
    }
    /**
     * Set CollectionInfo value
     * @param \Sabre\UpdateReservation\StructType\CollectionInfo $collectionInfo
     * @return \Sabre\UpdateReservation\StructType\CollectionDeliveryInfo
     */
    public function setCollectionInfo(\Sabre\UpdateReservation\StructType\CollectionInfo $collectionInfo = null)
    {
        $this->CollectionInfo = $collectionInfo;
        return $this;
    }
    /**
     * Get DeliveryInfo value
     * @return \Sabre\UpdateReservation\StructType\DeliveryInfo|null
     */
    public function getDeliveryInfo()
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @param \Sabre\UpdateReservation\StructType\DeliveryInfo $deliveryInfo
     * @return \Sabre\UpdateReservation\StructType\CollectionDeliveryInfo
     */
    public function setDeliveryInfo(\Sabre\UpdateReservation\StructType\DeliveryInfo $deliveryInfo = null)
    {
        $this->DeliveryInfo = $deliveryInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CollectionDeliveryInfo
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
