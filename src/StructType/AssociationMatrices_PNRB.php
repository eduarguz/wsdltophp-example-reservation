<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociationMatrices.PNRB StructType
 * @subpackage Structs
 */
class AssociationMatrices_PNRB extends AbstractStructBase
{
    /**
     * The AssociationMatrix
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB[]
     */
    public $AssociationMatrix;
    /**
     * Constructor method for AssociationMatrices.PNRB
     * @uses AssociationMatrices_PNRB::setAssociationMatrix()
     * @param \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB[] $associationMatrix
     */
    public function __construct(array $associationMatrix = array())
    {
        $this
            ->setAssociationMatrix($associationMatrix);
    }
    /**
     * Get AssociationMatrix value
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB[]
     */
    public function getAssociationMatrix()
    {
        return $this->AssociationMatrix;
    }
    /**
     * Set AssociationMatrix value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB[] $associationMatrix
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrices_PNRB
     */
    public function setAssociationMatrix(array $associationMatrix = array())
    {
        foreach ($associationMatrix as $associationMatrices_PNRBAssociationMatrixItem) {
            // validation for constraint: itemType
            if (!$associationMatrices_PNRBAssociationMatrixItem instanceof \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB) {
                throw new \InvalidArgumentException(sprintf('The AssociationMatrix property can only contain items of \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB, "%s" given', is_object($associationMatrices_PNRBAssociationMatrixItem) ? get_class($associationMatrices_PNRBAssociationMatrixItem) : gettype($associationMatrices_PNRBAssociationMatrixItem)), __LINE__);
            }
        }
        $this->AssociationMatrix = $associationMatrix;
        return $this;
    }
    /**
     * Add item to AssociationMatrix value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrices_PNRB
     */
    public function addToAssociationMatrix(\Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB) {
            throw new \InvalidArgumentException(sprintf('The AssociationMatrix property can only contain items of \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociationMatrix[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrices_PNRB
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
