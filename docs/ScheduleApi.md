# swagger_client.ScheduleApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add_schedule**](ScheduleApi.md#add_schedule) | **GET** /schedule/add | Create a new schedule for classes
[**get_all_schedules**](ScheduleApi.md#get_all_schedules) | **GET** /schedule/all | Retrieve all of the schedules for classes
[**get_schedule**](ScheduleApi.md#get_schedule) | **GET** /schedule | Retrieve a schedule by ID


# **add_schedule**
> InlineResponse2013 add_schedule(schedule, training_session_id, until=until)

Create a new schedule for classes

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ScheduleApi()
schedule = 'schedule_example' # str | 
training_session_id = 789 # int | 
until = '2013-10-20' # date |  (optional)

try: 
    # Create a new schedule for classes
    api_response = api_instance.add_schedule(schedule, training_session_id, until=until)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ScheduleApi->add_schedule: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schedule** | **str**|  | 
 **training_session_id** | **int**|  | 
 **until** | **date**|  | [optional] 

### Return type

[**InlineResponse2013**](InlineResponse2013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_schedules**
> list[Schedule] get_all_schedules()

Retrieve all of the schedules for classes

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ScheduleApi()

try: 
    # Retrieve all of the schedules for classes
    api_response = api_instance.get_all_schedules()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ScheduleApi->get_all_schedules: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Schedule]**](Schedule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_schedule**
> Schedule get_schedule(id)

Retrieve a schedule by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ScheduleApi()
id = 789 # int | 

try: 
    # Retrieve a schedule by ID
    api_response = api_instance.get_schedule(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ScheduleApi->get_schedule: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**Schedule**](Schedule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

