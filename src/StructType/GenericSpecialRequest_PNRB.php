<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenericSpecialRequest.PNRB StructType
 * @subpackage Structs
 */
class GenericSpecialRequest_PNRB extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Code indicating the type of SSR that was sent. A = AFAX G = GFAX
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - documentation: Flight and freetext data. Ex."INFT EY 6883Y17JUL/UWGUT/MAXW/23JUN13 NN1"
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - documentation: Indication of the status of the SSR notification. A value of 'HK' indicates the intended carrier has received the message and has confirmed its contents. Ex. "HK"
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Number of passengers for whom the Special Service Request is being requested. Ex. "1" | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberInParty;
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: Carrier to whom the SSR/OSI message is being sent. Ex. "WS" | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter. | Preferred format for airline codes.
     * Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter.
     * - minOccurs: 0
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $AirlineCode;
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - documentation: Ticket number (or numbers in the case of conjunctive tickets) associated with the indicated ticket issuance/refund/exchange/void activity. SSR ticket number may contain the coupon number at the end of the ticket number. Tickets
     * issued by the hosted airline will not include the three character airline ticket indicator at the beginning of the ticket number. Ex. "8.38218E+12"
     * - minOccurs: 0
     * @var string
     */
    public $TicketNumber;
    /**
     * The FullText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FullText;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: A = AFAX G = GFAX
     * @var string
     */
    public $type;
    /**
     * The msgType
     * Meta informations extracted from the WSDL
     * - documentation: S = SSR O = OSI
     * @var string
     */
    public $msgType;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for GenericSpecialRequest.PNRB
     * @uses GenericSpecialRequest_PNRB::setCode()
     * @uses GenericSpecialRequest_PNRB::setFreeText()
     * @uses GenericSpecialRequest_PNRB::setActionCode()
     * @uses GenericSpecialRequest_PNRB::setNumberInParty()
     * @uses GenericSpecialRequest_PNRB::setAirlineCode()
     * @uses GenericSpecialRequest_PNRB::setTicketNumber()
     * @uses GenericSpecialRequest_PNRB::setFullText()
     * @uses GenericSpecialRequest_PNRB::setId()
     * @uses GenericSpecialRequest_PNRB::setType()
     * @uses GenericSpecialRequest_PNRB::setMsgType()
     * @uses GenericSpecialRequest_PNRB::setOp()
     * @uses GenericSpecialRequest_PNRB::setRPH()
     * @param string $code
     * @param string $freeText
     * @param string $actionCode
     * @param int $numberInParty
     * @param string $airlineCode
     * @param string $ticketNumber
     * @param string $fullText
     * @param string $id
     * @param string $type
     * @param string $msgType
     * @param string $op
     * @param string $rPH
     */
    public function __construct($code = null, $freeText = null, $actionCode = null, $numberInParty = null, $airlineCode = null, $ticketNumber = null, $fullText = null, $id = null, $type = null, $msgType = null, $op = null, $rPH = null)
    {
        $this
            ->setCode($code)
            ->setFreeText($freeText)
            ->setActionCode($actionCode)
            ->setNumberInParty($numberInParty)
            ->setAirlineCode($airlineCode)
            ->setTicketNumber($ticketNumber)
            ->setFullText($fullText)
            ->setId($id)
            ->setType($type)
            ->setMsgType($msgType)
            ->setOp($op)
            ->setRPH($rPH);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
        return $this;
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param int $numberInParty
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: maxInclusive
        if ($numberInParty > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberInParty < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
        return $this;
    }
    /**
     * Get AirlineCode value
     * @return string|null
     */
    public function getAirlineCode()
    {
        return $this->AirlineCode;
    }
    /**
     * Set AirlineCode value
     * @param string $airlineCode
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($airlineCode) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($airlineCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->AirlineCode = $airlineCode;
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Get FullText value
     * @return string|null
     */
    public function getFullText()
    {
        return $this->FullText;
    }
    /**
     * Set FullText value
     * @param string $fullText
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public function setFullText($fullText = null)
    {
        // validation for constraint: string
        if (!is_null($fullText) && !is_string($fullText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fullText)), __LINE__);
        }
        $this->FullText = $fullText;
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
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get msgType value
     * @return string|null
     */
    public function getMsgType()
    {
        return $this->msgType;
    }
    /**
     * Set msgType value
     * @uses \Sabre\UpdateReservation\EnumType\MsgType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\MsgType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $msgType
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public function setMsgType($msgType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\MsgType_PNRB::valueIsValid($msgType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $msgType, implode(', ', \Sabre\UpdateReservation\EnumType\MsgType_PNRB::getValidValues())), __LINE__);
        }
        $this->msgType = $msgType;
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
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
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
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB
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
