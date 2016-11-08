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

from __future__ import absolute_import

import os
import sys
import unittest

import swagger_client
from swagger_client.rest import ApiException
from swagger_client.apis.classsession_api import ClasssessionApi


class TestClasssessionApi(unittest.TestCase):
    """ ClasssessionApi unit test stubs """

    def setUp(self):
        self.api = swagger_client.apis.classsession_api.ClasssessionApi()

    def tearDown(self):
        pass

    def test_class_session_get(self):
        """
        Test case for class_session_get

        Retrieve a class session by ID
        """
        pass

    def test_create_class_session(self):
        """
        Test case for create_class_session

        Create a new class session
        """
        pass

    def test_delete_classsession(self):
        """
        Test case for delete_classsession

        Delete a class session by ID
        """
        pass

    def test_edit_class_session(self):
        """
        Test case for edit_class_session

        Update a class session by ID
        """
        pass

    def test_filter_class_session(self):
        """
        Test case for filter_class_session

        Retrieve all class sessions that match a filter
        """
        pass

    def test_get_all_class_sessions(self):
        """
        Test case for get_all_class_sessions

        Retrieve all class sessions including any deleted models
        """
        pass

    def test_get_all_with_trashed_class_sessions(self):
        """
        Test case for get_all_with_trashed_class_sessions

        Retrieve all class sessions including any deleted models
        """
        pass

    def test_get_class_session_manifest(self):
        """
        Test case for get_class_session_manifest

        Retrieve the customer manifest for a class session
        """
        pass

    def test_get_todays_class_session(self):
        """
        Test case for get_todays_class_session

        Retrieve all class sessions that start today
        """
        pass

    def test_get_tommorows_class_session(self):
        """
        Test case for get_tommorows_class_session

        Retrieve all class sessions that start tommorow
        """
        pass


if __name__ == '__main__':
    unittest.main()
