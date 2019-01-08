<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenReservationElementType StructType
 * @subpackage Structs
 */
class OpenReservationElementType extends AbstractStructBase
{
    /**
     * The SocialMediaContact
     * Meta informations extracted from the WSDL
     * - ref: SocialMediaContact
     * @var \Sabre\UpdateReservation\StructType\SocialMediaContactType
     */
    public $SocialMediaContact;
    /**
     * The AgencyFees
     * Meta informations extracted from the WSDL
     * - ref: AgencyFees
     * @var \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public $AgencyFees;
    /**
     * The LangDetails
     * Meta informations extracted from the WSDL
     * - ref: LangDetails
     * @var \Sabre\UpdateReservation\StructType\LangDetailsType
     */
    public $LangDetails;
    /**
     * The FormOfPayment
     * Meta informations extracted from the WSDL
     * - ref: FormOfPayment
     * @var \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public $FormOfPayment;
    /**
     * The Loyalty
     * Meta informations extracted from the WSDL
     * - ref: Loyalty
     * @var \Sabre\UpdateReservation\StructType\Loyalty
     */
    public $Loyalty;
    /**
     * The AncillaryProduct
     * Meta informations extracted from the WSDL
     * - ref: AncillaryProduct
     * @var \Sabre\UpdateReservation\StructType\AncillaryProductObject
     */
    public $AncillaryProduct;
    /**
     * The InvoiceData
     * Meta informations extracted from the WSDL
     * - ref: InvoiceData
     * @var \Sabre\UpdateReservation\StructType\InvoiceData
     */
    public $InvoiceData;
    /**
     * The AccountingField
     * Meta informations extracted from the WSDL
     * - ref: AccountingField
     * @var \Sabre\UpdateReservation\StructType\AccountingField
     */
    public $AccountingField;
    /**
     * The ServiceRequest
     * Meta informations extracted from the WSDL
     * - ref: ServiceRequest
     * @var \Sabre\UpdateReservation\StructType\ServiceRequestType
     */
    public $ServiceRequest;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - ref: Email
     * @var \Sabre\UpdateReservation\StructType\Email
     */
    public $Email;
    /**
     * The PriceCache
     * Meta informations extracted from the WSDL
     * - ref: PriceCache
     * @var \Sabre\UpdateReservation\StructType\PriceCache
     */
    public $PriceCache;
    /**
     * The TripProposalReference
     * Meta informations extracted from the WSDL
     * - ref: TripProposalReference
     * @var \Sabre\UpdateReservation\StructType\TripProposalReference
     */
    public $TripProposalReference;
    /**
     * The InsuranceOptOut
     * Meta informations extracted from the WSDL
     * - ref: InsuranceOptOut
     * @var \Sabre\UpdateReservation\StructType\InsuranceOptOut
     */
    public $InsuranceOptOut;
    /**
     * The Profile
     * Meta informations extracted from the WSDL
     * - ref: Profile
     * @var \Sabre\UpdateReservation\StructType\ProfileType
     */
    public $Profile;
    /**
     * The Review
     * Meta informations extracted from the WSDL
     * - ref: Review
     * @var \Sabre\UpdateReservation\StructType\Review
     */
    public $Review;
    /**
     * The SegmentAssociation
     * @var \Sabre\UpdateReservation\StructType\SegmentAssociation
     */
    public $SegmentAssociation;
    /**
     * The NameAssociation
     * @var \Sabre\UpdateReservation\StructType\NameAssociationTag
     */
    public $NameAssociation;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - documentation: hold reference ID
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: open reservation element type, like SF for Agency Fees
     * @var string
     */
    public $type;
    /**
     * The displayIndex
     * Meta informations extracted from the WSDL
     * - documentation: used to order items sequentially for presentation purposes
     * - use: optional
     * @var int
     */
    public $displayIndex;
    /**
     * The elementId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $elementId;
    /**
     * The transient
     * Meta informations extracted from the WSDL
     * - documentation: true value indicates that element will not be saved at ET
     * - use: optional
     * @var bool
     */
    public $transient;
    /**
     * Constructor method for OpenReservationElementType
     * @uses OpenReservationElementType::setSocialMediaContact()
     * @uses OpenReservationElementType::setAgencyFees()
     * @uses OpenReservationElementType::setLangDetails()
     * @uses OpenReservationElementType::setFormOfPayment()
     * @uses OpenReservationElementType::setLoyalty()
     * @uses OpenReservationElementType::setAncillaryProduct()
     * @uses OpenReservationElementType::setInvoiceData()
     * @uses OpenReservationElementType::setAccountingField()
     * @uses OpenReservationElementType::setServiceRequest()
     * @uses OpenReservationElementType::setEmail()
     * @uses OpenReservationElementType::setPriceCache()
     * @uses OpenReservationElementType::setTripProposalReference()
     * @uses OpenReservationElementType::setInsuranceOptOut()
     * @uses OpenReservationElementType::setProfile()
     * @uses OpenReservationElementType::setReview()
     * @uses OpenReservationElementType::setSegmentAssociation()
     * @uses OpenReservationElementType::setNameAssociation()
     * @uses OpenReservationElementType::setId()
     * @uses OpenReservationElementType::setType()
     * @uses OpenReservationElementType::setDisplayIndex()
     * @uses OpenReservationElementType::setElementId()
     * @uses OpenReservationElementType::setTransient()
     * @param \Sabre\UpdateReservation\StructType\SocialMediaContactType $socialMediaContact
     * @param \Sabre\UpdateReservation\StructType\AgencyFeesType $agencyFees
     * @param \Sabre\UpdateReservation\StructType\LangDetailsType $langDetails
     * @param \Sabre\UpdateReservation\StructType\FormOfPayment $formOfPayment
     * @param \Sabre\UpdateReservation\StructType\Loyalty $loyalty
     * @param \Sabre\UpdateReservation\StructType\AncillaryProductObject $ancillaryProduct
     * @param \Sabre\UpdateReservation\StructType\InvoiceData $invoiceData
     * @param \Sabre\UpdateReservation\StructType\AccountingField $accountingField
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType $serviceRequest
     * @param \Sabre\UpdateReservation\StructType\Email $email
     * @param \Sabre\UpdateReservation\StructType\PriceCache $priceCache
     * @param \Sabre\UpdateReservation\StructType\TripProposalReference $tripProposalReference
     * @param \Sabre\UpdateReservation\StructType\InsuranceOptOut $insuranceOptOut
     * @param \Sabre\UpdateReservation\StructType\ProfileType $profile
     * @param \Sabre\UpdateReservation\StructType\Review $review
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociation $segmentAssociation
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag $nameAssociation
     * @param string $id
     * @param string $type
     * @param int $displayIndex
     * @param string $elementId
     * @param bool $transient
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SocialMediaContactType $socialMediaContact = null, \Sabre\UpdateReservation\StructType\AgencyFeesType $agencyFees = null, \Sabre\UpdateReservation\StructType\LangDetailsType $langDetails = null, \Sabre\UpdateReservation\StructType\FormOfPayment $formOfPayment = null, \Sabre\UpdateReservation\StructType\Loyalty $loyalty = null, \Sabre\UpdateReservation\StructType\AncillaryProductObject $ancillaryProduct = null, \Sabre\UpdateReservation\StructType\InvoiceData $invoiceData = null, \Sabre\UpdateReservation\StructType\AccountingField $accountingField = null, \Sabre\UpdateReservation\StructType\ServiceRequestType $serviceRequest = null, \Sabre\UpdateReservation\StructType\Email $email = null, \Sabre\UpdateReservation\StructType\PriceCache $priceCache = null, \Sabre\UpdateReservation\StructType\TripProposalReference $tripProposalReference = null, \Sabre\UpdateReservation\StructType\InsuranceOptOut $insuranceOptOut = null, \Sabre\UpdateReservation\StructType\ProfileType $profile = null, \Sabre\UpdateReservation\StructType\Review $review = null, \Sabre\UpdateReservation\StructType\SegmentAssociation $segmentAssociation = null, \Sabre\UpdateReservation\StructType\NameAssociationTag $nameAssociation = null, $id = null, $type = null, $displayIndex = null, $elementId = null, $transient = null)
    {
        $this
            ->setSocialMediaContact($socialMediaContact)
            ->setAgencyFees($agencyFees)
            ->setLangDetails($langDetails)
            ->setFormOfPayment($formOfPayment)
            ->setLoyalty($loyalty)
            ->setAncillaryProduct($ancillaryProduct)
            ->setInvoiceData($invoiceData)
            ->setAccountingField($accountingField)
            ->setServiceRequest($serviceRequest)
            ->setEmail($email)
            ->setPriceCache($priceCache)
            ->setTripProposalReference($tripProposalReference)
            ->setInsuranceOptOut($insuranceOptOut)
            ->setProfile($profile)
            ->setReview($review)
            ->setSegmentAssociation($segmentAssociation)
            ->setNameAssociation($nameAssociation)
            ->setId($id)
            ->setType($type)
            ->setDisplayIndex($displayIndex)
            ->setElementId($elementId)
            ->setTransient($transient);
    }
    /**
     * Get SocialMediaContact value
     * @return \Sabre\UpdateReservation\StructType\SocialMediaContactType|null
     */
    public function getSocialMediaContact()
    {
        return $this->SocialMediaContact;
    }
    /**
     * Set SocialMediaContact value
     * @param \Sabre\UpdateReservation\StructType\SocialMediaContactType $socialMediaContact
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setSocialMediaContact(\Sabre\UpdateReservation\StructType\SocialMediaContactType $socialMediaContact = null)
    {
        $this->SocialMediaContact = $socialMediaContact;
        return $this;
    }
    /**
     * Get AgencyFees value
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType|null
     */
    public function getAgencyFees()
    {
        return $this->AgencyFees;
    }
    /**
     * Set AgencyFees value
     * @param \Sabre\UpdateReservation\StructType\AgencyFeesType $agencyFees
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setAgencyFees(\Sabre\UpdateReservation\StructType\AgencyFeesType $agencyFees = null)
    {
        $this->AgencyFees = $agencyFees;
        return $this;
    }
    /**
     * Get LangDetails value
     * @return \Sabre\UpdateReservation\StructType\LangDetailsType|null
     */
    public function getLangDetails()
    {
        return $this->LangDetails;
    }
    /**
     * Set LangDetails value
     * @param \Sabre\UpdateReservation\StructType\LangDetailsType $langDetails
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setLangDetails(\Sabre\UpdateReservation\StructType\LangDetailsType $langDetails = null)
    {
        $this->LangDetails = $langDetails;
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment|null
     */
    public function getFormOfPayment()
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Sabre\UpdateReservation\StructType\FormOfPayment $formOfPayment
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setFormOfPayment(\Sabre\UpdateReservation\StructType\FormOfPayment $formOfPayment = null)
    {
        $this->FormOfPayment = $formOfPayment;
        return $this;
    }
    /**
     * Get Loyalty value
     * @return \Sabre\UpdateReservation\StructType\Loyalty|null
     */
    public function getLoyalty()
    {
        return $this->Loyalty;
    }
    /**
     * Set Loyalty value
     * @param \Sabre\UpdateReservation\StructType\Loyalty $loyalty
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setLoyalty(\Sabre\UpdateReservation\StructType\Loyalty $loyalty = null)
    {
        $this->Loyalty = $loyalty;
        return $this;
    }
    /**
     * Get AncillaryProduct value
     * @return \Sabre\UpdateReservation\StructType\AncillaryProductObject|null
     */
    public function getAncillaryProduct()
    {
        return $this->AncillaryProduct;
    }
    /**
     * Set AncillaryProduct value
     * @param \Sabre\UpdateReservation\StructType\AncillaryProductObject $ancillaryProduct
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setAncillaryProduct(\Sabre\UpdateReservation\StructType\AncillaryProductObject $ancillaryProduct = null)
    {
        $this->AncillaryProduct = $ancillaryProduct;
        return $this;
    }
    /**
     * Get InvoiceData value
     * @return \Sabre\UpdateReservation\StructType\InvoiceData|null
     */
    public function getInvoiceData()
    {
        return $this->InvoiceData;
    }
    /**
     * Set InvoiceData value
     * @param \Sabre\UpdateReservation\StructType\InvoiceData $invoiceData
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setInvoiceData(\Sabre\UpdateReservation\StructType\InvoiceData $invoiceData = null)
    {
        $this->InvoiceData = $invoiceData;
        return $this;
    }
    /**
     * Get AccountingField value
     * @return \Sabre\UpdateReservation\StructType\AccountingField|null
     */
    public function getAccountingField()
    {
        return $this->AccountingField;
    }
    /**
     * Set AccountingField value
     * @param \Sabre\UpdateReservation\StructType\AccountingField $accountingField
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setAccountingField(\Sabre\UpdateReservation\StructType\AccountingField $accountingField = null)
    {
        $this->AccountingField = $accountingField;
        return $this;
    }
    /**
     * Get ServiceRequest value
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType|null
     */
    public function getServiceRequest()
    {
        return $this->ServiceRequest;
    }
    /**
     * Set ServiceRequest value
     * @param \Sabre\UpdateReservation\StructType\ServiceRequestType $serviceRequest
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setServiceRequest(\Sabre\UpdateReservation\StructType\ServiceRequestType $serviceRequest = null)
    {
        $this->ServiceRequest = $serviceRequest;
        return $this;
    }
    /**
     * Get Email value
     * @return \Sabre\UpdateReservation\StructType\Email|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Sabre\UpdateReservation\StructType\Email $email
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setEmail(\Sabre\UpdateReservation\StructType\Email $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get PriceCache value
     * @return \Sabre\UpdateReservation\StructType\PriceCache|null
     */
    public function getPriceCache()
    {
        return $this->PriceCache;
    }
    /**
     * Set PriceCache value
     * @param \Sabre\UpdateReservation\StructType\PriceCache $priceCache
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setPriceCache(\Sabre\UpdateReservation\StructType\PriceCache $priceCache = null)
    {
        $this->PriceCache = $priceCache;
        return $this;
    }
    /**
     * Get TripProposalReference value
     * @return \Sabre\UpdateReservation\StructType\TripProposalReference|null
     */
    public function getTripProposalReference()
    {
        return $this->TripProposalReference;
    }
    /**
     * Set TripProposalReference value
     * @param \Sabre\UpdateReservation\StructType\TripProposalReference $tripProposalReference
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setTripProposalReference(\Sabre\UpdateReservation\StructType\TripProposalReference $tripProposalReference = null)
    {
        $this->TripProposalReference = $tripProposalReference;
        return $this;
    }
    /**
     * Get InsuranceOptOut value
     * @return \Sabre\UpdateReservation\StructType\InsuranceOptOut|null
     */
    public function getInsuranceOptOut()
    {
        return $this->InsuranceOptOut;
    }
    /**
     * Set InsuranceOptOut value
     * @param \Sabre\UpdateReservation\StructType\InsuranceOptOut $insuranceOptOut
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setInsuranceOptOut(\Sabre\UpdateReservation\StructType\InsuranceOptOut $insuranceOptOut = null)
    {
        $this->InsuranceOptOut = $insuranceOptOut;
        return $this;
    }
    /**
     * Get Profile value
     * @return \Sabre\UpdateReservation\StructType\ProfileType|null
     */
    public function getProfile()
    {
        return $this->Profile;
    }
    /**
     * Set Profile value
     * @param \Sabre\UpdateReservation\StructType\ProfileType $profile
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setProfile(\Sabre\UpdateReservation\StructType\ProfileType $profile = null)
    {
        $this->Profile = $profile;
        return $this;
    }
    /**
     * Get Review value
     * @return \Sabre\UpdateReservation\StructType\Review|null
     */
    public function getReview()
    {
        return $this->Review;
    }
    /**
     * Set Review value
     * @param \Sabre\UpdateReservation\StructType\Review $review
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setReview(\Sabre\UpdateReservation\StructType\Review $review = null)
    {
        $this->Review = $review;
        return $this;
    }
    /**
     * Get SegmentAssociation value
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociation|null
     */
    public function getSegmentAssociation()
    {
        return $this->SegmentAssociation;
    }
    /**
     * Set SegmentAssociation value
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociation $segmentAssociation
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setSegmentAssociation(\Sabre\UpdateReservation\StructType\SegmentAssociation $segmentAssociation = null)
    {
        $this->SegmentAssociation = $segmentAssociation;
        return $this;
    }
    /**
     * Get NameAssociation value
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag|null
     */
    public function getNameAssociation()
    {
        return $this->NameAssociation;
    }
    /**
     * Set NameAssociation value
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag $nameAssociation
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setNameAssociation(\Sabre\UpdateReservation\StructType\NameAssociationTag $nameAssociation = null)
    {
        $this->NameAssociation = $nameAssociation;
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
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setId($id = null)
    {
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
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get displayIndex value
     * @return int|null
     */
    public function getDisplayIndex()
    {
        return $this->displayIndex;
    }
    /**
     * Set displayIndex value
     * @param int $displayIndex
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setDisplayIndex($displayIndex = null)
    {
        // validation for constraint: int
        if (!is_null($displayIndex) && !is_numeric($displayIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($displayIndex)), __LINE__);
        }
        $this->displayIndex = $displayIndex;
        return $this;
    }
    /**
     * Get elementId value
     * @return string|null
     */
    public function getElementId()
    {
        return $this->elementId;
    }
    /**
     * Set elementId value
     * @param string $elementId
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setElementId($elementId = null)
    {
        // validation for constraint: string
        if (!is_null($elementId) && !is_string($elementId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($elementId)), __LINE__);
        }
        $this->elementId = $elementId;
        return $this;
    }
    /**
     * Get transient value
     * @return bool|null
     */
    public function getTransient()
    {
        return $this->transient;
    }
    /**
     * Set transient value
     * @param bool $transient
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
     */
    public function setTransient($transient = null)
    {
        // validation for constraint: boolean
        if (!is_null($transient) && !is_bool($transient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($transient)), __LINE__);
        }
        $this->transient = $transient;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType
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
