# swagger_client.TimetableApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add_timetable**](TimetableApi.md#add_timetable) | **GET** /timetable/add | Create a new timetable for sessions
[**get_all_timetables**](TimetableApi.md#get_all_timetables) | **GET** /timetable/all | Retrieve all of the timetables for sessions
[**get_timetable**](TimetableApi.md#get_timetable) | **GET** /timetable | Retrieve a timetable by ID


# **add_timetable**
> InlineResponse2015 add_timetable(schedule, session_id, until=until)

Create a new timetable for sessions

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TimetableApi()
schedule = 'schedule_example' # str | 
session_id = 789 # int | 
until = '2013-10-20' # date |  (optional)

try: 
    # Create a new timetable for sessions
    api_response = api_instance.add_timetable(schedule, session_id, until=until)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TimetableApi->add_timetable: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schedule** | **str**|  | 
 **session_id** | **int**|  | 
 **until** | **date**|  | [optional] 

### Return type

[**InlineResponse2015**](InlineResponse2015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_timetables**
> list[Timetable] get_all_timetables()

Retrieve all of the timetables for sessions

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TimetableApi()

try: 
    # Retrieve all of the timetables for sessions
    api_response = api_instance.get_all_timetables()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TimetableApi->get_all_timetables: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Timetable]**](Timetable.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_timetable**
> Timetable get_timetable(id)

Retrieve a timetable by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TimetableApi()
id = 789 # int | 

try: 
    # Retrieve a timetable by ID
    api_response = api_instance.get_timetable(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TimetableApi->get_timetable: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**Timetable**](Timetable.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

