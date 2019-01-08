<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeInformation StructType
 * @subpackage Structs
 */
class FeeInformation extends AbstractStructBase
{
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - documentation: Service type.
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The OnlineInterlineService
     * Meta informations extracted from the WSDL
     * - documentation: Online interline service.
     * - minOccurs: 0
     * @var string
     */
    public $OnlineInterlineService;
    /**
     * The NonRefundableInd
     * Meta informations extracted from the WSDL
     * - documentation: Non-refundable indicator.
     * - minOccurs: 0
     * @var string
     */
    public $NonRefundableInd;
    /**
     * The NonCommissionInd
     * Meta informations extracted from the WSDL
     * - documentation: Non commission indicator.
     * - minOccurs: 0
     * @var string
     */
    public $NonCommissionInd;
    /**
     * The GuaranteeType
     * Meta informations extracted from the WSDL
     * - documentation: Guarantee type.
     * - minOccurs: 0
     * @var string
     */
    public $GuaranteeType;
    /**
     * The FunctionCode
     * Meta informations extracted from the WSDL
     * - documentation: Function code.
     * - minOccurs: 0
     * @var string
     */
    public $FunctionCode;
    /**
     * The DisplayOnOutputInd
     * Meta informations extracted from the WSDL
     * - documentation: Display on output Ind.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayOnOutputInd;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Amount.
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    /**
     * The AccountData
     * Meta informations extracted from the WSDL
     * - documentation: Account data.
     * - minOccurs: 0
     * @var string
     */
    public $AccountData;
    /**
     * The CurrenyCode
     * Meta informations extracted from the WSDL
     * - documentation: Ob Fee Currency Code.
     * - minOccurs: 0
     * @var string
     */
    public $CurrenyCode;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Ob Fee Description.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The WaiverCode
     * Meta informations extracted from the WSDL
     * - documentation: Waiver code.
     * - minOccurs: 0
     * @var string
     */
    public $WaiverCode;
    /**
     * Constructor method for FeeInformation
     * @uses FeeInformation::setServiceType()
     * @uses FeeInformation::setOnlineInterlineService()
     * @uses FeeInformation::setNonRefundableInd()
     * @uses FeeInformation::setNonCommissionInd()
     * @uses FeeInformation::setGuaranteeType()
     * @uses FeeInformation::setFunctionCode()
     * @uses FeeInformation::setDisplayOnOutputInd()
     * @uses FeeInformation::setAmount()
     * @uses FeeInformation::setAccountData()
     * @uses FeeInformation::setCurrenyCode()
     * @uses FeeInformation::setDescription()
     * @uses FeeInformation::setWaiverCode()
     * @param string $serviceType
     * @param string $onlineInterlineService
     * @param string $nonRefundableInd
     * @param string $nonCommissionInd
     * @param string $guaranteeType
     * @param string $functionCode
     * @param string $displayOnOutputInd
     * @param float $amount
     * @param string $accountData
     * @param string $currenyCode
     * @param string $description
     * @param string $waiverCode
     */
    public function __construct($serviceType = null, $onlineInterlineService = null, $nonRefundableInd = null, $nonCommissionInd = null, $guaranteeType = null, $functionCode = null, $displayOnOutputInd = null, $amount = null, $accountData = null, $currenyCode = null, $description = null, $waiverCode = null)
    {
        $this
            ->setServiceType($serviceType)
            ->setOnlineInterlineService($onlineInterlineService)
            ->setNonRefundableInd($nonRefundableInd)
            ->setNonCommissionInd($nonCommissionInd)
            ->setGuaranteeType($guaranteeType)
            ->setFunctionCode($functionCode)
            ->setDisplayOnOutputInd($displayOnOutputInd)
            ->setAmount($amount)
            ->setAccountData($accountData)
            ->setCurrenyCode($currenyCode)
            ->setDescription($description)
            ->setWaiverCode($waiverCode);
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Get OnlineInterlineService value
     * @return string|null
     */
    public function getOnlineInterlineService()
    {
        return $this->OnlineInterlineService;
    }
    /**
     * Set OnlineInterlineService value
     * @param string $onlineInterlineService
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setOnlineInterlineService($onlineInterlineService = null)
    {
        // validation for constraint: string
        if (!is_null($onlineInterlineService) && !is_string($onlineInterlineService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($onlineInterlineService)), __LINE__);
        }
        $this->OnlineInterlineService = $onlineInterlineService;
        return $this;
    }
    /**
     * Get NonRefundableInd value
     * @return string|null
     */
    public function getNonRefundableInd()
    {
        return $this->NonRefundableInd;
    }
    /**
     * Set NonRefundableInd value
     * @param string $nonRefundableInd
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setNonRefundableInd($nonRefundableInd = null)
    {
        // validation for constraint: string
        if (!is_null($nonRefundableInd) && !is_string($nonRefundableInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nonRefundableInd)), __LINE__);
        }
        $this->NonRefundableInd = $nonRefundableInd;
        return $this;
    }
    /**
     * Get NonCommissionInd value
     * @return string|null
     */
    public function getNonCommissionInd()
    {
        return $this->NonCommissionInd;
    }
    /**
     * Set NonCommissionInd value
     * @param string $nonCommissionInd
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setNonCommissionInd($nonCommissionInd = null)
    {
        // validation for constraint: string
        if (!is_null($nonCommissionInd) && !is_string($nonCommissionInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nonCommissionInd)), __LINE__);
        }
        $this->NonCommissionInd = $nonCommissionInd;
        return $this;
    }
    /**
     * Get GuaranteeType value
     * @return string|null
     */
    public function getGuaranteeType()
    {
        return $this->GuaranteeType;
    }
    /**
     * Set GuaranteeType value
     * @param string $guaranteeType
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setGuaranteeType($guaranteeType = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteeType) && !is_string($guaranteeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteeType)), __LINE__);
        }
        $this->GuaranteeType = $guaranteeType;
        return $this;
    }
    /**
     * Get FunctionCode value
     * @return string|null
     */
    public function getFunctionCode()
    {
        return $this->FunctionCode;
    }
    /**
     * Set FunctionCode value
     * @param string $functionCode
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setFunctionCode($functionCode = null)
    {
        // validation for constraint: string
        if (!is_null($functionCode) && !is_string($functionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($functionCode)), __LINE__);
        }
        $this->FunctionCode = $functionCode;
        return $this;
    }
    /**
     * Get DisplayOnOutputInd value
     * @return string|null
     */
    public function getDisplayOnOutputInd()
    {
        return $this->DisplayOnOutputInd;
    }
    /**
     * Set DisplayOnOutputInd value
     * @param string $displayOnOutputInd
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setDisplayOnOutputInd($displayOnOutputInd = null)
    {
        // validation for constraint: string
        if (!is_null($displayOnOutputInd) && !is_string($displayOnOutputInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayOnOutputInd)), __LINE__);
        }
        $this->DisplayOnOutputInd = $displayOnOutputInd;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get AccountData value
     * @return string|null
     */
    public function getAccountData()
    {
        return $this->AccountData;
    }
    /**
     * Set AccountData value
     * @param string $accountData
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setAccountData($accountData = null)
    {
        // validation for constraint: string
        if (!is_null($accountData) && !is_string($accountData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountData)), __LINE__);
        }
        $this->AccountData = $accountData;
        return $this;
    }
    /**
     * Get CurrenyCode value
     * @return string|null
     */
    public function getCurrenyCode()
    {
        return $this->CurrenyCode;
    }
    /**
     * Set CurrenyCode value
     * @param string $currenyCode
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setCurrenyCode($currenyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currenyCode) && !is_string($currenyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currenyCode)), __LINE__);
        }
        $this->CurrenyCode = $currenyCode;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return string|null
     */
    public function getWaiverCode()
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param string $waiverCode
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
     */
    public function setWaiverCode($waiverCode = null)
    {
        // validation for constraint: string
        if (!is_null($waiverCode) && !is_string($waiverCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($waiverCode)), __LINE__);
        }
        $this->WaiverCode = $waiverCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FeeInformation
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
