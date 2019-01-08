<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingProductType StructType
 * @subpackage Structs
 */
class LodgingProductType extends AbstractStructBase
{
    /**
     * The ResGlobalInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public $ResGlobalInfo;
    /**
     * The Rooms
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Rooms
     */
    public $Rooms;
    /**
     * The SpecialInstructions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SpecialInstructions
     */
    public $SpecialInstructions;
    /**
     * The PaymentInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LodgingPaymentInformation
     */
    public $PaymentInformation;
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LodgingPOSType
     */
    public $POS;
    /**
     * The ValueAdds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ValueAdds
     */
    public $ValueAdds;
    /**
     * The VoucherInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VoucherInformation
     */
    public $VoucherInformation;
    /**
     * Constructor method for LodgingProductType
     * @uses LodgingProductType::setResGlobalInfo()
     * @uses LodgingProductType::setRooms()
     * @uses LodgingProductType::setSpecialInstructions()
     * @uses LodgingProductType::setPaymentInformation()
     * @uses LodgingProductType::setPOS()
     * @uses LodgingProductType::setValueAdds()
     * @uses LodgingProductType::setVoucherInformation()
     * @param \Sabre\UpdateReservation\StructType\ResGlobalInfoType $resGlobalInfo
     * @param \Sabre\UpdateReservation\StructType\Rooms $rooms
     * @param \Sabre\UpdateReservation\StructType\SpecialInstructions $specialInstructions
     * @param \Sabre\UpdateReservation\StructType\LodgingPaymentInformation $paymentInformation
     * @param \Sabre\UpdateReservation\StructType\LodgingPOSType $pOS
     * @param \Sabre\UpdateReservation\StructType\ValueAdds $valueAdds
     * @param \Sabre\UpdateReservation\StructType\VoucherInformation $voucherInformation
     */
    public function __construct(\Sabre\UpdateReservation\StructType\ResGlobalInfoType $resGlobalInfo = null, \Sabre\UpdateReservation\StructType\Rooms $rooms = null, \Sabre\UpdateReservation\StructType\SpecialInstructions $specialInstructions = null, \Sabre\UpdateReservation\StructType\LodgingPaymentInformation $paymentInformation = null, \Sabre\UpdateReservation\StructType\LodgingPOSType $pOS = null, \Sabre\UpdateReservation\StructType\ValueAdds $valueAdds = null, \Sabre\UpdateReservation\StructType\VoucherInformation $voucherInformation = null)
    {
        $this
            ->setResGlobalInfo($resGlobalInfo)
            ->setRooms($rooms)
            ->setSpecialInstructions($specialInstructions)
            ->setPaymentInformation($paymentInformation)
            ->setPOS($pOS)
            ->setValueAdds($valueAdds)
            ->setVoucherInformation($voucherInformation);
    }
    /**
     * Get ResGlobalInfo value
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType|null
     */
    public function getResGlobalInfo()
    {
        return $this->ResGlobalInfo;
    }
    /**
     * Set ResGlobalInfo value
     * @param \Sabre\UpdateReservation\StructType\ResGlobalInfoType $resGlobalInfo
     * @return \Sabre\UpdateReservation\StructType\LodgingProductType
     */
    public function setResGlobalInfo(\Sabre\UpdateReservation\StructType\ResGlobalInfoType $resGlobalInfo = null)
    {
        $this->ResGlobalInfo = $resGlobalInfo;
        return $this;
    }
    /**
     * Get Rooms value
     * @return \Sabre\UpdateReservation\StructType\Rooms|null
     */
    public function getRooms()
    {
        return $this->Rooms;
    }
    /**
     * Set Rooms value
     * @param \Sabre\UpdateReservation\StructType\Rooms $rooms
     * @return \Sabre\UpdateReservation\StructType\LodgingProductType
     */
    public function setRooms(\Sabre\UpdateReservation\StructType\Rooms $rooms = null)
    {
        $this->Rooms = $rooms;
        return $this;
    }
    /**
     * Get SpecialInstructions value
     * @return \Sabre\UpdateReservation\StructType\SpecialInstructions|null
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }
    /**
     * Set SpecialInstructions value
     * @param \Sabre\UpdateReservation\StructType\SpecialInstructions $specialInstructions
     * @return \Sabre\UpdateReservation\StructType\LodgingProductType
     */
    public function setSpecialInstructions(\Sabre\UpdateReservation\StructType\SpecialInstructions $specialInstructions = null)
    {
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Get PaymentInformation value
     * @return \Sabre\UpdateReservation\StructType\LodgingPaymentInformation|null
     */
    public function getPaymentInformation()
    {
        return $this->PaymentInformation;
    }
    /**
     * Set PaymentInformation value
     * @param \Sabre\UpdateReservation\StructType\LodgingPaymentInformation $paymentInformation
     * @return \Sabre\UpdateReservation\StructType\LodgingProductType
     */
    public function setPaymentInformation(\Sabre\UpdateReservation\StructType\LodgingPaymentInformation $paymentInformation = null)
    {
        $this->PaymentInformation = $paymentInformation;
        return $this;
    }
    /**
     * Get POS value
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSType|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Sabre\UpdateReservation\StructType\LodgingPOSType $pOS
     * @return \Sabre\UpdateReservation\StructType\LodgingProductType
     */
    public function setPOS(\Sabre\UpdateReservation\StructType\LodgingPOSType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get ValueAdds value
     * @return \Sabre\UpdateReservation\StructType\ValueAdds|null
     */
    public function getValueAdds()
    {
        return $this->ValueAdds;
    }
    /**
     * Set ValueAdds value
     * @param \Sabre\UpdateReservation\StructType\ValueAdds $valueAdds
     * @return \Sabre\UpdateReservation\StructType\LodgingProductType
     */
    public function setValueAdds(\Sabre\UpdateReservation\StructType\ValueAdds $valueAdds = null)
    {
        $this->ValueAdds = $valueAdds;
        return $this;
    }
    /**
     * Get VoucherInformation value
     * @return \Sabre\UpdateReservation\StructType\VoucherInformation|null
     */
    public function getVoucherInformation()
    {
        return $this->VoucherInformation;
    }
    /**
     * Set VoucherInformation value
     * @param \Sabre\UpdateReservation\StructType\VoucherInformation $voucherInformation
     * @return \Sabre\UpdateReservation\StructType\LodgingProductType
     */
    public function setVoucherInformation(\Sabre\UpdateReservation\StructType\VoucherInformation $voucherInformation = null)
    {
        $this->VoucherInformation = $voucherInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LodgingProductType
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
