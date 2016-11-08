# swagger_client.ClassApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**class_get**](ClassApi.md#class_get) | **GET** /class | Retrieve a class by ID
[**create_class**](ClassApi.md#create_class) | **POST** /class/add | Create a new class
[**delete_class**](ClassApi.md#delete_class) | **DELETE** /class/delete | Delete a class by ID
[**edit_class**](ClassApi.md#edit_class) | **POST** /class/edit | Update a class by ID
[**get_all_class**](ClassApi.md#get_all_class) | **GET** /class/all | Retrieve all classes including any deleted models
[**get_all_with_trashed_class**](ClassApi.md#get_all_with_trashed_class) | **GET** /class/all-with-trashed | Retrieve all classes including any deleted models


# **class_get**
> Training class_get(id)

Retrieve a class by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClassApi()
id = 789 # int | 

try: 
    # Retrieve a class by ID
    api_response = api_instance.class_get(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClassApi->class_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**Training**](Training.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **create_class**
> InlineResponse20021 create_class(name, duration, description=description)

Create a new class

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClassApi()
name = 'name_example' # str | 
duration = 3.4 # float | 
description = 'description_example' # str |  (optional)

try: 
    # Create a new class
    api_response = api_instance.create_class(name, duration, description=description)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClassApi->create_class: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | 
 **duration** | **float**|  | 
 **description** | **str**|  | [optional] 

### Return type

[**InlineResponse20021**](InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_class**
> InlineResponse2003 delete_class(id)

Delete a class by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClassApi()
id = 789 # int | 

try: 
    # Delete a class by ID
    api_response = api_instance.delete_class(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClassApi->delete_class: %s\n" % e
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

# **edit_class**
> InlineResponse20022 edit_class(id, name, duration, description=description)

Update a class by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClassApi()
id = 56 # int | 
name = 'name_example' # str | 
duration = 3.4 # float | 
description = 'description_example' # str |  (optional)

try: 
    # Update a class by ID
    api_response = api_instance.edit_class(id, name, duration, description=description)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClassApi->edit_class: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **name** | **str**|  | 
 **duration** | **float**|  | 
 **description** | **str**|  | [optional] 

### Return type

[**InlineResponse20022**](InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_class**
> list[Training] get_all_class()

Retrieve all classes including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClassApi()

try: 
    # Retrieve all classes including any deleted models
    api_response = api_instance.get_all_class()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClassApi->get_all_class: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Training]**](Training.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_class**
> list[Training] get_all_with_trashed_class()

Retrieve all classes including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ClassApi()

try: 
    # Retrieve all classes including any deleted models
    api_response = api_instance.get_all_with_trashed_class()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ClassApi->get_all_with_trashed_class: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Training]**](Training.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

