<?php
/**
 * TrainingSessionManifest
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * TrainingSessionManifest Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TrainingSessionManifest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TrainingSessionManifest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'training_id' => 'int',
        'start' => '\DateTime',
        'schedule_id' => 'int',
        'customers' => '\Swagger\Client\Model\Customer[]',
        'capacity' => '\Swagger\Client\Model\TrainingSessionManifestCapacity'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'training_id' => 'training_id',
        'start' => 'start',
        'schedule_id' => 'schedule_id',
        'customers' => 'customers',
        'capacity' => 'capacity'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'training_id' => 'setTrainingId',
        'start' => 'setStart',
        'schedule_id' => 'setScheduleId',
        'customers' => 'setCustomers',
        'capacity' => 'setCapacity'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'training_id' => 'getTrainingId',
        'start' => 'getStart',
        'schedule_id' => 'getScheduleId',
        'customers' => 'getCustomers',
        'capacity' => 'getCapacity'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['training_id'] = isset($data['training_id']) ? $data['training_id'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['schedule_id'] = isset($data['schedule_id']) ? $data['schedule_id'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets training_id
     * @return int
     */
    public function getTrainingId()
    {
        return $this->container['training_id'];
    }

    /**
     * Sets training_id
     * @param int $training_id
     * @return $this
     */
    public function setTrainingId($training_id)
    {
        $this->container['training_id'] = $training_id;

        return $this;
    }

    /**
     * Gets start
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     * @param \DateTime $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets schedule_id
     * @return int
     */
    public function getScheduleId()
    {
        return $this->container['schedule_id'];
    }

    /**
     * Sets schedule_id
     * @param int $schedule_id
     * @return $this
     */
    public function setScheduleId($schedule_id)
    {
        $this->container['schedule_id'] = $schedule_id;

        return $this;
    }

    /**
     * Gets customers
     * @return \Swagger\Client\Model\Customer[]
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     * @param \Swagger\Client\Model\Customer[] $customers
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets capacity
     * @return \Swagger\Client\Model\TrainingSessionManifestCapacity
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     * @param \Swagger\Client\Model\TrainingSessionManifestCapacity $capacity
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


