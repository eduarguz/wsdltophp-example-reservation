<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceAdvisorySegmentList.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServiceAdvisorySegmentList_PNRB extends AbstractStructBase
{
    /**
     * The Route
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\Route[]
     */
    public $Route;
    /**
     * Constructor method for AncillaryServiceAdvisorySegmentList.PNRB
     * @uses AncillaryServiceAdvisorySegmentList_PNRB::setRoute()
     * @param \Sabre\UpdateReservation\StructType\Route[] $route
     */
    public function __construct(array $route = array())
    {
        $this
            ->setRoute($route);
    }
    /**
     * Get Route value
     * @return \Sabre\UpdateReservation\StructType\Route[]
     */
    public function getRoute()
    {
        return $this->Route;
    }
    /**
     * Set Route value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Route[] $route
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceAdvisorySegmentList_PNRB
     */
    public function setRoute(array $route = array())
    {
        foreach ($route as $ancillaryServiceAdvisorySegmentList_PNRBRouteItem) {
            // validation for constraint: itemType
            if (!$ancillaryServiceAdvisorySegmentList_PNRBRouteItem instanceof \Sabre\UpdateReservation\StructType\Route) {
                throw new \InvalidArgumentException(sprintf('The Route property can only contain items of \Sabre\UpdateReservation\StructType\Route, "%s" given', is_object($ancillaryServiceAdvisorySegmentList_PNRBRouteItem) ? get_class($ancillaryServiceAdvisorySegmentList_PNRBRouteItem) : gettype($ancillaryServiceAdvisorySegmentList_PNRBRouteItem)), __LINE__);
            }
        }
        $this->Route = $route;
        return $this;
    }
    /**
     * Add item to Route value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Route $item
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceAdvisorySegmentList_PNRB
     */
    public function addToRoute(\Sabre\UpdateReservation\StructType\Route $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Route) {
            throw new \InvalidArgumentException(sprintf('The Route property can only contain items of \Sabre\UpdateReservation\StructType\Route, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Route[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceAdvisorySegmentList_PNRB
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
