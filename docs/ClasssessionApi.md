# swagger_client.ClasssessionApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**class_session_get**](ClasssessionApi.md#class_session_get) | **GET** /class-session | Retrieve a class session by ID
[**create_class_session**](ClasssessionApi.md#create_class_session) | **POST** /class-session/add | Create a new class session
[**delete_classsession**](ClasssessionApi.md#delete_classsession) | **DELETE** /class-session/delete | Delete a class session by ID
[**edit_class_session**](ClasssessionApi.md#edit_class_session) | **POST** /class-session/edit | Update a class session by ID
[**filter_class_session**](ClasssessionApi.md#filter_class_session) | **GET** /class-session/filter | Retrieve all class sessions that match a filter
[**get_all_class_sessions**](ClasssessionApi.md#get_all_class_sessions) | **GET** /class-session/all | Retrieve all class sessions including any deleted models
[**get_all_with_trashed_class_sessions**](ClasssessionApi.md#get_all_with_trashed_class_sessions) | **GET** /class-session/all-with-trashed | Retrieve all class sessions including any deleted models
[**get_class_session_manifest**](ClasssessionApi.md#get_class_session_manifest) | **GET** /class-session/manifest | Retrieve the customer manifest for a class session
[**get_todays_class_session**](ClasssessionApi.md#get_todays_class_session) | **GET** /class-session/today | Retrieve all class sessions that start today
[**get_tommorows_class_session**](ClasssessionApi.md#get_tommorows_class_session) | **GET** /class-session/tommorow | Retrieve all class sessions that start tommorow


# **class_session_get**
> TrainingSession class_session_get(id)

Retrieve a class session by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClasssessionApi()
id = 789 # int | 

try: 
    # Retrieve a class session by ID
    api_response = api_instance.class_session_get(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClasssessionApi->class_session_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**TrainingSession**](TrainingSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **create_class_session**
> InlineResponse20019 create_class_session(start, training_id)

Create a new class session

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClasssessionApi()
start = '2013-10-20' # date | 
training_id = 789 # int | 

try: 
    # Create a new class session
    api_response = api_instance.create_class_session(start, training_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClasssessionApi->create_class_session: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **date**|  | 
 **training_id** | **int**|  | 

### Return type

[**InlineResponse20019**](InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_classsession**
> InlineResponse2003 delete_classsession(id)

Delete a class session by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClasssessionApi()
id = 789 # int | 

try: 
    # Delete a class session by ID
    api_response = api_instance.delete_classsession(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClasssessionApi->delete_classsession: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **edit_class_session**
> InlineResponse20020 edit_class_session(id, start)

Update a class session by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClasssessionApi()
id = 56 # int | 
start = '2013-10-20' # date | 

try: 
    # Update a class session by ID
    api_response = api_instance.edit_class_session(id, start)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClasssessionApi->edit_class_session: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **start** | **date**|  | 

### Return type

[**InlineResponse20020**](InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **filter_class_session**
> list[TrainingSession] filter_class_session()

Retrieve all class sessions that match a filter

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClasssessionApi()

try: 
    # Retrieve all class sessions that match a filter
    api_response = api_instance.filter_class_session()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClasssessionApi->filter_class_session: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[TrainingSession]**](TrainingSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_class_sessions**
> list[TrainingSession] get_all_class_sessions()

Retrieve all class sessions including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClasssessionApi()

try: 
    # Retrieve all class sessions including any deleted models
    api_response = api_instance.get_all_class_sessions()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClasssessionApi->get_all_class_sessions: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[TrainingSession]**](TrainingSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_class_sessions**
> list[TrainingSession] get_all_with_trashed_class_sessions()

Retrieve all class sessions including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClasssessionApi()

try: 
    # Retrieve all class sessions including any deleted models
    api_response = api_instance.get_all_with_trashed_class_sessions()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClasssessionApi->get_all_with_trashed_class_sessions: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[TrainingSession]**](TrainingSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_class_session_manifest**
> TrainingSessionManifest get_class_session_manifest(id)

Retrieve the customer manifest for a class session

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClasssessionApi()
id = 789 # int | 

try: 
    # Retrieve the customer manifest for a class session
    api_response = api_instance.get_class_session_manifest(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClasssessionApi->get_class_session_manifest: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**TrainingSessionManifest**](TrainingSessionManifest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_todays_class_session**
> list[TrainingSession] get_todays_class_session()

Retrieve all class sessions that start today

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClasssessionApi()

try: 
    # Retrieve all class sessions that start today
    api_response = api_instance.get_todays_class_session()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClasssessionApi->get_todays_class_session: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[TrainingSession]**](TrainingSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_tommorows_class_session**
> list[TrainingSession] get_tommorows_class_session()

Retrieve all class sessions that start tommorow

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClasssessionApi()

try: 
    # Retrieve all class sessions that start tommorow
    api_response = api_instance.get_tommorows_class_session()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClasssessionApi->get_tommorows_class_session: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[TrainingSession]**](TrainingSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

