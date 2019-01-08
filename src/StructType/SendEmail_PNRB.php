<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendEmail.PNRB StructType
 * @subpackage Structs
 */
class SendEmail_PNRB extends AbstractStructBase
{
    /**
     * The sendEmail
     * @var bool
     */
    public $sendEmail;
    /**
     * The sendETicket
     * @var bool
     */
    public $sendETicket;
    /**
     * The sendItinerary
     * @var bool
     */
    public $sendItinerary;
    /**
     * The sendEInvoice
     * @var bool
     */
    public $sendEInvoice;
    /**
     * Constructor method for SendEmail.PNRB
     * @uses SendEmail_PNRB::setSendEmail()
     * @uses SendEmail_PNRB::setSendETicket()
     * @uses SendEmail_PNRB::setSendItinerary()
     * @uses SendEmail_PNRB::setSendEInvoice()
     * @param bool $sendEmail
     * @param bool $sendETicket
     * @param bool $sendItinerary
     * @param bool $sendEInvoice
     */
    public function __construct($sendEmail = null, $sendETicket = null, $sendItinerary = null, $sendEInvoice = null)
    {
        $this
            ->setSendEmail($sendEmail)
            ->setSendETicket($sendETicket)
            ->setSendItinerary($sendItinerary)
            ->setSendEInvoice($sendEInvoice);
    }
    /**
     * Get sendEmail value
     * @return bool|null
     */
    public function getSendEmail()
    {
        return $this->sendEmail;
    }
    /**
     * Set sendEmail value
     * @param bool $sendEmail
     * @return \Sabre\UpdateReservation\StructType\SendEmail_PNRB
     */
    public function setSendEmail($sendEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendEmail) && !is_bool($sendEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendEmail)), __LINE__);
        }
        $this->sendEmail = $sendEmail;
        return $this;
    }
    /**
     * Get sendETicket value
     * @return bool|null
     */
    public function getSendETicket()
    {
        return $this->sendETicket;
    }
    /**
     * Set sendETicket value
     * @param bool $sendETicket
     * @return \Sabre\UpdateReservation\StructType\SendEmail_PNRB
     */
    public function setSendETicket($sendETicket = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendETicket) && !is_bool($sendETicket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendETicket)), __LINE__);
        }
        $this->sendETicket = $sendETicket;
        return $this;
    }
    /**
     * Get sendItinerary value
     * @return bool|null
     */
    public function getSendItinerary()
    {
        return $this->sendItinerary;
    }
    /**
     * Set sendItinerary value
     * @param bool $sendItinerary
     * @return \Sabre\UpdateReservation\StructType\SendEmail_PNRB
     */
    public function setSendItinerary($sendItinerary = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendItinerary) && !is_bool($sendItinerary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendItinerary)), __LINE__);
        }
        $this->sendItinerary = $sendItinerary;
        return $this;
    }
    /**
     * Get sendEInvoice value
     * @return bool|null
     */
    public function getSendEInvoice()
    {
        return $this->sendEInvoice;
    }
    /**
     * Set sendEInvoice value
     * @param bool $sendEInvoice
     * @return \Sabre\UpdateReservation\StructType\SendEmail_PNRB
     */
    public function setSendEInvoice($sendEInvoice = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendEInvoice) && !is_bool($sendEInvoice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendEInvoice)), __LINE__);
        }
        $this->sendEInvoice = $sendEInvoice;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SendEmail_PNRB
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
