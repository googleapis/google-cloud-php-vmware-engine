<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1\NetworkPeering;

use UnexpectedValueException;

/**
 * Type or purpose of the network peering connection.
 *
 * Protobuf type <code>google.cloud.vmwareengine.v1.NetworkPeering.PeerNetworkType</code>
 */
class PeerNetworkType
{
    /**
     * Unspecified
     *
     * Generated from protobuf enum <code>PEER_NETWORK_TYPE_UNSPECIFIED = 0;</code>
     */
    const PEER_NETWORK_TYPE_UNSPECIFIED = 0;
    /**
     * Peering connection used for connecting to another VPC network established
     * by the same user. For example, a peering connection to another VPC
     * network in the same project or to an on-premises network.
     *
     * Generated from protobuf enum <code>STANDARD = 1;</code>
     */
    const STANDARD = 1;
    /**
     * Peering connection used for connecting to another VMware Engine network.
     *
     * Generated from protobuf enum <code>VMWARE_ENGINE_NETWORK = 2;</code>
     */
    const VMWARE_ENGINE_NETWORK = 2;
    /**
     * Peering connection used for establishing [private services
     * access](https://cloud.google.com/vpc/docs/private-services-access).
     *
     * Generated from protobuf enum <code>PRIVATE_SERVICES_ACCESS = 3;</code>
     */
    const PRIVATE_SERVICES_ACCESS = 3;
    /**
     * Peering connection used for connecting to NetApp Cloud Volumes.
     *
     * Generated from protobuf enum <code>NETAPP_CLOUD_VOLUMES = 4;</code>
     */
    const NETAPP_CLOUD_VOLUMES = 4;
    /**
     * Peering connection used for connecting to third-party services. Most
     * third-party services require manual setup of reverse peering on the VPC
     * network associated with the third-party service.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_SERVICE = 5;</code>
     */
    const THIRD_PARTY_SERVICE = 5;
    /**
     * Peering connection used for connecting to Dell PowerScale Filers
     *
     * Generated from protobuf enum <code>DELL_POWERSCALE = 6;</code>
     */
    const DELL_POWERSCALE = 6;
    /**
     * Peering connection used for connecting to Google Cloud NetApp Volumes.
     *
     * Generated from protobuf enum <code>GOOGLE_CLOUD_NETAPP_VOLUMES = 7;</code>
     */
    const GOOGLE_CLOUD_NETAPP_VOLUMES = 7;

    private static $valueToName = [
        self::PEER_NETWORK_TYPE_UNSPECIFIED => 'PEER_NETWORK_TYPE_UNSPECIFIED',
        self::STANDARD => 'STANDARD',
        self::VMWARE_ENGINE_NETWORK => 'VMWARE_ENGINE_NETWORK',
        self::PRIVATE_SERVICES_ACCESS => 'PRIVATE_SERVICES_ACCESS',
        self::NETAPP_CLOUD_VOLUMES => 'NETAPP_CLOUD_VOLUMES',
        self::THIRD_PARTY_SERVICE => 'THIRD_PARTY_SERVICE',
        self::DELL_POWERSCALE => 'DELL_POWERSCALE',
        self::GOOGLE_CLOUD_NETAPP_VOLUMES => 'GOOGLE_CLOUD_NETAPP_VOLUMES',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


