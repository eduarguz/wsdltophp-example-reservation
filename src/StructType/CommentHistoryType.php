<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommentHistoryType StructType
 * @subpackage Structs
 */
class CommentHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The CommentText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CommentText;
    /**
     * Constructor method for CommentHistoryType
     * @uses CommentHistoryType::setHistoryAction()
     * @uses CommentHistoryType::setCommentText()
     * @param string $historyAction
     * @param string $commentText
     */
    public function __construct($historyAction = null, $commentText = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setCommentText($commentText);
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
     * @return \Sabre\UpdateReservation\StructType\CommentHistoryType
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
     * Get CommentText value
     * @return string|null
     */
    public function getCommentText()
    {
        return $this->CommentText;
    }
    /**
     * Set CommentText value
     * @param string $commentText
     * @return \Sabre\UpdateReservation\StructType\CommentHistoryType
     */
    public function setCommentText($commentText = null)
    {
        // validation for constraint: string
        if (!is_null($commentText) && !is_string($commentText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commentText)), __LINE__);
        }
        $this->CommentText = $commentText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CommentHistoryType
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
