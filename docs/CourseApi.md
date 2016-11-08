# swagger_client.CourseApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_course**](CourseApi.md#create_course) | **POST** /course/add | Create a new course
[**delete_course**](CourseApi.md#delete_course) | **DELETE** /course/delete | Delete a course by ID
[**edit_course**](CourseApi.md#edit_course) | **POST** /course/edit | Update a course by ID
[**get_all_courses**](CourseApi.md#get_all_courses) | **GET** /course/all | Retrieve all courses including any deleted models
[**get_all_with_trashed_courses**](CourseApi.md#get_all_with_trashed_courses) | **GET** /course/all-with-trashed | Retrieve all courses including any deleted models
[**get_course**](CourseApi.md#get_course) | **GET** /course | Retrieve a course by ID


# **create_course**
> InlineResponse20027 create_course(name, description, capacity, prices, certificate_id=certificate_id, tickets=tickets, trainings=trainings)

Create a new course

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CourseApi()
name = 'name_example' # str | 
description = 'description_example' # str | 
capacity = 56 # int | 
prices = [3.4] # list[float] | 
certificate_id = 56 # int |  (optional)
tickets = [56] # list[int] |  (optional)
trainings = [56] # list[int] |  (optional)

try: 
    # Create a new course
    api_response = api_instance.create_course(name, description, capacity, prices, certificate_id=certificate_id, tickets=tickets, trainings=trainings)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CourseApi->create_course: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | 
 **description** | **str**|  | 
 **capacity** | **int**|  | 
 **prices** | [**list[float]**](float.md)|  | 
 **certificate_id** | **int**|  | [optional] 
 **tickets** | [**list[int]**](int.md)|  | [optional] 
 **trainings** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse20027**](InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_course**
> InlineResponse2003 delete_course(id)

Delete a course by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CourseApi()
id = 789 # int | 

try: 
    # Delete a course by ID
    api_response = api_instance.delete_course(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CourseApi->delete_course: %s\n" % e
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

# **edit_course**
> InlineResponse20028 edit_course(id, name, description, capacity, certificate_id=certificate_id, tickets=tickets, trainings=trainings)

Update a course by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CourseApi()
id = 789 # int | 
name = 'name_example' # str | 
description = 'description_example' # str | 
capacity = 56 # int | 
certificate_id = 56 # int |  (optional)
tickets = [56] # list[int] |  (optional)
trainings = [56] # list[int] |  (optional)

try: 
    # Update a course by ID
    api_response = api_instance.edit_course(id, name, description, capacity, certificate_id=certificate_id, tickets=tickets, trainings=trainings)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CourseApi->edit_course: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **name** | **str**|  | 
 **description** | **str**|  | 
 **capacity** | **int**|  | 
 **certificate_id** | **int**|  | [optional] 
 **tickets** | [**list[int]**](int.md)|  | [optional] 
 **trainings** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse20028**](InlineResponse20028.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_courses**
> list[Course] get_all_courses()

Retrieve all courses including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CourseApi()

try: 
    # Retrieve all courses including any deleted models
    api_response = api_instance.get_all_courses()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CourseApi->get_all_courses: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Course]**](Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_courses**
> list[Course] get_all_with_trashed_courses()

Retrieve all courses including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CourseApi()

try: 
    # Retrieve all courses including any deleted models
    api_response = api_instance.get_all_with_trashed_courses()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CourseApi->get_all_with_trashed_courses: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Course]**](Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_course**
> InlineResponse20027 get_course(id=id)

Retrieve a course by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CourseApi()
id = 789 # int |  (optional)

try: 
    # Retrieve a course by ID
    api_response = api_instance.get_course(id=id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CourseApi->get_course: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | [optional] 

### Return type

[**InlineResponse20027**](InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

