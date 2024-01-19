<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1\NetworkPeering;

use UnexpectedValueException;

/**
 * Possible states of a network peering.
 *
 * Protobuf type <code>google.cloud.vmwareengine.v1.NetworkPeering.State</code>
 */
class State
{
    /**
     * Unspecified network peering state. This is the default value.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The peering is not active.
     *
     * Generated from protobuf enum <code>INACTIVE = 1;</code>
     */
    const INACTIVE = 1;
    /**
     * The peering is active.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * The peering is being created.
     *
     * Generated from protobuf enum <code>CREATING = 3;</code>
     */
    const CREATING = 3;
    /**
     * The peering is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::INACTIVE => 'INACTIVE',
        self::ACTIVE => 'ACTIVE',
        self::CREATING => 'CREATING',
        self::DELETING => 'DELETING',
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

