# swagger_client.TripApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_trip**](TripApi.md#create_trip) | **POST** /trip/add | Create a new trip
[**delete_trip**](TripApi.md#delete_trip) | **DELETE** /trip/delete | Delete a trip by ID
[**edit_trip**](TripApi.md#edit_trip) | **POST** /trip/edit | Update a trip by ID
[**get_all_trips**](TripApi.md#get_all_trips) | **GET** /trip/all | Retrieve all trips including any deleted models
[**get_all_with_trashed_trips**](TripApi.md#get_all_with_trashed_trips) | **GET** /trip/all-with-trashed | Retrieve all trips including any deleted models
[**trip_get**](TripApi.md#trip_get) | **GET** /trip | Retrieve a trip by ID


# **create_trip**
> InlineResponse20046 create_trip(name, duration, locations, tags, description=description, boat_required=boat_required)

Create a new trip

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TripApi()
name = 'name_example' # str | 
duration = 3.4 # float | 
locations = [56] # list[int] | 
tags = [56] # list[int] | 
description = 'description_example' # str |  (optional)
boat_required = true # bool |  (optional)

try: 
    # Create a new trip
    api_response = api_instance.create_trip(name, duration, locations, tags, description=description, boat_required=boat_required)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TripApi->create_trip: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | 
 **duration** | **float**|  | 
 **locations** | [**list[int]**](int.md)|  | 
 **tags** | [**list[int]**](int.md)|  | 
 **description** | **str**|  | [optional] 
 **boat_required** | **bool**|  | [optional] 

### Return type

[**InlineResponse20046**](InlineResponse20046.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_trip**
> InlineResponse2003 delete_trip(id)

Delete a trip by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TripApi()
id = 789 # int | 

try: 
    # Delete a trip by ID
    api_response = api_instance.delete_trip(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TripApi->delete_trip: %s\n" % e
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

# **edit_trip**
> InlineResponse20047 edit_trip(id, name, duration, locations, tags, description=description, boat_required=boat_required)

Update a trip by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TripApi()
id = 789 # int | 
name = 'name_example' # str | 
duration = 3.4 # float | 
locations = [56] # list[int] | 
tags = [56] # list[int] | 
description = 'description_example' # str |  (optional)
boat_required = true # bool |  (optional)

try: 
    # Update a trip by ID
    api_response = api_instance.edit_trip(id, name, duration, locations, tags, description=description, boat_required=boat_required)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TripApi->edit_trip: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **name** | **str**|  | 
 **duration** | **float**|  | 
 **locations** | [**list[int]**](int.md)|  | 
 **tags** | [**list[int]**](int.md)|  | 
 **description** | **str**|  | [optional] 
 **boat_required** | **bool**|  | [optional] 

### Return type

[**InlineResponse20047**](InlineResponse20047.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_trips**
> list[Trip] get_all_trips()

Retrieve all trips including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TripApi()

try: 
    # Retrieve all trips including any deleted models
    api_response = api_instance.get_all_trips()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TripApi->get_all_trips: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Trip]**](Trip.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_trips**
> list[Trip] get_all_with_trashed_trips()

Retrieve all trips including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TripApi()

try: 
    # Retrieve all trips including any deleted models
    api_response = api_instance.get_all_with_trashed_trips()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TripApi->get_all_with_trashed_trips: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Trip]**](Trip.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **trip_get**
> Trip trip_get(id)

Retrieve a trip by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TripApi()
id = 789 # int | 

try: 
    # Retrieve a trip by ID
    api_response = api_instance.trip_get(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TripApi->trip_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**Trip**](Trip.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

