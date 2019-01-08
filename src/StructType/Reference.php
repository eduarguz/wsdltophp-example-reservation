<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reference StructType
 * Meta informations extracted from the WSDL
 * - type: ds:ReferenceType
 * @subpackage Structs
 */
class Reference extends AbstractStructBase
{
    /**
     * The href
     * Meta informations extracted from the WSDL
     * - ref: xlink:href
     * - use: required
     * @var string
     */
    public $href;
    /**
     * The Schema
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: tns:Schema
     * @var \Sabre\UpdateReservation\StructType\Schema[]
     */
    public $Schema;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: tns:Description
     * @var \Sabre\UpdateReservation\StructType\Description[]
     */
    public $Description;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - ref: tns:id
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - fixed: simple
     * - ref: xlink:type
     * @var string
     */
    public $type;
    /**
     * The role
     * Meta informations extracted from the WSDL
     * - ref: xlink:role
     * @var string
     */
    public $role;
    /**
     * Constructor method for Reference
     * @uses Reference::setHref()
     * @uses Reference::setSchema()
     * @uses Reference::setDescription()
     * @uses Reference::setAny()
     * @uses Reference::setId()
     * @uses Reference::setType()
     * @uses Reference::setRole()
     * @param string $href
     * @param \Sabre\UpdateReservation\StructType\Schema[] $schema
     * @param \Sabre\UpdateReservation\StructType\Description[] $description
     * @param \DOMDocument $any
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @param string $type
     * @param string $role
     */
    public function __construct($href = null, array $schema = array(), array $description = array(), \DOMDocument $any = null, \Sabre\UpdateReservation\StructType\ID $id = null, $type = null, $role = null)
    {
        $this
            ->setHref($href)
            ->setSchema($schema)
            ->setDescription($description)
            ->setAny($any)
            ->setId($id)
            ->setType($type)
            ->setRole($role);
    }
    /**
     * Get href value
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }
    /**
     * Set href value
     * @param string $href
     * @return \Sabre\UpdateReservation\StructType\Reference
     */
    public function setHref($href = null)
    {
        // validation for constraint: string
        if (!is_null($href) && !is_string($href)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($href)), __LINE__);
        }
        $this->href = $href;
        return $this;
    }
    /**
     * Get Schema value
     * @return \Sabre\UpdateReservation\StructType\Schema[]|null
     */
    public function getSchema()
    {
        return $this->Schema;
    }
    /**
     * Set Schema value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Schema[] $schema
     * @return \Sabre\UpdateReservation\StructType\Reference
     */
    public function setSchema(array $schema = array())
    {
        foreach ($schema as $referenceSchemaItem) {
            // validation for constraint: itemType
            if (!$referenceSchemaItem instanceof \Sabre\UpdateReservation\StructType\Schema) {
                throw new \InvalidArgumentException(sprintf('The Schema property can only contain items of \Sabre\UpdateReservation\StructType\Schema, "%s" given', is_object($referenceSchemaItem) ? get_class($referenceSchemaItem) : gettype($referenceSchemaItem)), __LINE__);
            }
        }
        $this->Schema = $schema;
        return $this;
    }
    /**
     * Add item to Schema value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Schema $item
     * @return \Sabre\UpdateReservation\StructType\Reference
     */
    public function addToSchema(\Sabre\UpdateReservation\StructType\Schema $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Schema) {
            throw new \InvalidArgumentException(sprintf('The Schema property can only contain items of \Sabre\UpdateReservation\StructType\Schema, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Schema[] = $item;
        return $this;
    }
    /**
     * Get Description value
     * @return \Sabre\UpdateReservation\StructType\Description[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Description[] $description
     * @return \Sabre\UpdateReservation\StructType\Reference
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $referenceDescriptionItem) {
            // validation for constraint: itemType
            if (!$referenceDescriptionItem instanceof \Sabre\UpdateReservation\StructType\Description) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Sabre\UpdateReservation\StructType\Description, "%s" given', is_object($referenceDescriptionItem) ? get_class($referenceDescriptionItem) : gettype($referenceDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Description $item
     * @return \Sabre\UpdateReservation\StructType\Reference
     */
    public function addToDescription(\Sabre\UpdateReservation\StructType\Description $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Description) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Sabre\UpdateReservation\StructType\Description, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\Reference::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \Sabre\UpdateReservation\StructType\Reference
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get id value
     * @return \Sabre\UpdateReservation\StructType\ID|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @return \Sabre\UpdateReservation\StructType\Reference
     */
    public function setId(\Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this->id = $id;
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
     * @return \Sabre\UpdateReservation\StructType\Reference
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
     * Get role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param string $role
     * @return \Sabre\UpdateReservation\StructType\Reference
     */
    public function setRole($role = null)
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($role)), __LINE__);
        }
        $this->role = $role;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Reference
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
