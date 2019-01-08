<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinearEntryResponse StructType
 * @subpackage Structs
 */
class LinearEntryResponse extends AbstractStructBase
{
    /**
     * The Response
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Response;
    /**
     * Constructor method for LinearEntryResponse
     * @uses LinearEntryResponse::setResponse()
     * @param string[] $response
     */
    public function __construct(array $response = array())
    {
        $this
            ->setResponse($response);
    }
    /**
     * Get Response value
     * @return string[]|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @throws \InvalidArgumentException
     * @param string[] $response
     * @return \Sabre\UpdateReservation\StructType\LinearEntryResponse
     */
    public function setResponse(array $response = array())
    {
        foreach ($response as $linearEntryResponseResponseItem) {
            // validation for constraint: itemType
            if (!is_string($linearEntryResponseResponseItem)) {
                throw new \InvalidArgumentException(sprintf('The Response property can only contain items of string, "%s" given', is_object($linearEntryResponseResponseItem) ? get_class($linearEntryResponseResponseItem) : gettype($linearEntryResponseResponseItem)), __LINE__);
            }
        }
        $this->Response = $response;
        return $this;
    }
    /**
     * Add item to Response value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\LinearEntryResponse
     */
    public function addToResponse($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Response property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Response[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LinearEntryResponse
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
