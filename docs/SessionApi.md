# swagger_client.SessionApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_session**](SessionApi.md#create_session) | **POST** /session/add | Create a new session
[**delete_session**](SessionApi.md#delete_session) | **DELETE** /session/delete | Delete a session by ID
[**edit_session**](SessionApi.md#edit_session) | **POST** /session/edit | Update a session by ID
[**filter_sessions**](SessionApi.md#filter_sessions) | **GET** /session/filter | Retrieve all of tsessions that match a filter
[**get_all_sessions**](SessionApi.md#get_all_sessions) | **GET** /session/all | Retrieve all sessions including any deleted models
[**get_all_with_trashed_sessions**](SessionApi.md#get_all_with_trashed_sessions) | **GET** /session/all-with-trashed | Retrieve all sessions including any deleted models
[**get_manifest**](SessionApi.md#get_manifest) | **GET** /session/manifest | Retrieve the customer manifest for this session
[**get_session**](SessionApi.md#get_session) | **GET** /session | Retrieve a session by ID
[**get_today_sessions**](SessionApi.md#get_today_sessions) | **GET** /session/today | Retrieve all of todays sessions
[**get_tommorow_sessions**](SessionApi.md#get_tommorow_sessions) | **GET** /session/tommorow | Retrieve all of tommorows sessions


# **create_session**
> InlineResponse20043 create_session(start, boat_id=boat_id, trip_id=trip_id)

Create a new session

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.SessionApi()
start = '2013-10-20' # date | 
boat_id = 789 # int |  (optional)
trip_id = 789 # int |  (optional)

try: 
    # Create a new session
    api_response = api_instance.create_session(start, boat_id=boat_id, trip_id=trip_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling SessionApi->create_session: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **date**|  | 
 **boat_id** | **int**|  | [optional] 
 **trip_id** | **int**|  | [optional] 

### Return type

[**InlineResponse20043**](InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_session**
> InlineResponse2003 delete_session(id)

Delete a session by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.SessionApi()
id = 789 # int | 

try: 
    # Delete a session by ID
    api_response = api_instance.delete_session(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling SessionApi->delete_session: %s\n" % e
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

# **edit_session**
> InlineResponse20044 edit_session(id, start, boat_id=boat_id)

Update a session by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.SessionApi()
id = 789 # int | 
start = '2013-10-20' # date | 
boat_id = 789 # int |  (optional)

try: 
    # Update a session by ID
    api_response = api_instance.edit_session(id, start, boat_id=boat_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling SessionApi->edit_session: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **start** | **date**|  | 
 **boat_id** | **int**|  | [optional] 

### Return type

[**InlineResponse20044**](InlineResponse20044.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **filter_sessions**
> InlineResponse20045 filter_sessions(after=after, before=before, trip_id=trip_id, ticket_id=ticket_id, package_id=package_id, course_id=course_id)

Retrieve all of tsessions that match a filter

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.SessionApi()
after = '2013-10-20' # date |  (optional)
before = '2013-10-20' # date |  (optional)
trip_id = 789 # int |  (optional)
ticket_id = 789 # int |  (optional)
package_id = 789 # int |  (optional)
course_id = 789 # int |  (optional)

try: 
    # Retrieve all of tsessions that match a filter
    api_response = api_instance.filter_sessions(after=after, before=before, trip_id=trip_id, ticket_id=ticket_id, package_id=package_id, course_id=course_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling SessionApi->filter_sessions: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **date**|  | [optional] 
 **before** | **date**|  | [optional] 
 **trip_id** | **int**|  | [optional] 
 **ticket_id** | **int**|  | [optional] 
 **package_id** | **int**|  | [optional] 
 **course_id** | **int**|  | [optional] 

### Return type

[**InlineResponse20045**](InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_sessions**
> list[Session] get_all_sessions()

Retrieve all sessions including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.SessionApi()

try: 
    # Retrieve all sessions including any deleted models
    api_response = api_instance.get_all_sessions()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling SessionApi->get_all_sessions: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Session]**](Session.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_sessions**
> list[Session] get_all_with_trashed_sessions()

Retrieve all sessions including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.SessionApi()

try: 
    # Retrieve all sessions including any deleted models
    api_response = api_instance.get_all_with_trashed_sessions()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling SessionApi->get_all_with_trashed_sessions: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Session]**](Session.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_manifest**
> InlineResponse20043 get_manifest(id)

Retrieve the customer manifest for this session

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.SessionApi()
id = 789 # int | 

try: 
    # Retrieve the customer manifest for this session
    api_response = api_instance.get_manifest(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling SessionApi->get_manifest: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**InlineResponse20043**](InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_session**
> InlineResponse20043 get_session(id=id)

Retrieve a session by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.SessionApi()
id = 789 # int |  (optional)

try: 
    # Retrieve a session by ID
    api_response = api_instance.get_session(id=id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling SessionApi->get_session: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | [optional] 

### Return type

[**InlineResponse20043**](InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_today_sessions**
> InlineResponse20045 get_today_sessions()

Retrieve all of todays sessions

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.SessionApi()

try: 
    # Retrieve all of todays sessions
    api_response = api_instance.get_today_sessions()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling SessionApi->get_today_sessions: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse20045**](InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_tommorow_sessions**
> InlineResponse20045 get_tommorow_sessions()

Retrieve all of tommorows sessions

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.SessionApi()

try: 
    # Retrieve all of tommorows sessions
    api_response = api_instance.get_tommorow_sessions()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling SessionApi->get_tommorow_sessions: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse20045**](InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

