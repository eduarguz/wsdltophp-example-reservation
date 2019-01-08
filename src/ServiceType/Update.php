<?php

namespace Sabre\UpdateReservation\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Sets the MessageHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Sabre\UpdateReservation\StructType\MessageHeader $messageHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderMessageHeader(\Sabre\UpdateReservation\StructType\MessageHeader $messageHeader, $nameSpace = 'http://www.ebxml.org/namespaces/messageHeader', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'MessageHeader', $messageHeader, $mustUnderstand, $actor);
    }
    /**
     * Sets the Security SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Sabre\UpdateReservation\StructType\Security $security
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderSecurity(\Sabre\UpdateReservation\StructType\Security $security, $nameSpace = 'http://schemas.xmlsoap.org/ws/2002/12/secext', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'Security', $security, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named UpdateReservationOperation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: MessageHeader, Security
     * - SOAPHeaderNamespaces: http://www.ebxml.org/namespaces/messageHeader, http://schemas.xmlsoap.org/ws/2002/12/secext
     * - SOAPHeaderTypes: \Sabre\UpdateReservation\StructType\MessageHeader, \Sabre\UpdateReservation\StructType\Security
     * - SOAPHeaders: required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Sabre\UpdateReservation\StructType\UpdateReservationRQ $body
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS|bool
     */
    public function UpdateReservationOperation(\Sabre\UpdateReservation\StructType\UpdateReservationRQ $body)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateReservationOperation($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Sabre\UpdateReservation\StructType\UpdateReservationRS
     */
    public function getResult()
    {
        return parent::getResult();
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
