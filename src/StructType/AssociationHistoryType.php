<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociationHistoryType StructType
 * @subpackage Structs
 */
class AssociationHistoryType extends AbstractStructBase
{
    /**
     * The AssociationId
     * @var string
     */
    public $AssociationId;
    /**
     * The HistoryAction
     * @var string
     */
    public $HistoryAction;
    /**
     * The HistoryAssociationElement
     * @var \Sabre\UpdateReservation\StructType\HistoryAssociationElementType
     */
    public $HistoryAssociationElement;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Passengers
     */
    public $Passengers;
    /**
     * The AssociationParent
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AssociationHistoryElement[]
     */
    public $AssociationParent;
    /**
     * The AssociationChild
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AssociationHistoryElement
     */
    public $AssociationChild;
    /**
     * Constructor method for AssociationHistoryType
     * @uses AssociationHistoryType::setAssociationId()
     * @uses AssociationHistoryType::setHistoryAction()
     * @uses AssociationHistoryType::setHistoryAssociationElement()
     * @uses AssociationHistoryType::setPassengers()
     * @uses AssociationHistoryType::setAssociationParent()
     * @uses AssociationHistoryType::setAssociationChild()
     * @param string $associationId
     * @param string $historyAction
     * @param \Sabre\UpdateReservation\StructType\HistoryAssociationElementType $historyAssociationElement
     * @param \Sabre\UpdateReservation\StructType\Passengers $passengers
     * @param \Sabre\UpdateReservation\StructType\AssociationHistoryElement[] $associationParent
     * @param \Sabre\UpdateReservation\StructType\AssociationHistoryElement $associationChild
     */
    public function __construct($associationId = null, $historyAction = null, \Sabre\UpdateReservation\StructType\HistoryAssociationElementType $historyAssociationElement = null, \Sabre\UpdateReservation\StructType\Passengers $passengers = null, array $associationParent = array(), \Sabre\UpdateReservation\StructType\AssociationHistoryElement $associationChild = null)
    {
        $this
            ->setAssociationId($associationId)
            ->setHistoryAction($historyAction)
            ->setHistoryAssociationElement($historyAssociationElement)
            ->setPassengers($passengers)
            ->setAssociationParent($associationParent)
            ->setAssociationChild($associationChild);
    }
    /**
     * Get AssociationId value
     * @return string|null
     */
    public function getAssociationId()
    {
        return $this->AssociationId;
    }
    /**
     * Set AssociationId value
     * @param string $associationId
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryType
     */
    public function setAssociationId($associationId = null)
    {
        // validation for constraint: string
        if (!is_null($associationId) && !is_string($associationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($associationId)), __LINE__);
        }
        $this->AssociationId = $associationId;
        return $this;
    }
    /**
     * Get HistoryAction value
     * @return string|null
     */
    public function getHistoryAction()
    {
        return $this->HistoryAction;
    }
    /**
     * Set HistoryAction value
     * @param string $historyAction
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryType
     */
    public function setHistoryAction($historyAction = null)
    {
        // validation for constraint: string
        if (!is_null($historyAction) && !is_string($historyAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyAction)), __LINE__);
        }
        $this->HistoryAction = $historyAction;
        return $this;
    }
    /**
     * Get HistoryAssociationElement value
     * @return \Sabre\UpdateReservation\StructType\HistoryAssociationElementType|null
     */
    public function getHistoryAssociationElement()
    {
        return $this->HistoryAssociationElement;
    }
    /**
     * Set HistoryAssociationElement value
     * @param \Sabre\UpdateReservation\StructType\HistoryAssociationElementType $historyAssociationElement
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryType
     */
    public function setHistoryAssociationElement(\Sabre\UpdateReservation\StructType\HistoryAssociationElementType $historyAssociationElement = null)
    {
        $this->HistoryAssociationElement = $historyAssociationElement;
        return $this;
    }
    /**
     * Get Passengers value
     * @return \Sabre\UpdateReservation\StructType\Passengers|null
     */
    public function getPassengers()
    {
        return $this->Passengers;
    }
    /**
     * Set Passengers value
     * @param \Sabre\UpdateReservation\StructType\Passengers $passengers
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryType
     */
    public function setPassengers(\Sabre\UpdateReservation\StructType\Passengers $passengers = null)
    {
        $this->Passengers = $passengers;
        return $this;
    }
    /**
     * Get AssociationParent value
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryElement[]|null
     */
    public function getAssociationParent()
    {
        return $this->AssociationParent;
    }
    /**
     * Set AssociationParent value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationHistoryElement[] $associationParent
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryType
     */
    public function setAssociationParent(array $associationParent = array())
    {
        foreach ($associationParent as $associationHistoryTypeAssociationParentItem) {
            // validation for constraint: itemType
            if (!$associationHistoryTypeAssociationParentItem instanceof \Sabre\UpdateReservation\StructType\AssociationHistoryElement) {
                throw new \InvalidArgumentException(sprintf('The AssociationParent property can only contain items of \Sabre\UpdateReservation\StructType\AssociationHistoryElement, "%s" given', is_object($associationHistoryTypeAssociationParentItem) ? get_class($associationHistoryTypeAssociationParentItem) : gettype($associationHistoryTypeAssociationParentItem)), __LINE__);
            }
        }
        $this->AssociationParent = $associationParent;
        return $this;
    }
    /**
     * Add item to AssociationParent value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationHistoryElement $item
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryType
     */
    public function addToAssociationParent(\Sabre\UpdateReservation\StructType\AssociationHistoryElement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AssociationHistoryElement) {
            throw new \InvalidArgumentException(sprintf('The AssociationParent property can only contain items of \Sabre\UpdateReservation\StructType\AssociationHistoryElement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociationParent[] = $item;
        return $this;
    }
    /**
     * Get AssociationChild value
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryElement|null
     */
    public function getAssociationChild()
    {
        return $this->AssociationChild;
    }
    /**
     * Set AssociationChild value
     * @param \Sabre\UpdateReservation\StructType\AssociationHistoryElement $associationChild
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryType
     */
    public function setAssociationChild(\Sabre\UpdateReservation\StructType\AssociationHistoryElement $associationChild = null)
    {
        $this->AssociationChild = $associationChild;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryType
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
