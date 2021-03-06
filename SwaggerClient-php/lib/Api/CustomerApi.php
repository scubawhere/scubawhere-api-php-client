<?php
/**
 * CustomerApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Scubawhere API Documentation
 *
 * This is the documentation for scubawhere's RMS API. This API is only to be used by authorized parties with valid auth tokens.  [Learn about scubawhere](http://www.scubawhere.com) to become an authorized consumer of our API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: bryan@scubawhere.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * CustomerApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://dev.scubawhere.com/api');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return CustomerApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createCustomer
     *
     * Create a new customer
     *
     * @param string $email  (required)
     * @param string $firstname  (required)
     * @param string $lastname  (required)
     * @param \DateTime $birthday  (optional)
     * @param int $gender  (optional)
     * @param string $address_1  (optional)
     * @param string $address_2  (optional)
     * @param string $city  (optional)
     * @param string $county  (optional)
     * @param string $postcode  (optional)
     * @param int $country_id  (optional)
     * @param string $phone  (optional)
     * @param \DateTime $last_dive  (optional)
     * @param int $number_of_dives  (optional)
     * @param string $chest_size  (optional)
     * @param string $show_size  (optional)
     * @param string $height  (optional)
     * @param int[] $certificates  (optional)
     * @return \Swagger\Client\Model\InlineResponse20029
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createCustomer($email, $firstname, $lastname, $birthday = null, $gender = null, $address_1 = null, $address_2 = null, $city = null, $county = null, $postcode = null, $country_id = null, $phone = null, $last_dive = null, $number_of_dives = null, $chest_size = null, $show_size = null, $height = null, $certificates = null)
    {
        list($response) = $this->createCustomerWithHttpInfo($email, $firstname, $lastname, $birthday, $gender, $address_1, $address_2, $city, $county, $postcode, $country_id, $phone, $last_dive, $number_of_dives, $chest_size, $show_size, $height, $certificates);
        return $response;
    }

    /**
     * Operation createCustomerWithHttpInfo
     *
     * Create a new customer
     *
     * @param string $email  (required)
     * @param string $firstname  (required)
     * @param string $lastname  (required)
     * @param \DateTime $birthday  (optional)
     * @param int $gender  (optional)
     * @param string $address_1  (optional)
     * @param string $address_2  (optional)
     * @param string $city  (optional)
     * @param string $county  (optional)
     * @param string $postcode  (optional)
     * @param int $country_id  (optional)
     * @param string $phone  (optional)
     * @param \DateTime $last_dive  (optional)
     * @param int $number_of_dives  (optional)
     * @param string $chest_size  (optional)
     * @param string $show_size  (optional)
     * @param string $height  (optional)
     * @param int[] $certificates  (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20029, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createCustomerWithHttpInfo($email, $firstname, $lastname, $birthday = null, $gender = null, $address_1 = null, $address_2 = null, $city = null, $county = null, $postcode = null, $country_id = null, $phone = null, $last_dive = null, $number_of_dives = null, $chest_size = null, $show_size = null, $height = null, $certificates = null)
    {
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling createCustomer');
        }
        // verify the required parameter 'firstname' is set
        if ($firstname === null) {
            throw new \InvalidArgumentException('Missing the required parameter $firstname when calling createCustomer');
        }
        // verify the required parameter 'lastname' is set
        if ($lastname === null) {
            throw new \InvalidArgumentException('Missing the required parameter $lastname when calling createCustomer');
        }
        // parse inputs
        $resourcePath = "/customer/add";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // query params
        if ($firstname !== null) {
            $queryParams['firstname'] = $this->apiClient->getSerializer()->toQueryValue($firstname);
        }
        // query params
        if ($lastname !== null) {
            $queryParams['lastname'] = $this->apiClient->getSerializer()->toQueryValue($lastname);
        }
        // query params
        if ($birthday !== null) {
            $queryParams['birthday'] = $this->apiClient->getSerializer()->toQueryValue($birthday);
        }
        // query params
        if ($gender !== null) {
            $queryParams['gender'] = $this->apiClient->getSerializer()->toQueryValue($gender);
        }
        // query params
        if ($address_1 !== null) {
            $queryParams['address_1'] = $this->apiClient->getSerializer()->toQueryValue($address_1);
        }
        // query params
        if ($address_2 !== null) {
            $queryParams['address_2'] = $this->apiClient->getSerializer()->toQueryValue($address_2);
        }
        // query params
        if ($city !== null) {
            $queryParams['city'] = $this->apiClient->getSerializer()->toQueryValue($city);
        }
        // query params
        if ($county !== null) {
            $queryParams['county'] = $this->apiClient->getSerializer()->toQueryValue($county);
        }
        // query params
        if ($postcode !== null) {
            $queryParams['postcode'] = $this->apiClient->getSerializer()->toQueryValue($postcode);
        }
        // query params
        if ($country_id !== null) {
            $queryParams['country_id'] = $this->apiClient->getSerializer()->toQueryValue($country_id);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = $this->apiClient->getSerializer()->toQueryValue($phone);
        }
        // query params
        if ($last_dive !== null) {
            $queryParams['last_dive'] = $this->apiClient->getSerializer()->toQueryValue($last_dive);
        }
        // query params
        if ($number_of_dives !== null) {
            $queryParams['number_of_dives'] = $this->apiClient->getSerializer()->toQueryValue($number_of_dives);
        }
        // query params
        if ($chest_size !== null) {
            $queryParams['chest_size'] = $this->apiClient->getSerializer()->toQueryValue($chest_size);
        }
        // query params
        if ($show_size !== null) {
            $queryParams['show_size'] = $this->apiClient->getSerializer()->toQueryValue($show_size);
        }
        // query params
        if ($height !== null) {
            $queryParams['height'] = $this->apiClient->getSerializer()->toQueryValue($height);
        }
        // query params
        if (is_array($certificates)) {
            $certificates = $this->apiClient->getSerializer()->serializeCollection($certificates, 'multi', true);
        }
        if ($certificates !== null) {
            $queryParams['certificates'] = $this->apiClient->getSerializer()->toQueryValue($certificates);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse20029',
                '/customer/add'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20029', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20029', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteCustomer
     *
     * Delete a customer by ID
     *
     * @param int $id  (required)
     * @return \Swagger\Client\Model\InlineResponse2003
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteCustomer($id)
    {
        list($response) = $this->deleteCustomerWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteCustomerWithHttpInfo
     *
     * Delete a customer by ID
     *
     * @param int $id  (required)
     * @return Array of \Swagger\Client\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteCustomerWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteCustomer');
        }
        // parse inputs
        $resourcePath = "/customer/delete";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2003',
                '/customer/delete'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2003', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2003', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation editCustomer
     *
     * Update a customer by ID
     *
     * @param int $id  (required)
     * @param string $email  (optional)
     * @param string $firstname  (optional)
     * @param string $lastname  (optional)
     * @param \DateTime $birthday  (optional)
     * @param int $gender  (optional)
     * @param string $address_1  (optional)
     * @param string $address_2  (optional)
     * @param string $city  (optional)
     * @param string $county  (optional)
     * @param string $postcode  (optional)
     * @param int $country_id  (optional)
     * @param string $phone  (optional)
     * @param \DateTime $last_dive  (optional)
     * @param int $number_of_dives  (optional)
     * @param string $chest_size  (optional)
     * @param string $show_size  (optional)
     * @param string $height  (optional)
     * @param int[] $certificates  (optional)
     * @return \Swagger\Client\Model\InlineResponse20030
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function editCustomer($id, $email = null, $firstname = null, $lastname = null, $birthday = null, $gender = null, $address_1 = null, $address_2 = null, $city = null, $county = null, $postcode = null, $country_id = null, $phone = null, $last_dive = null, $number_of_dives = null, $chest_size = null, $show_size = null, $height = null, $certificates = null)
    {
        list($response) = $this->editCustomerWithHttpInfo($id, $email, $firstname, $lastname, $birthday, $gender, $address_1, $address_2, $city, $county, $postcode, $country_id, $phone, $last_dive, $number_of_dives, $chest_size, $show_size, $height, $certificates);
        return $response;
    }

    /**
     * Operation editCustomerWithHttpInfo
     *
     * Update a customer by ID
     *
     * @param int $id  (required)
     * @param string $email  (optional)
     * @param string $firstname  (optional)
     * @param string $lastname  (optional)
     * @param \DateTime $birthday  (optional)
     * @param int $gender  (optional)
     * @param string $address_1  (optional)
     * @param string $address_2  (optional)
     * @param string $city  (optional)
     * @param string $county  (optional)
     * @param string $postcode  (optional)
     * @param int $country_id  (optional)
     * @param string $phone  (optional)
     * @param \DateTime $last_dive  (optional)
     * @param int $number_of_dives  (optional)
     * @param string $chest_size  (optional)
     * @param string $show_size  (optional)
     * @param string $height  (optional)
     * @param int[] $certificates  (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20030, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function editCustomerWithHttpInfo($id, $email = null, $firstname = null, $lastname = null, $birthday = null, $gender = null, $address_1 = null, $address_2 = null, $city = null, $county = null, $postcode = null, $country_id = null, $phone = null, $last_dive = null, $number_of_dives = null, $chest_size = null, $show_size = null, $height = null, $certificates = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling editCustomer');
        }
        // parse inputs
        $resourcePath = "/customer/edit";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // query params
        if ($firstname !== null) {
            $queryParams['firstname'] = $this->apiClient->getSerializer()->toQueryValue($firstname);
        }
        // query params
        if ($lastname !== null) {
            $queryParams['lastname'] = $this->apiClient->getSerializer()->toQueryValue($lastname);
        }
        // query params
        if ($birthday !== null) {
            $queryParams['birthday'] = $this->apiClient->getSerializer()->toQueryValue($birthday);
        }
        // query params
        if ($gender !== null) {
            $queryParams['gender'] = $this->apiClient->getSerializer()->toQueryValue($gender);
        }
        // query params
        if ($address_1 !== null) {
            $queryParams['address_1'] = $this->apiClient->getSerializer()->toQueryValue($address_1);
        }
        // query params
        if ($address_2 !== null) {
            $queryParams['address_2'] = $this->apiClient->getSerializer()->toQueryValue($address_2);
        }
        // query params
        if ($city !== null) {
            $queryParams['city'] = $this->apiClient->getSerializer()->toQueryValue($city);
        }
        // query params
        if ($county !== null) {
            $queryParams['county'] = $this->apiClient->getSerializer()->toQueryValue($county);
        }
        // query params
        if ($postcode !== null) {
            $queryParams['postcode'] = $this->apiClient->getSerializer()->toQueryValue($postcode);
        }
        // query params
        if ($country_id !== null) {
            $queryParams['country_id'] = $this->apiClient->getSerializer()->toQueryValue($country_id);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = $this->apiClient->getSerializer()->toQueryValue($phone);
        }
        // query params
        if ($last_dive !== null) {
            $queryParams['last_dive'] = $this->apiClient->getSerializer()->toQueryValue($last_dive);
        }
        // query params
        if ($number_of_dives !== null) {
            $queryParams['number_of_dives'] = $this->apiClient->getSerializer()->toQueryValue($number_of_dives);
        }
        // query params
        if ($chest_size !== null) {
            $queryParams['chest_size'] = $this->apiClient->getSerializer()->toQueryValue($chest_size);
        }
        // query params
        if ($show_size !== null) {
            $queryParams['show_size'] = $this->apiClient->getSerializer()->toQueryValue($show_size);
        }
        // query params
        if ($height !== null) {
            $queryParams['height'] = $this->apiClient->getSerializer()->toQueryValue($height);
        }
        // query params
        if (is_array($certificates)) {
            $certificates = $this->apiClient->getSerializer()->serializeCollection($certificates, 'multi', true);
        }
        if ($certificates !== null) {
            $queryParams['certificates'] = $this->apiClient->getSerializer()->toQueryValue($certificates);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse20030',
                '/customer/edit'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20030', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20030', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAllCustomers
     *
     * Retrieve all customers
     *
     * @return \Swagger\Client\Model\Customer[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getAllCustomers()
    {
        list($response) = $this->getAllCustomersWithHttpInfo();
        return $response;
    }

    /**
     * Operation getAllCustomersWithHttpInfo
     *
     * Retrieve all customers
     *
     * @return Array of \Swagger\Client\Model\Customer[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getAllCustomersWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/customer/all";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Customer[]',
                '/customer/all'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Customer[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Customer[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCustomer
     *
     * Retrieve a customer by ID
     *
     * @param int $id  (optional)
     * @return \Swagger\Client\Model\InlineResponse20029
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCustomer($id = null)
    {
        list($response) = $this->getCustomerWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getCustomerWithHttpInfo
     *
     * Retrieve a customer by ID
     *
     * @param int $id  (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20029, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCustomerWithHttpInfo($id = null)
    {
        // parse inputs
        $resourcePath = "/customer";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse20029',
                '/customer'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20029', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20029', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
