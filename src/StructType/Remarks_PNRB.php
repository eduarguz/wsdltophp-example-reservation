<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Remarks.PNRB StructType
 * @subpackage Structs
 */
class Remarks_PNRB extends AbstractStructBase
{
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Remark_PNRB[]
     */
    public $Remark;
    /**
     * The SymbolCodedRemark
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB[]
     */
    public $SymbolCodedRemark;
    /**
     * The PassportRemark
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassportRemark_PNRB[]
     */
    public $PassportRemark;
    /**
     * The QueueRemark
     * Meta informations extracted from the WSDL
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\QueueRemark_PNRB[]
     */
    public $QueueRemark;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB[]
     */
    public $Email;
    /**
     * Constructor method for Remarks.PNRB
     * @uses Remarks_PNRB::setRemark()
     * @uses Remarks_PNRB::setSymbolCodedRemark()
     * @uses Remarks_PNRB::setPassportRemark()
     * @uses Remarks_PNRB::setQueueRemark()
     * @uses Remarks_PNRB::setEmail()
     * @param \Sabre\UpdateReservation\StructType\Remark_PNRB[] $remark
     * @param \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB[] $symbolCodedRemark
     * @param \Sabre\UpdateReservation\StructType\PassportRemark_PNRB[] $passportRemark
     * @param \Sabre\UpdateReservation\StructType\QueueRemark_PNRB[] $queueRemark
     * @param \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB[] $email
     */
    public function __construct(array $remark = array(), array $symbolCodedRemark = array(), array $passportRemark = array(), array $queueRemark = array(), array $email = array())
    {
        $this
            ->setRemark($remark)
            ->setSymbolCodedRemark($symbolCodedRemark)
            ->setPassportRemark($passportRemark)
            ->setQueueRemark($queueRemark)
            ->setEmail($email);
    }
    /**
     * Get Remark value
     * @return \Sabre\UpdateReservation\StructType\Remark_PNRB[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Remark_PNRB[] $remark
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $remarks_PNRBRemarkItem) {
            // validation for constraint: itemType
            if (!$remarks_PNRBRemarkItem instanceof \Sabre\UpdateReservation\StructType\Remark_PNRB) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \Sabre\UpdateReservation\StructType\Remark_PNRB, "%s" given', is_object($remarks_PNRBRemarkItem) ? get_class($remarks_PNRBRemarkItem) : gettype($remarks_PNRBRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Remark_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public function addToRemark(\Sabre\UpdateReservation\StructType\Remark_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Remark_PNRB) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \Sabre\UpdateReservation\StructType\Remark_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Remark[] = $item;
        return $this;
    }
    /**
     * Get SymbolCodedRemark value
     * @return \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB[]|null
     */
    public function getSymbolCodedRemark()
    {
        return $this->SymbolCodedRemark;
    }
    /**
     * Set SymbolCodedRemark value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB[] $symbolCodedRemark
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public function setSymbolCodedRemark(array $symbolCodedRemark = array())
    {
        foreach ($symbolCodedRemark as $remarks_PNRBSymbolCodedRemarkItem) {
            // validation for constraint: itemType
            if (!$remarks_PNRBSymbolCodedRemarkItem instanceof \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB) {
                throw new \InvalidArgumentException(sprintf('The SymbolCodedRemark property can only contain items of \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB, "%s" given', is_object($remarks_PNRBSymbolCodedRemarkItem) ? get_class($remarks_PNRBSymbolCodedRemarkItem) : gettype($remarks_PNRBSymbolCodedRemarkItem)), __LINE__);
            }
        }
        $this->SymbolCodedRemark = $symbolCodedRemark;
        return $this;
    }
    /**
     * Add item to SymbolCodedRemark value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public function addToSymbolCodedRemark(\Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB) {
            throw new \InvalidArgumentException(sprintf('The SymbolCodedRemark property can only contain items of \Sabre\UpdateReservation\StructType\SymbolCodedRemark_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SymbolCodedRemark[] = $item;
        return $this;
    }
    /**
     * Get PassportRemark value
     * @return \Sabre\UpdateReservation\StructType\PassportRemark_PNRB[]|null
     */
    public function getPassportRemark()
    {
        return $this->PassportRemark;
    }
    /**
     * Set PassportRemark value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassportRemark_PNRB[] $passportRemark
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public function setPassportRemark(array $passportRemark = array())
    {
        foreach ($passportRemark as $remarks_PNRBPassportRemarkItem) {
            // validation for constraint: itemType
            if (!$remarks_PNRBPassportRemarkItem instanceof \Sabre\UpdateReservation\StructType\PassportRemark_PNRB) {
                throw new \InvalidArgumentException(sprintf('The PassportRemark property can only contain items of \Sabre\UpdateReservation\StructType\PassportRemark_PNRB, "%s" given', is_object($remarks_PNRBPassportRemarkItem) ? get_class($remarks_PNRBPassportRemarkItem) : gettype($remarks_PNRBPassportRemarkItem)), __LINE__);
            }
        }
        $this->PassportRemark = $passportRemark;
        return $this;
    }
    /**
     * Add item to PassportRemark value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassportRemark_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public function addToPassportRemark(\Sabre\UpdateReservation\StructType\PassportRemark_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PassportRemark_PNRB) {
            throw new \InvalidArgumentException(sprintf('The PassportRemark property can only contain items of \Sabre\UpdateReservation\StructType\PassportRemark_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PassportRemark[] = $item;
        return $this;
    }
    /**
     * Get QueueRemark value
     * @return \Sabre\UpdateReservation\StructType\QueueRemark_PNRB[]|null
     */
    public function getQueueRemark()
    {
        return $this->QueueRemark;
    }
    /**
     * Set QueueRemark value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\QueueRemark_PNRB[] $queueRemark
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public function setQueueRemark(array $queueRemark = array())
    {
        foreach ($queueRemark as $remarks_PNRBQueueRemarkItem) {
            // validation for constraint: itemType
            if (!$remarks_PNRBQueueRemarkItem instanceof \Sabre\UpdateReservation\StructType\QueueRemark_PNRB) {
                throw new \InvalidArgumentException(sprintf('The QueueRemark property can only contain items of \Sabre\UpdateReservation\StructType\QueueRemark_PNRB, "%s" given', is_object($remarks_PNRBQueueRemarkItem) ? get_class($remarks_PNRBQueueRemarkItem) : gettype($remarks_PNRBQueueRemarkItem)), __LINE__);
            }
        }
        $this->QueueRemark = $queueRemark;
        return $this;
    }
    /**
     * Add item to QueueRemark value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\QueueRemark_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public function addToQueueRemark(\Sabre\UpdateReservation\StructType\QueueRemark_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\QueueRemark_PNRB) {
            throw new \InvalidArgumentException(sprintf('The QueueRemark property can only contain items of \Sabre\UpdateReservation\StructType\QueueRemark_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QueueRemark[] = $item;
        return $this;
    }
    /**
     * Get Email value
     * @return \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB[]|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB[] $email
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $remarks_PNRBEmailItem) {
            // validation for constraint: itemType
            if (!$remarks_PNRBEmailItem instanceof \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB, "%s" given', is_object($remarks_PNRBEmailItem) ? get_class($remarks_PNRBEmailItem) : gettype($remarks_PNRBEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public function addToEmail(\Sabre\UpdateReservation\StructType\ReservationEmail_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB) {
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Email[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB
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
