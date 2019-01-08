<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeDetailsTotal StructType
 * @subpackage Structs
 */
class FeeDetailsTotal extends FeeDetails_Misc
{
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Taxes
     */
    public $Taxes;
    /**
     * The Totals
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FeeDetails_Misc
     */
    public $Totals;
    /**
     * The ReissueDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ReissueDetails
     */
    public $ReissueDetails;
    /**
     * Constructor method for FeeDetailsTotal
     * @uses FeeDetailsTotal::setTaxes()
     * @uses FeeDetailsTotal::setTotals()
     * @uses FeeDetailsTotal::setReissueDetails()
     * @param \Sabre\UpdateReservation\StructType\Taxes $taxes
     * @param \Sabre\UpdateReservation\StructType\FeeDetails_Misc $totals
     * @param \Sabre\UpdateReservation\StructType\ReissueDetails $reissueDetails
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Taxes $taxes = null, \Sabre\UpdateReservation\StructType\FeeDetails_Misc $totals = null, \Sabre\UpdateReservation\StructType\ReissueDetails $reissueDetails = null)
    {
        $this
            ->setTaxes($taxes)
            ->setTotals($totals)
            ->setReissueDetails($reissueDetails);
    }
    /**
     * Get Taxes value
     * @return \Sabre\UpdateReservation\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Sabre\UpdateReservation\StructType\Taxes $taxes
     * @return \Sabre\UpdateReservation\StructType\FeeDetailsTotal
     */
    public function setTaxes(\Sabre\UpdateReservation\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Totals value
     * @return \Sabre\UpdateReservation\StructType\FeeDetails_Misc|null
     */
    public function getTotals()
    {
        return $this->Totals;
    }
    /**
     * Set Totals value
     * @param \Sabre\UpdateReservation\StructType\FeeDetails_Misc $totals
     * @return \Sabre\UpdateReservation\StructType\FeeDetailsTotal
     */
    public function setTotals(\Sabre\UpdateReservation\StructType\FeeDetails_Misc $totals = null)
    {
        $this->Totals = $totals;
        return $this;
    }
    /**
     * Get ReissueDetails value
     * @return \Sabre\UpdateReservation\StructType\ReissueDetails|null
     */
    public function getReissueDetails()
    {
        return $this->ReissueDetails;
    }
    /**
     * Set ReissueDetails value
     * @param \Sabre\UpdateReservation\StructType\ReissueDetails $reissueDetails
     * @return \Sabre\UpdateReservation\StructType\FeeDetailsTotal
     */
    public function setReissueDetails(\Sabre\UpdateReservation\StructType\ReissueDetails $reissueDetails = null)
    {
        $this->ReissueDetails = $reissueDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FeeDetailsTotal
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
