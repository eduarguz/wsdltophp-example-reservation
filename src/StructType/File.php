<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for File StructType
 * Meta informations extracted from the WSDL
 * - documentation: "File" is used to return the file name/identifier
 * @subpackage Structs
 */
class File extends AbstractStructBase
{
    /**
     * The Representation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Representation;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $type;
    /**
     * The coding
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $coding;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The ProductCode
     * Meta informations extracted from the WSDL
     * - documentation: "ProductCode" is used to return the product code.
     * - use: optional
     * @var string
     */
    public $ProductCode;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Id;
    /**
     * Constructor method for File
     * @uses File::setRepresentation()
     * @uses File::setURL()
     * @uses File::setType()
     * @uses File::setCoding()
     * @uses File::set_()
     * @uses File::setProductCode()
     * @uses File::setRPH()
     * @uses File::setId()
     * @param string $representation
     * @param string $uRL
     * @param string $type
     * @param string $coding
     * @param string $_
     * @param string $productCode
     * @param string $rPH
     * @param string $id
     */
    public function __construct($representation = null, $uRL = null, $type = null, $coding = null, $_ = null, $productCode = null, $rPH = null, $id = null)
    {
        $this
            ->setRepresentation($representation)
            ->setURL($uRL)
            ->setType($type)
            ->setCoding($coding)
            ->set_($_)
            ->setProductCode($productCode)
            ->setRPH($rPH)
            ->setId($id);
    }
    /**
     * Get Representation value
     * @return string|null
     */
    public function getRepresentation()
    {
        return $this->Representation;
    }
    /**
     * Set Representation value
     * @param string $representation
     * @return \Sabre\UpdateReservation\StructType\File
     */
    public function setRepresentation($representation = null)
    {
        // validation for constraint: string
        if (!is_null($representation) && !is_string($representation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($representation)), __LINE__);
        }
        $this->Representation = $representation;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Sabre\UpdateReservation\StructType\File
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
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
     * @return \Sabre\UpdateReservation\StructType\File
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
     * Get coding value
     * @return string|null
     */
    public function getCoding()
    {
        return $this->coding;
    }
    /**
     * Set coding value
     * @param string $coding
     * @return \Sabre\UpdateReservation\StructType\File
     */
    public function setCoding($coding = null)
    {
        // validation for constraint: string
        if (!is_null($coding) && !is_string($coding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coding)), __LINE__);
        }
        $this->coding = $coding;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\File
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get ProductCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }
    /**
     * Set ProductCode value
     * @param string $productCode
     * @return \Sabre\UpdateReservation\StructType\File
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productCode)), __LINE__);
        }
        $this->ProductCode = $productCode;
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
     * @return \Sabre\UpdateReservation\StructType\File
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
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\File
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\File
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
