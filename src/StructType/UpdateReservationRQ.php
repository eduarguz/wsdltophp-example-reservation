<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateReservationRQ StructType
 * @subpackage Structs
 */
class UpdateReservationRQ extends AbstractStructBase
{
    /**
     * The RequestType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RequestType
     */
    public $RequestType;
    /**
     * The ReturnOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ReturnOptions
     */
    public $ReturnOptions;
    /**
     * The ReservationUpdateList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ReservationUpdateListType
     */
    public $ReservationUpdateList;
    /**
     * The AssociationUpdate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB[]
     */
    public $AssociationUpdate;
    /**
     * The UpdateToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UpdateToken;
    /**
     * The PnrContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PnrContent
     */
    public $PnrContent;
    /**
     * The Partition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Partition;
    /**
     * The ResultAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ResultAction
     */
    public $ResultAction;
    /**
     * The ClientContext
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ClientContext
     */
    public $ClientContext;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Version;
    /**
     * The EchoToken
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $EchoToken;
    /**
     * Constructor method for UpdateReservationRQ
     * @uses UpdateReservationRQ::setRequestType()
     * @uses UpdateReservationRQ::setReturnOptions()
     * @uses UpdateReservationRQ::setReservationUpdateList()
     * @uses UpdateReservationRQ::setAssociationUpdate()
     * @uses UpdateReservationRQ::setUpdateToken()
     * @uses UpdateReservationRQ::setPnrContent()
     * @uses UpdateReservationRQ::setPartition()
     * @uses UpdateReservationRQ::setResultAction()
     * @uses UpdateReservationRQ::setClientContext()
     * @uses UpdateReservationRQ::setVersion()
     * @uses UpdateReservationRQ::setEchoToken()
     * @param \Sabre\UpdateReservation\StructType\RequestType $requestType
     * @param \Sabre\UpdateReservation\StructType\ReturnOptions $returnOptions
     * @param \Sabre\UpdateReservation\StructType\ReservationUpdateListType $reservationUpdateList
     * @param \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB[] $associationUpdate
     * @param string $updateToken
     * @param \Sabre\UpdateReservation\StructType\PnrContent $pnrContent
     * @param string $partition
     * @param \Sabre\UpdateReservation\StructType\ResultAction $resultAction
     * @param \Sabre\UpdateReservation\StructType\ClientContext $clientContext
     * @param string $version
     * @param string $echoToken
     */
    public function __construct(\Sabre\UpdateReservation\StructType\RequestType $requestType = null, \Sabre\UpdateReservation\StructType\ReturnOptions $returnOptions = null, \Sabre\UpdateReservation\StructType\ReservationUpdateListType $reservationUpdateList = null, array $associationUpdate = array(), $updateToken = null, \Sabre\UpdateReservation\StructType\PnrContent $pnrContent = null, $partition = null, \Sabre\UpdateReservation\StructType\ResultAction $resultAction = null, \Sabre\UpdateReservation\StructType\ClientContext $clientContext = null, $version = null, $echoToken = null)
    {
        $this
            ->setRequestType($requestType)
            ->setReturnOptions($returnOptions)
            ->setReservationUpdateList($reservationUpdateList)
            ->setAssociationUpdate($associationUpdate)
            ->setUpdateToken($updateToken)
            ->setPnrContent($pnrContent)
            ->setPartition($partition)
            ->setResultAction($resultAction)
            ->setClientContext($clientContext)
            ->setVersion($version)
            ->setEchoToken($echoToken);
    }
    /**
     * Get RequestType value
     * @return \Sabre\UpdateReservation\StructType\RequestType|null
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }
    /**
     * Set RequestType value
     * @param \Sabre\UpdateReservation\StructType\RequestType $requestType
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setRequestType(\Sabre\UpdateReservation\StructType\RequestType $requestType = null)
    {
        $this->RequestType = $requestType;
        return $this;
    }
    /**
     * Get ReturnOptions value
     * @return \Sabre\UpdateReservation\StructType\ReturnOptions|null
     */
    public function getReturnOptions()
    {
        return $this->ReturnOptions;
    }
    /**
     * Set ReturnOptions value
     * @param \Sabre\UpdateReservation\StructType\ReturnOptions $returnOptions
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setReturnOptions(\Sabre\UpdateReservation\StructType\ReturnOptions $returnOptions = null)
    {
        $this->ReturnOptions = $returnOptions;
        return $this;
    }
    /**
     * Get ReservationUpdateList value
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateListType|null
     */
    public function getReservationUpdateList()
    {
        return $this->ReservationUpdateList;
    }
    /**
     * Set ReservationUpdateList value
     * @param \Sabre\UpdateReservation\StructType\ReservationUpdateListType $reservationUpdateList
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setReservationUpdateList(\Sabre\UpdateReservation\StructType\ReservationUpdateListType $reservationUpdateList = null)
    {
        $this->ReservationUpdateList = $reservationUpdateList;
        return $this;
    }
    /**
     * Get AssociationUpdate value
     * @return \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB[]|null
     */
    public function getAssociationUpdate()
    {
        return $this->AssociationUpdate;
    }
    /**
     * Set AssociationUpdate value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB[] $associationUpdate
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setAssociationUpdate(array $associationUpdate = array())
    {
        foreach ($associationUpdate as $updateReservationRQAssociationUpdateItem) {
            // validation for constraint: itemType
            if (!$updateReservationRQAssociationUpdateItem instanceof \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB) {
                throw new \InvalidArgumentException(sprintf('The AssociationUpdate property can only contain items of \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB, "%s" given', is_object($updateReservationRQAssociationUpdateItem) ? get_class($updateReservationRQAssociationUpdateItem) : gettype($updateReservationRQAssociationUpdateItem)), __LINE__);
            }
        }
        $this->AssociationUpdate = $associationUpdate;
        return $this;
    }
    /**
     * Add item to AssociationUpdate value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function addToAssociationUpdate(\Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB) {
            throw new \InvalidArgumentException(sprintf('The AssociationUpdate property can only contain items of \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociationUpdate[] = $item;
        return $this;
    }
    /**
     * Get UpdateToken value
     * @return string|null
     */
    public function getUpdateToken()
    {
        return $this->UpdateToken;
    }
    /**
     * Set UpdateToken value
     * @param string $updateToken
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setUpdateToken($updateToken = null)
    {
        // validation for constraint: string
        if (!is_null($updateToken) && !is_string($updateToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateToken)), __LINE__);
        }
        $this->UpdateToken = $updateToken;
        return $this;
    }
    /**
     * Get PnrContent value
     * @return \Sabre\UpdateReservation\StructType\PnrContent|null
     */
    public function getPnrContent()
    {
        return $this->PnrContent;
    }
    /**
     * Set PnrContent value
     * @param \Sabre\UpdateReservation\StructType\PnrContent $pnrContent
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setPnrContent(\Sabre\UpdateReservation\StructType\PnrContent $pnrContent = null)
    {
        $this->PnrContent = $pnrContent;
        return $this;
    }
    /**
     * Get Partition value
     * @return string|null
     */
    public function getPartition()
    {
        return $this->Partition;
    }
    /**
     * Set Partition value
     * @param string $partition
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setPartition($partition = null)
    {
        // validation for constraint: string
        if (!is_null($partition) && !is_string($partition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partition)), __LINE__);
        }
        $this->Partition = $partition;
        return $this;
    }
    /**
     * Get ResultAction value
     * @return \Sabre\UpdateReservation\StructType\ResultAction|null
     */
    public function getResultAction()
    {
        return $this->ResultAction;
    }
    /**
     * Set ResultAction value
     * @param \Sabre\UpdateReservation\StructType\ResultAction $resultAction
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setResultAction(\Sabre\UpdateReservation\StructType\ResultAction $resultAction = null)
    {
        $this->ResultAction = $resultAction;
        return $this;
    }
    /**
     * Get ClientContext value
     * @return \Sabre\UpdateReservation\StructType\ClientContext|null
     */
    public function getClientContext()
    {
        return $this->ClientContext;
    }
    /**
     * Set ClientContext value
     * @param \Sabre\UpdateReservation\StructType\ClientContext $clientContext
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setClientContext(\Sabre\UpdateReservation\StructType\ClientContext $clientContext = null)
    {
        $this->ClientContext = $clientContext;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get EchoToken value
     * @return string|null
     */
    public function getEchoToken()
    {
        return $this->EchoToken;
    }
    /**
     * Set EchoToken value
     * @param string $echoToken
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
     */
    public function setEchoToken($echoToken = null)
    {
        // validation for constraint: string
        if (!is_null($echoToken) && !is_string($echoToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($echoToken)), __LINE__);
        }
        $this->EchoToken = $echoToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRQ
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
