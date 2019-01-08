<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://files.developer.sabre.com/wsdl/sabreXML1.0.00/pnrservices/UpdateReservation_1.19.0.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://files.developer.sabre.com/wsdl/sabreXML1.0.00/pnrservices/UpdateReservation_1.19.0.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Sabre\UpdateReservation\ClassMap::get(),
);
/**
 * Samples for Update ServiceType
 */
$update = new \Sabre\UpdateReservation\ServiceType\Update($options);
$update->setSoapHeaderMessageHeader(new \Sabre\UpdateReservation\StructType\MessageHeader());
$update->setSoapHeaderSecurity(new \Sabre\UpdateReservation\StructType\Security());
/**
 * Sample call for UpdateReservationOperation operation/method
 */
if ($update->UpdateReservationOperation(new \Sabre\UpdateReservation\StructType\UpdateReservationRQ()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
