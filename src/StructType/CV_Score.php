<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CV_Score StructType
 * @subpackage Structs
 */
class CV_Score extends AbstractStructBase
{
    /**
     * The Score
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Score;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - documentation: Effective date
     * - minOccurs: 0
     * @var string
     */
    public $EffectiveDate;
    /**
     * The DiscontinueDate
     * Meta informations extracted from the WSDL
     * - documentation: DiscontinueDate
     * - minOccurs: 0
     * @var string
     */
    public $DiscontinueDate;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Limited to 500 chars
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - documentation: User id
     * - minOccurs: 0
     * @var string
     */
    public $UserId;
    /**
     * The LoadDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Local date time
     * - minOccurs: 0
     * @var string
     */
    public $LoadDateTime;
    /**
     * Constructor method for CV_Score
     * @uses CV_Score::setScore()
     * @uses CV_Score::setType()
     * @uses CV_Score::setEffectiveDate()
     * @uses CV_Score::setDiscontinueDate()
     * @uses CV_Score::setComment()
     * @uses CV_Score::setUserId()
     * @uses CV_Score::setLoadDateTime()
     * @param int $score
     * @param string $type
     * @param string $effectiveDate
     * @param string $discontinueDate
     * @param string $comment
     * @param string $userId
     * @param string $loadDateTime
     */
    public function __construct($score = null, $type = null, $effectiveDate = null, $discontinueDate = null, $comment = null, $userId = null, $loadDateTime = null)
    {
        $this
            ->setScore($score)
            ->setType($type)
            ->setEffectiveDate($effectiveDate)
            ->setDiscontinueDate($discontinueDate)
            ->setComment($comment)
            ->setUserId($userId)
            ->setLoadDateTime($loadDateTime);
    }
    /**
     * Get Score value
     * @return int|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param int $score
     * @return \Sabre\UpdateReservation\StructType\CV_Score
     */
    public function setScore($score = null)
    {
        // validation for constraint: int
        if (!is_null($score) && !is_numeric($score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($score)), __LINE__);
        }
        $this->Score = $score;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Sabre\UpdateReservation\EnumType\ScoreType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\ScoreType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\CV_Score
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\ScoreType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\ScoreType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Sabre\UpdateReservation\StructType\CV_Score
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get DiscontinueDate value
     * @return string|null
     */
    public function getDiscontinueDate()
    {
        return $this->DiscontinueDate;
    }
    /**
     * Set DiscontinueDate value
     * @param string $discontinueDate
     * @return \Sabre\UpdateReservation\StructType\CV_Score
     */
    public function setDiscontinueDate($discontinueDate = null)
    {
        // validation for constraint: string
        if (!is_null($discontinueDate) && !is_string($discontinueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discontinueDate)), __LINE__);
        }
        $this->DiscontinueDate = $discontinueDate;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Sabre\UpdateReservation\StructType\CV_Score
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get UserId value
     * @return string|null
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param string $userId
     * @return \Sabre\UpdateReservation\StructType\CV_Score
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get LoadDateTime value
     * @return string|null
     */
    public function getLoadDateTime()
    {
        return $this->LoadDateTime;
    }
    /**
     * Set LoadDateTime value
     * @param string $loadDateTime
     * @return \Sabre\UpdateReservation\StructType\CV_Score
     */
    public function setLoadDateTime($loadDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($loadDateTime) && !is_string($loadDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loadDateTime)), __LINE__);
        }
        $this->LoadDateTime = $loadDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CV_Score
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
