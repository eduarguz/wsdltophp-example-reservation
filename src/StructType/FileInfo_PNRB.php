<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileInfo.PNRB StructType
 * @subpackage Structs
 */
class FileInfo_PNRB extends AbstractStructBase
{
    /**
     * The File
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\File[]
     */
    public $File;
    /**
     * Constructor method for FileInfo.PNRB
     * @uses FileInfo_PNRB::setFile()
     * @param \Sabre\UpdateReservation\StructType\File[] $file
     */
    public function __construct(array $file = array())
    {
        $this
            ->setFile($file);
    }
    /**
     * Get File value
     * @return \Sabre\UpdateReservation\StructType\File[]|null
     */
    public function getFile()
    {
        return $this->File;
    }
    /**
     * Set File value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\File[] $file
     * @return \Sabre\UpdateReservation\StructType\FileInfo_PNRB
     */
    public function setFile(array $file = array())
    {
        foreach ($file as $fileInfo_PNRBFileItem) {
            // validation for constraint: itemType
            if (!$fileInfo_PNRBFileItem instanceof \Sabre\UpdateReservation\StructType\File) {
                throw new \InvalidArgumentException(sprintf('The File property can only contain items of \Sabre\UpdateReservation\StructType\File, "%s" given', is_object($fileInfo_PNRBFileItem) ? get_class($fileInfo_PNRBFileItem) : gettype($fileInfo_PNRBFileItem)), __LINE__);
            }
        }
        $this->File = $file;
        return $this;
    }
    /**
     * Add item to File value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\File $item
     * @return \Sabre\UpdateReservation\StructType\FileInfo_PNRB
     */
    public function addToFile(\Sabre\UpdateReservation\StructType\File $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\File) {
            throw new \InvalidArgumentException(sprintf('The File property can only contain items of \Sabre\UpdateReservation\StructType\File, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->File[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FileInfo_PNRB
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
