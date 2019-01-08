<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnOptions.PNRB StructType
 * @subpackage Structs
 */
class ReturnOptions_PNRB extends AbstractStructBase
{
    /**
     * The SubjectAreas
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SubjectAreas
     */
    public $SubjectAreas;
    /**
     * The ViewName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ViewName;
    /**
     * The ResponseFormat
     * Meta informations extracted from the WSDL
     * - default: STL
     * - minOccurs: 0
     * @var string
     */
    public $ResponseFormat;
    /**
     * The UnmaskCreditCard
     * Meta informations extracted from the WSDL
     * - default: false
     * @var bool
     */
    public $UnmaskCreditCard;
    /**
     * The ShowTicketStatus
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: "ShowTicketStatus" is for specifying whether user wants status for each ticket or not.
     * @var bool
     */
    public $ShowTicketStatus;
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - documentation: "Language" is used to translate attributes (like Cabin name).
     * - use: optional
     * @var string
     */
    public $Language;
    /**
     * The PriceQuoteServiceVersion
     * Meta informations extracted from the WSDL
     * - documentation: Defines version of service used to obtain Price Quote content.
     * @var string
     */
    public $PriceQuoteServiceVersion;
    /**
     * Constructor method for ReturnOptions.PNRB
     * @uses ReturnOptions_PNRB::setSubjectAreas()
     * @uses ReturnOptions_PNRB::setViewName()
     * @uses ReturnOptions_PNRB::setResponseFormat()
     * @uses ReturnOptions_PNRB::setUnmaskCreditCard()
     * @uses ReturnOptions_PNRB::setShowTicketStatus()
     * @uses ReturnOptions_PNRB::setLanguage()
     * @uses ReturnOptions_PNRB::setPriceQuoteServiceVersion()
     * @param \Sabre\UpdateReservation\StructType\SubjectAreas $subjectAreas
     * @param string $viewName
     * @param string $responseFormat
     * @param bool $unmaskCreditCard
     * @param bool $showTicketStatus
     * @param string $language
     * @param string $priceQuoteServiceVersion
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SubjectAreas $subjectAreas = null, $viewName = null, $responseFormat = 'STL', $unmaskCreditCard = false, $showTicketStatus = false, $language = null, $priceQuoteServiceVersion = null)
    {
        $this
            ->setSubjectAreas($subjectAreas)
            ->setViewName($viewName)
            ->setResponseFormat($responseFormat)
            ->setUnmaskCreditCard($unmaskCreditCard)
            ->setShowTicketStatus($showTicketStatus)
            ->setLanguage($language)
            ->setPriceQuoteServiceVersion($priceQuoteServiceVersion);
    }
    /**
     * Get SubjectAreas value
     * @return \Sabre\UpdateReservation\StructType\SubjectAreas|null
     */
    public function getSubjectAreas()
    {
        return $this->SubjectAreas;
    }
    /**
     * Set SubjectAreas value
     * @param \Sabre\UpdateReservation\StructType\SubjectAreas $subjectAreas
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions_PNRB
     */
    public function setSubjectAreas(\Sabre\UpdateReservation\StructType\SubjectAreas $subjectAreas = null)
    {
        $this->SubjectAreas = $subjectAreas;
        return $this;
    }
    /**
     * Get ViewName value
     * @return string|null
     */
    public function getViewName()
    {
        return $this->ViewName;
    }
    /**
     * Set ViewName value
     * @param string $viewName
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions_PNRB
     */
    public function setViewName($viewName = null)
    {
        // validation for constraint: string
        if (!is_null($viewName) && !is_string($viewName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($viewName)), __LINE__);
        }
        $this->ViewName = $viewName;
        return $this;
    }
    /**
     * Get ResponseFormat value
     * @return string|null
     */
    public function getResponseFormat()
    {
        return $this->ResponseFormat;
    }
    /**
     * Set ResponseFormat value
     * @param string $responseFormat
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions_PNRB
     */
    public function setResponseFormat($responseFormat = 'STL')
    {
        // validation for constraint: string
        if (!is_null($responseFormat) && !is_string($responseFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseFormat)), __LINE__);
        }
        $this->ResponseFormat = $responseFormat;
        return $this;
    }
    /**
     * Get UnmaskCreditCard value
     * @return bool|null
     */
    public function getUnmaskCreditCard()
    {
        return $this->UnmaskCreditCard;
    }
    /**
     * Set UnmaskCreditCard value
     * @param bool $unmaskCreditCard
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions_PNRB
     */
    public function setUnmaskCreditCard($unmaskCreditCard = false)
    {
        // validation for constraint: boolean
        if (!is_null($unmaskCreditCard) && !is_bool($unmaskCreditCard)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($unmaskCreditCard)), __LINE__);
        }
        $this->UnmaskCreditCard = $unmaskCreditCard;
        return $this;
    }
    /**
     * Get ShowTicketStatus value
     * @return bool|null
     */
    public function getShowTicketStatus()
    {
        return $this->ShowTicketStatus;
    }
    /**
     * Set ShowTicketStatus value
     * @param bool $showTicketStatus
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions_PNRB
     */
    public function setShowTicketStatus($showTicketStatus = false)
    {
        // validation for constraint: boolean
        if (!is_null($showTicketStatus) && !is_bool($showTicketStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showTicketStatus)), __LINE__);
        }
        $this->ShowTicketStatus = $showTicketStatus;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions_PNRB
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Get PriceQuoteServiceVersion value
     * @return string|null
     */
    public function getPriceQuoteServiceVersion()
    {
        return $this->PriceQuoteServiceVersion;
    }
    /**
     * Set PriceQuoteServiceVersion value
     * @param string $priceQuoteServiceVersion
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions_PNRB
     */
    public function setPriceQuoteServiceVersion($priceQuoteServiceVersion = null)
    {
        // validation for constraint: string
        if (!is_null($priceQuoteServiceVersion) && !is_string($priceQuoteServiceVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priceQuoteServiceVersion)), __LINE__);
        }
        $this->PriceQuoteServiceVersion = $priceQuoteServiceVersion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions_PNRB
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
