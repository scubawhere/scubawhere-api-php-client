# swagger_client.BoatApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_boat**](BoatApi.md#create_boat) | **POST** /boat/add | Create a new boat
[**delete_boat**](BoatApi.md#delete_boat) | **DELETE** /boat/delete | Delete a boat by ID
[**edit_boat**](BoatApi.md#edit_boat) | **POST** /boat/edit | Update a boat by ID
[**get_all_boats**](BoatApi.md#get_all_boats) | **GET** /boat/all | Retrieve all boats
[**get_all_with_trashed_boats**](BoatApi.md#get_all_with_trashed_boats) | **GET** /boat/all-with-trashed | Retrieve all agents including any deleted models
[**get_boat**](BoatApi.md#get_boat) | **GET** /boat | Retrieve a boat by ID


# **create_boat**
> InlineResponse2005 create_boat(name, capacity, description=description, boatrooms=boatrooms)

Create a new boat

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatApi()
name = 'name_example' # str | 
capacity = 789 # int | 
description = 'description_example' # str |  (optional)
boatrooms = [56] # list[int] |  (optional)

try: 
    # Create a new boat
    api_response = api_instance.create_boat(name, capacity, description=description, boatrooms=boatrooms)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatApi->create_boat: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | 
 **capacity** | **int**|  | 
 **description** | **str**|  | [optional] 
 **boatrooms** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse2005**](InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_boat**
> InlineResponse2003 delete_boat(id)

Delete a boat by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatApi()
id = 789 # int | 

try: 
    # Delete a boat by ID
    api_response = api_instance.delete_boat(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatApi->delete_boat: %s\n" % e
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

# **edit_boat**
> InlineResponse2004 edit_boat(name, capacity, description=description, boatrooms=boatrooms)

Update a boat by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatApi()
name = 'name_example' # str | 
capacity = 789 # int | 
description = 'description_example' # str |  (optional)
boatrooms = [56] # list[int] |  (optional)

try: 
    # Update a boat by ID
    api_response = api_instance.edit_boat(name, capacity, description=description, boatrooms=boatrooms)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatApi->edit_boat: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | 
 **capacity** | **int**|  | 
 **description** | **str**|  | [optional] 
 **boatrooms** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse2004**](InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_boats**
> list[Boat] get_all_boats()

Retrieve all boats

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatApi()

try: 
    # Retrieve all boats
    api_response = api_instance.get_all_boats()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatApi->get_all_boats: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Boat]**](Boat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_boats**
> list[Boat] get_all_with_trashed_boats()

Retrieve all agents including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatApi()

try: 
    # Retrieve all agents including any deleted models
    api_response = api_instance.get_all_with_trashed_boats()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatApi->get_all_with_trashed_boats: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Boat]**](Boat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_boat**
> InlineResponse2005 get_boat(id)

Retrieve a boat by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatApi()
id = 789 # int | ID of the boat to be retrieved

try: 
    # Retrieve a boat by ID
    api_response = api_instance.get_boat(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatApi->get_boat: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the boat to be retrieved | 

### Return type

[**InlineResponse2005**](InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

