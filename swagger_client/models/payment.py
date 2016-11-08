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


class Payment(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, id=None, booking_id=None, amount=None, currency_id=None, payment_gateway_id=None, received_at=None, payment_gateway=None, currency=None):
        """
        Payment - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'id': 'int',
            'booking_id': 'int',
            'amount': 'str',
            'currency_id': 'int',
            'payment_gateway_id': 'int',
            'received_at': 'date',
            'payment_gateway': 'PaymentGateway',
            'currency': 'Currency'
        }

        self.attribute_map = {
            'id': 'id',
            'booking_id': 'booking_id',
            'amount': 'amount',
            'currency_id': 'currency_id',
            'payment_gateway_id': 'payment_gateway_id',
            'received_at': 'received_at',
            'payment_gateway': 'payment_gateway',
            'currency': 'currency'
        }

        self._id = id
        self._booking_id = booking_id
        self._amount = amount
        self._currency_id = currency_id
        self._payment_gateway_id = payment_gateway_id
        self._received_at = received_at
        self._payment_gateway = payment_gateway
        self._currency = currency

    @property
    def id(self):
        """
        Gets the id of this Payment.


        :return: The id of this Payment.
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this Payment.


        :param id: The id of this Payment.
        :type: int
        """

        self._id = id

    @property
    def booking_id(self):
        """
        Gets the booking_id of this Payment.


        :return: The booking_id of this Payment.
        :rtype: int
        """
        return self._booking_id

    @booking_id.setter
    def booking_id(self, booking_id):
        """
        Sets the booking_id of this Payment.


        :param booking_id: The booking_id of this Payment.
        :type: int
        """

        self._booking_id = booking_id

    @property
    def amount(self):
        """
        Gets the amount of this Payment.


        :return: The amount of this Payment.
        :rtype: str
        """
        return self._amount

    @amount.setter
    def amount(self, amount):
        """
        Sets the amount of this Payment.


        :param amount: The amount of this Payment.
        :type: str
        """

        self._amount = amount

    @property
    def currency_id(self):
        """
        Gets the currency_id of this Payment.


        :return: The currency_id of this Payment.
        :rtype: int
        """
        return self._currency_id

    @currency_id.setter
    def currency_id(self, currency_id):
        """
        Sets the currency_id of this Payment.


        :param currency_id: The currency_id of this Payment.
        :type: int
        """

        self._currency_id = currency_id

    @property
    def payment_gateway_id(self):
        """
        Gets the payment_gateway_id of this Payment.


        :return: The payment_gateway_id of this Payment.
        :rtype: int
        """
        return self._payment_gateway_id

    @payment_gateway_id.setter
    def payment_gateway_id(self, payment_gateway_id):
        """
        Sets the payment_gateway_id of this Payment.


        :param payment_gateway_id: The payment_gateway_id of this Payment.
        :type: int
        """

        self._payment_gateway_id = payment_gateway_id

    @property
    def received_at(self):
        """
        Gets the received_at of this Payment.


        :return: The received_at of this Payment.
        :rtype: date
        """
        return self._received_at

    @received_at.setter
    def received_at(self, received_at):
        """
        Sets the received_at of this Payment.


        :param received_at: The received_at of this Payment.
        :type: date
        """

        self._received_at = received_at

    @property
    def payment_gateway(self):
        """
        Gets the payment_gateway of this Payment.


        :return: The payment_gateway of this Payment.
        :rtype: PaymentGateway
        """
        return self._payment_gateway

    @payment_gateway.setter
    def payment_gateway(self, payment_gateway):
        """
        Sets the payment_gateway of this Payment.


        :param payment_gateway: The payment_gateway of this Payment.
        :type: PaymentGateway
        """

        self._payment_gateway = payment_gateway

    @property
    def currency(self):
        """
        Gets the currency of this Payment.


        :return: The currency of this Payment.
        :rtype: Currency
        """
        return self._currency

    @currency.setter
    def currency(self, currency):
        """
        Sets the currency of this Payment.


        :param currency: The currency of this Payment.
        :type: Currency
        """

        self._currency = currency

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