# swagger_client.LocationsApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get_location**](LocationsApi.md#get_location) | **GET** /location | Retrieve a location by its ID


# **get_location**
> InlineResponse20031 get_location(id)

Retrieve a location by its ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.LocationsApi()
id = 789 # int | 

try: 
    # Retrieve a location by its ID
    api_response = api_instance.get_location(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling LocationsApi->get_location: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**InlineResponse20031**](InlineResponse20031.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

