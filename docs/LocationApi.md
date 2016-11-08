# swagger_client.LocationApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attach_location**](LocationApi.md#attach_location) | **POST** /location/attach | Attach a location to a company
[**create_location**](LocationApi.md#create_location) | **POST** /location/add | Create a location
[**dettach_location**](LocationApi.md#dettach_location) | **POST** /location/dettach | Dettach a location to a company
[**get_all_locations**](LocationApi.md#get_all_locations) | **GET** /location/all | Retrieve all locations associated with the company
[**get_location_tags**](LocationApi.md#get_location_tags) | **GET** /location/tags | Retrieve all tags associated to all locations
[**update_location**](LocationApi.md#update_location) | **PUT** /location/edit | Update a location


# **attach_location**
> InlineResponse2003 attach_location(location_id)

Attach a location to a company

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.LocationApi()
location_id = 789 # int | 

try: 
    # Attach a location to a company
    api_response = api_instance.attach_location(location_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling LocationApi->attach_location: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **create_location**
> InlineResponse2003 create_location(name, description=description, latitude=latitude, longitude=longitude, tags=tags)

Create a location

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.LocationApi()
name = 'name_example' # str | 
description = 'description_example' # str |  (optional)
latitude = 3.4 # float |  (optional)
longitude = 3.4 # float |  (optional)
tags = [56] # list[int] |  (optional)

try: 
    # Create a location
    api_response = api_instance.create_location(name, description=description, latitude=latitude, longitude=longitude, tags=tags)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling LocationApi->create_location: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | 
 **description** | **str**|  | [optional] 
 **latitude** | **float**|  | [optional] 
 **longitude** | **float**|  | [optional] 
 **tags** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **dettach_location**
> InlineResponse2003 dettach_location(location_id)

Dettach a location to a company

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.LocationApi()
location_id = 789 # int | 

try: 
    # Dettach a location to a company
    api_response = api_instance.dettach_location(location_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling LocationApi->dettach_location: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_locations**
> InlineResponse2003 get_all_locations()

Retrieve all locations associated with the company

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.LocationApi()

try: 
    # Retrieve all locations associated with the company
    api_response = api_instance.get_all_locations()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling LocationApi->get_all_locations: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_location_tags**
> InlineResponse2003 get_location_tags()

Retrieve all tags associated to all locations

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.LocationApi()

try: 
    # Retrieve all tags associated to all locations
    api_response = api_instance.get_location_tags()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling LocationApi->get_location_tags: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_location**
> InlineResponse2003 update_location(location_id, description)

Update a location

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.LocationApi()
location_id = 789 # int | 
description = 789 # int | 

try: 
    # Update a location
    api_response = api_instance.update_location(location_id, description)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling LocationApi->update_location: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  | 
 **description** | **int**|  | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

