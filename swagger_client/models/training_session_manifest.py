# coding: utf-8

"""
    Scubawhere API Documentation

    This is the documentation for scubawhere's RMS API. This API is only to be used by authorized parties with valid auth tokens.  [Learn about scubawhere](http://www.scubawhere.com) to become an authorized consumer of our API 

    OpenAPI spec version: 1.0.0
    Contact: bryan@scubawhere.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
"""

from pprint import pformat
from six import iteritems
import re


class TrainingSessionManifest(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, id=None, training_id=None, start=None, schedule_id=None, customers=None, capacity=None):
        """
        TrainingSessionManifest - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'id': 'int',
            'training_id': 'int',
            'start': 'date',
            'schedule_id': 'int',
            'customers': 'list[Customer]',
            'capacity': 'TrainingSessionManifestCapacity'
        }

        self.attribute_map = {
            'id': 'id',
            'training_id': 'training_id',
            'start': 'start',
            'schedule_id': 'schedule_id',
            'customers': 'customers',
            'capacity': 'capacity'
        }

        self._id = id
        self._training_id = training_id
        self._start = start
        self._schedule_id = schedule_id
        self._customers = customers
        self._capacity = capacity

    @property
    def id(self):
        """
        Gets the id of this TrainingSessionManifest.


        :return: The id of this TrainingSessionManifest.
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this TrainingSessionManifest.


        :param id: The id of this TrainingSessionManifest.
        :type: int
        """

        self._id = id

    @property
    def training_id(self):
        """
        Gets the training_id of this TrainingSessionManifest.


        :return: The training_id of this TrainingSessionManifest.
        :rtype: int
        """
        return self._training_id

    @training_id.setter
    def training_id(self, training_id):
        """
        Sets the training_id of this TrainingSessionManifest.


        :param training_id: The training_id of this TrainingSessionManifest.
        :type: int
        """

        self._training_id = training_id

    @property
    def start(self):
        """
        Gets the start of this TrainingSessionManifest.


        :return: The start of this TrainingSessionManifest.
        :rtype: date
        """
        return self._start

    @start.setter
    def start(self, start):
        """
        Sets the start of this TrainingSessionManifest.


        :param start: The start of this TrainingSessionManifest.
        :type: date
        """

        self._start = start

    @property
    def schedule_id(self):
        """
        Gets the schedule_id of this TrainingSessionManifest.


        :return: The schedule_id of this TrainingSessionManifest.
        :rtype: int
        """
        return self._schedule_id

    @schedule_id.setter
    def schedule_id(self, schedule_id):
        """
        Sets the schedule_id of this TrainingSessionManifest.


        :param schedule_id: The schedule_id of this TrainingSessionManifest.
        :type: int
        """

        self._schedule_id = schedule_id

    @property
    def customers(self):
        """
        Gets the customers of this TrainingSessionManifest.


        :return: The customers of this TrainingSessionManifest.
        :rtype: list[Customer]
        """
        return self._customers

    @customers.setter
    def customers(self, customers):
        """
        Sets the customers of this TrainingSessionManifest.


        :param customers: The customers of this TrainingSessionManifest.
        :type: list[Customer]
        """

        self._customers = customers

    @property
    def capacity(self):
        """
        Gets the capacity of this TrainingSessionManifest.


        :return: The capacity of this TrainingSessionManifest.
        :rtype: TrainingSessionManifestCapacity
        """
        return self._capacity

    @capacity.setter
    def capacity(self, capacity):
        """
        Sets the capacity of this TrainingSessionManifest.


        :param capacity: The capacity of this TrainingSessionManifest.
        :type: TrainingSessionManifestCapacity
        """

        self._capacity = capacity

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other