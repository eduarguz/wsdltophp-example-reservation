<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddresses.PNRB StructType
 * @subpackage Structs
 */
class EmailAddresses_PNRB extends AbstractStructBase
{
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\EmailAddress_PNRB[]
     */
    public $EmailAddress;
    /**
     * Constructor method for EmailAddresses.PNRB
     * @uses EmailAddresses_PNRB::setEmailAddress()
     * @param \Sabre\UpdateReservation\StructType\EmailAddress_PNRB[] $emailAddress
     */
    public function __construct(array $emailAddress = array())
    {
        $this
            ->setEmailAddress($emailAddress);
    }
    /**
     * Get EmailAddress value
     * @return \Sabre\UpdateReservation\StructType\EmailAddress_PNRB[]|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmailAddress_PNRB[] $emailAddress
     * @return \Sabre\UpdateReservation\StructType\EmailAddresses_PNRB
     */
    public function setEmailAddress(array $emailAddress = array())
    {
        foreach ($emailAddress as $emailAddresses_PNRBEmailAddressItem) {
            // validation for constraint: itemType
            if (!$emailAddresses_PNRBEmailAddressItem instanceof \Sabre\UpdateReservation\StructType\EmailAddress_PNRB) {
                throw new \InvalidArgumentException(sprintf('The EmailAddress property can only contain items of \Sabre\UpdateReservation\StructType\EmailAddress_PNRB, "%s" given', is_object($emailAddresses_PNRBEmailAddressItem) ? get_class($emailAddresses_PNRBEmailAddressItem) : gettype($emailAddresses_PNRBEmailAddressItem)), __LINE__);
            }
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Add item to EmailAddress value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmailAddress_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\EmailAddresses_PNRB
     */
    public function addToEmailAddress(\Sabre\UpdateReservation\StructType\EmailAddress_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\EmailAddress_PNRB) {
            throw new \InvalidArgumentException(sprintf('The EmailAddress property can only contain items of \Sabre\UpdateReservation\StructType\EmailAddress_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmailAddress[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\EmailAddresses_PNRB
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
