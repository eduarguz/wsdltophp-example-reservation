<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceRequestType StructType
 * @subpackage Structs
 */
class ServiceRequestType extends AbstractStructBase
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The FullText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FullText;
    /**
     * The PassengerAddressInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation
     */
    public $PassengerAddressInformation;
    /**
     * The OtherSupplementaryInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation
     */
    public $OtherSupplementaryInformation;
    /**
     * The TravelDocument
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
     */
    public $TravelDocument;
    /**
     * The PassengerProvidedContactForPassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerProvidedContactForPassenger
     */
    public $PassengerProvidedContactForPassenger;
    /**
     * The PassengerContactEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactEmail
     */
    public $PassengerContactEmail;
    /**
     * The PassengerContactMobilePhone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactMobilePhone
     */
    public $PassengerContactMobilePhone;
    /**
     * The actionCode
     * Meta informations extracted from the WSDL
     * - documentation: NN,HK,KK ... etc.
     * @var string
     */
    public $actionCode;
    /**
     * The airlineCode
     * Meta informations extracted from the WSDL
     * - documentation: ex. EY
     * @var string
     */
    public $airlineCode;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: DOCS,DOCO ... etc.
     * @var string
     */
    public $code;
    /**
     * The serviceCount
     * Meta informations extracted from the WSDL
     * - documentation: count of service items
     * @var string
     */
    public $serviceCount;
    /**
     * The serviceType
     * Meta informations extracted from the WSDL
     * - documentation: OSI/SSR or O/S
     * @var string
     */
    public $serviceType;
    /**
     * The ssrType
     * Meta informations extracted from the WSDL
     * - documentation: AFX/GFX or A/G
     * @var string
     */
    public $ssrType;
    /**
     * Constructor method for ServiceRequestType
     * @uses ServiceRequestType::setComment()
     * @uses ServiceRequestType::setFreeText()
     * @uses ServiceRequestType::setFullText()
     * @uses ServiceRequestType::setPassengerAddressInformation()
     * @uses ServiceRequestType::setOtherSupplementaryInformation()
     * @uses ServiceRequestType::setTravelDocument()
     * @uses ServiceRequestType::setPassengerProvidedContactForPassenger()
     * @uses ServiceRequestType::setPassengerContactEmail()
     * @uses ServiceRequestType::setPassengerContactMobilePhone()
     * @uses ServiceRequestType::setActionCode()
     * @uses ServiceRequestType::setAirlineCode()
     * @uses ServiceRequestType::setCode()
     * @uses ServiceRequestType::setServiceCount()
     * @uses ServiceRequestType::setServiceType()
     * @uses ServiceRequestType::setSsrType()
     * @param string $comment
     * @param string $freeText
     * @param string $fullText
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation $passengerAddressInformation
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation $otherSupplementaryInformation
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument $travelDocument
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerProvidedContactForPassenger $passengerProvidedContactForPassenger
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactEmail $passengerContactEmail
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactMobilePhone $passengerContactMobilePhone
     * @param string $actionCode
     * @param string $airlineCode
     * @param string $code
     * @param string $serviceCount
     * @param string $serviceType
     * @param string $ssrType
     */
    public function __construct($comment = null, $freeText = null, $fullText = null, \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation $passengerAddressInformation = null, \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation $otherSupplementaryInformation = null, \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument $travelDocument = null, \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerProvidedContactForPassenger $passengerProvidedContactForPassenger = null, \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactEmail $passengerContactEmail = null, \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactMobilePhone $passengerContactMobilePhone = null, $actionCode = null, $airlineCode = null, $code = null, $serviceCount = null, $serviceType = null, $ssrType = null)
    {
        $this
            ->setComment($comment)
            ->setFreeText($freeText)
            ->setFullText($fullText)
            ->setPassengerAddressInformation($passengerAddressInformation)
            ->setOtherSupplementaryInformation($otherSupplementaryInformation)
            ->setTravelDocument($travelDocument)
            ->setPassengerProvidedContactForPassenger($passengerProvidedContactForPassenger)
            ->setPassengerContactEmail($passengerContactEmail)
            ->setPassengerContactMobilePhone($passengerContactMobilePhone)
            ->setActionCode($actionCode)
            ->setAirlineCode($airlineCode)
            ->setCode($code)
            ->setServiceCount($serviceCount)
            ->setServiceType($serviceType)
            ->setSsrType($ssrType);
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
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
     * Get PassengerAddressInformation value
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation|null
     */
    public function getPassengerAddressInformation()
    {
        return $this->PassengerAddressInformation;
    }
    /**
     * Set PassengerAddressInformation value
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation $passengerAddressInformation
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setPassengerAddressInformation(\Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation $passengerAddressInformation = null)
    {
        $this->PassengerAddressInformation = $passengerAddressInformation;
        return $this;
    }
    /**
     * Get OtherSupplementaryInformation value
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation|null
     */
    public function getOtherSupplementaryInformation()
    {
        return $this->OtherSupplementaryInformation;
    }
    /**
     * Set OtherSupplementaryInformation value
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation $otherSupplementaryInformation
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setOtherSupplementaryInformation(\Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation $otherSupplementaryInformation = null)
    {
        $this->OtherSupplementaryInformation = $otherSupplementaryInformation;
        return $this;
    }
    /**
     * Get TravelDocument value
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument|null
     */
    public function getTravelDocument()
    {
        return $this->TravelDocument;
    }
    /**
     * Set TravelDocument value
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument $travelDocument
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setTravelDocument(\Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument $travelDocument = null)
    {
        $this->TravelDocument = $travelDocument;
        return $this;
    }
    /**
     * Get PassengerProvidedContactForPassenger value
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerProvidedContactForPassenger|null
     */
    public function getPassengerProvidedContactForPassenger()
    {
        return $this->PassengerProvidedContactForPassenger;
    }
    /**
     * Set PassengerProvidedContactForPassenger value
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerProvidedContactForPassenger $passengerProvidedContactForPassenger
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setPassengerProvidedContactForPassenger(\Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerProvidedContactForPassenger $passengerProvidedContactForPassenger = null)
    {
        $this->PassengerProvidedContactForPassenger = $passengerProvidedContactForPassenger;
        return $this;
    }
    /**
     * Get PassengerContactEmail value
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactEmail|null
     */
    public function getPassengerContactEmail()
    {
        return $this->PassengerContactEmail;
    }
    /**
     * Set PassengerContactEmail value
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactEmail $passengerContactEmail
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setPassengerContactEmail(\Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactEmail $passengerContactEmail = null)
    {
        $this->PassengerContactEmail = $passengerContactEmail;
        return $this;
    }
    /**
     * Get PassengerContactMobilePhone value
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactMobilePhone|null
     */
    public function getPassengerContactMobilePhone()
    {
        return $this->PassengerContactMobilePhone;
    }
    /**
     * Set PassengerContactMobilePhone value
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactMobilePhone $passengerContactMobilePhone
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setPassengerContactMobilePhone(\Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerContactMobilePhone $passengerContactMobilePhone = null)
    {
        $this->PassengerContactMobilePhone = $passengerContactMobilePhone;
        return $this;
    }
    /**
     * Get actionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }
    /**
     * Set actionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->actionCode = $actionCode;
        return $this;
    }
    /**
     * Get airlineCode value
     * @return string|null
     */
    public function getAirlineCode()
    {
        return $this->airlineCode;
    }
    /**
     * Set airlineCode value
     * @param string $airlineCode
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->airlineCode = $airlineCode;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get serviceCount value
     * @return string|null
     */
    public function getServiceCount()
    {
        return $this->serviceCount;
    }
    /**
     * Set serviceCount value
     * @param string $serviceCount
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setServiceCount($serviceCount = null)
    {
        // validation for constraint: string
        if (!is_null($serviceCount) && !is_string($serviceCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceCount)), __LINE__);
        }
        $this->serviceCount = $serviceCount;
        return $this;
    }
    /**
     * Get serviceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }
    /**
     * Set serviceType value
     * @param string $serviceType
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceType)), __LINE__);
        }
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Get ssrType value
     * @return string|null
     */
    public function getSsrType()
    {
        return $this->ssrType;
    }
    /**
     * Set ssrType value
     * @param string $ssrType
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public function setSsrType($ssrType = null)
    {
        // validation for constraint: string
        if (!is_null($ssrType) && !is_string($ssrType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ssrType)), __LINE__);
        }
        $this->ssrType = $ssrType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType
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
