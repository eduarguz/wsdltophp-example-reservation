<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Error StructType
 * @subpackage Structs
 */
class Error extends AbstractStructBase
{
    /**
     * The errorCode
     * Meta informations extracted from the WSDL
     * - use: required
     * - minLength: 1
     * @var string
     */
    public $errorCode;
    /**
     * The severity
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $severity;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: tns:Description
     * @var \Sabre\UpdateReservation\StructType\Description
     */
    public $Description;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - ref: tns:id
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $id;
    /**
     * The codeContext
     * Meta informations extracted from the WSDL
     * - default: urn:oasis:names:tc:ebxml-msg:service:errors
     * @var string
     */
    public $codeContext;
    /**
     * The location
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $location;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The Severity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Severity;
    /**
     * The UpdateId
     * @var string
     */
    public $UpdateId;
    /**
     * Constructor method for Error
     * @uses Error::setErrorCode()
     * @uses Error::setSeverity()
     * @uses Error::setDescription()
     * @uses Error::setAny()
     * @uses Error::setId()
     * @uses Error::setCodeContext()
     * @uses Error::setLocation()
     * @uses Error::setCode()
     * @uses Error::setMessage()
     * @uses Error::setSeverity_1()
     * @uses Error::setUpdateId()
     * @param string $errorCode
     * @param string $severity
     * @param \Sabre\UpdateReservation\StructType\Description $description
     * @param \DOMDocument $any
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @param string $codeContext
     * @param string $location
     * @param string $code
     * @param string $message
     * @param string $severity
     * @param string $updateId
     */
    public function __construct($errorCode = null, $severity = null, \Sabre\UpdateReservation\StructType\Description $description = null, \DOMDocument $any = null, \Sabre\UpdateReservation\StructType\ID $id = null, $codeContext = 'urn:oasis:names:tc:ebxml-msg:service:errors', $location = null, $code = null, $message = null, $severity_1 = null, $updateId = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setSeverity($severity)
            ->setDescription($description)
            ->setAny($any)
            ->setId($id)
            ->setCodeContext($codeContext)
            ->setLocation($location)
            ->setCode($code)
            ->setMessage($message)
            ->setSeverity_1($severity_1)
            ->setUpdateId($updateId);
    }
    /**
     * Get errorCode value
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Sabre\UpdateReservation\StructType\Error
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($errorCode) && strlen($errorCode) < 1) || (is_array($errorCode) && count($errorCode) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get Severity value
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->severity;
    }
    /**
     * Set Severity value
     * @param string $severity
     * @return \Sabre\UpdateReservation\StructType\Error
     */
    public function setSeverity($severity = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\Severity_type::valueIsValid($severity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $severity, implode(', ', \Sabre\UpdateReservation\EnumType\Severity_type::getValidValues())), __LINE__);
        }
        $this->severity = $severity;
        return $this;
    }
    /**
     * Get Description value
     * @return \Sabre\UpdateReservation\StructType\Description|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \Sabre\UpdateReservation\StructType\Description $description
     * @return \Sabre\UpdateReservation\StructType\Error
     */
    public function setDescription(\Sabre\UpdateReservation\StructType\Description $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\Error::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \Sabre\UpdateReservation\StructType\Error
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get id value
     * @return \Sabre\UpdateReservation\StructType\ID|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @return \Sabre\UpdateReservation\StructType\Error
     */
    public function setId(\Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Get codeContext value
     * @return string|null
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }
    /**
     * Set codeContext value
     * @param string $codeContext
     * @return \Sabre\UpdateReservation\StructType\Error
     */
    public function setCodeContext($codeContext = 'urn:oasis:names:tc:ebxml-msg:service:errors')
    {
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->codeContext = $codeContext;
        return $this;
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \Sabre\UpdateReservation\StructType\Error
     */
    public function setLocation($location = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($location) && strlen($location) < 1) || (is_array($location) && count($location) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->location = $location;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\Error
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
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Sabre\UpdateReservation\StructType\Error
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get Severity value
     * @return string|null
     */
    public function getSeverity_1()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @param string $severity
     * @return \Sabre\UpdateReservation\StructType\Error
     */
    public function setSeverity_1($severity_1 = null)
    {
        // validation for constraint: string
        if (!is_null($severity_1) && !is_string($severity_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($severity_1)), __LINE__);
        }
        $this->Severity = $severity_1;
        return $this;
    }
    /**
     * Get UpdateId value
     * @return string|null
     */
    public function getUpdateId()
    {
        return $this->UpdateId;
    }
    /**
     * Set UpdateId value
     * @param string $updateId
     * @return \Sabre\UpdateReservation\StructType\Error
     */
    public function setUpdateId($updateId = null)
    {
        // validation for constraint: string
        if (!is_null($updateId) && !is_string($updateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateId)), __LINE__);
        }
        $this->UpdateId = $updateId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Error
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
