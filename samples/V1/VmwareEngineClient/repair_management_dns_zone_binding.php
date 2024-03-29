<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START vmwareengine_v1_generated_VmwareEngine_RepairManagementDnsZoneBinding_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\VmwareEngine\V1\Client\VmwareEngineClient;
use Google\Cloud\VmwareEngine\V1\ManagementDnsZoneBinding;
use Google\Cloud\VmwareEngine\V1\RepairManagementDnsZoneBindingRequest;
use Google\Rpc\Status;

/**
 * Retries to create a `ManagementDnsZoneBinding` resource that is
 * in failed state.
 *
 * @param string $formattedName The resource name of the management DNS zone binding to repair.
 *                              Resource names are schemeless URIs that follow the conventions in
 *                              https://cloud.google.com/apis/design/resource_names.
 *                              For example:
 *                              `projects/my-project/locations/us-central1-a/privateClouds/my-cloud/managementDnsZoneBindings/my-management-dns-zone-binding`
 *                              Please see {@see VmwareEngineClient::managementDnsZoneBindingName()} for help formatting this field.
 */
function repair_management_dns_zone_binding_sample(string $formattedName): void
{
    // Create a client.
    $vmwareEngineClient = new VmwareEngineClient();

    // Prepare the request message.
    $request = (new RepairManagementDnsZoneBindingRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $vmwareEngineClient->repairManagementDnsZoneBinding($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var ManagementDnsZoneBinding $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = VmwareEngineClient::managementDnsZoneBindingName(
        '[PROJECT]',
        '[LOCATION]',
        '[PRIVATE_CLOUD]',
        '[MANAGEMENT_DNS_ZONE_BINDING]'
    );

    repair_management_dns_zone_binding_sample($formattedName);
}
// [END vmwareengine_v1_generated_VmwareEngine_RepairManagementDnsZoneBinding_sync]
