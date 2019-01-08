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
$body = new \Sabre\UpdateReservation\StructType\UpdateReservationRQ();

$body->setReservationUpdateList(
    (new \Sabre\UpdateReservation\StructType\ReservationUpdateListType())
        ->setReservationUpdateItem(
            [
                // WORKS
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setPassengerNameUpdate(
                    new \Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB()
                ),

                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setGroupNameUpdate(
                    new \Sabre\UpdateReservation\StructType\GroupNameUpdate_PNRB()
                ),

                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setAncillaryServicesUpdate(
                    new \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB()
                ),

                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setAncillaryServicesPartialUpdate(
                    new \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB()
                ),

                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setEmailAddressUpdate(
                    [new \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB()]
                ),

                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setProfileUpdate(
                    new \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB()
                ),

                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setPreReservedSeatPartialUpdate(
                    new \Sabre\UpdateReservation\StructType\PreReservedSeatPartialUpdate_PNRB()
                ),

                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setSpecialServiceRequestUpdate(
                    new \Sabre\UpdateReservation\StructType\SpecialServiceRequestUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setSpecialServiceRequestPartialUpdate(
                    new \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setRemarkUpdate([
                    new \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB(),
                ]),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setTicketDetailsUpdate(
                    new \Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setCssRequestUpdate(
                    new \Sabre\UpdateReservation\StructType\CssRequestUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setRemarkPartialUpdate(
                    new \Sabre\UpdateReservation\StructType\RemarkPartialUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setFrequentFlyerTSAPreCheckUpdate(
                    new \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setProductUpdate(
                    new \Sabre\UpdateReservation\StructType\ProductUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setPhoneNumberUpdate(
                    new \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setPhoneNumberPartialUpdate(
                    new \Sabre\UpdateReservation\StructType\PhoneNumberPartialUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setOpenReservationElementUpdate(
                    new \Sabre\UpdateReservation\StructType\OpenReservationElementUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setDKNumber(
                    new \Sabre\UpdateReservation\StructType\DKNumber_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setOtherServiceInformation([
                    new \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB(),
                ]),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setAccountingLine([
                    new \Sabre\UpdateReservation\StructType\AccountingLine_PNRB(),
                ]),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setAirSegmentPartialUpdate(
                    new \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setAirItineraryUpdate(
                    new \Sabre\UpdateReservation\StructType\AirItineraryUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setGeneralSegmentUpdate(
                    new \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setCarrierRefundItem(
                    new \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setHeaderUpdateItem(
                    new \Sabre\UpdateReservation\StructType\HeaderUpdateItem_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setAssociationMatrixUpdate(
                    new \Sabre\UpdateReservation\StructType\AssociationMatrixUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setPreReservedSeatUpdate(
                    new \Sabre\UpdateReservation\StructType\PreReservedSeatUpdate_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setTicketingInfoUpdate(
                    new \Sabre\UpdateReservation\StructType\TicketingInfo()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setBookAndHold(
                    new \Sabre\UpdateReservation\StructType\BookAndHoldType_PNRB()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setOpenReservationAction(
                    new \Sabre\UpdateReservation\StructType\OpenReservationAction()
                ),
                // DOES NOT WORK
                (new \Sabre\UpdateReservation\StructType\ReservationUpdateItemType())->setUpdateId('2121'),
            ]
        )
);

if ($update->UpdateReservationOperation($body) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastRequest());
}
