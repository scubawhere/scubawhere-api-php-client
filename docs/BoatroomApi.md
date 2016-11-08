# swagger_client.BoatroomApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_boatroom**](BoatroomApi.md#create_boatroom) | **POST** /boatroom/add | Create a new boatroom
[**delete_boatroom**](BoatroomApi.md#delete_boatroom) | **DELETE** /boatroom/delete | Delete a boatroom by ID
[**edit_boatroom**](BoatroomApi.md#edit_boatroom) | **POST** /boatroom/edit | Update a boatroom by ID
[**get_all_boatrooms**](BoatroomApi.md#get_all_boatrooms) | **GET** /boatroom/all | Retrieve all boatrooms
[**get_all_with_trashed_boatrooms**](BoatroomApi.md#get_all_with_trashed_boatrooms) | **GET** /boatroom/all-with-trashed | Retrieve all boatrooms including any deleted models
[**get_boatroom**](BoatroomApi.md#get_boatroom) | **GET** /boatroom | Retrieve a boatroom by ID


# **create_boatroom**
> InlineResponse2006 create_boatroom(name, description=description)

Create a new boatroom

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatroomApi()
name = 'name_example' # str | 
description = 'description_example' # str |  (optional)

try: 
    # Create a new boatroom
    api_response = api_instance.create_boatroom(name, description=description)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatroomApi->create_boatroom: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | 
 **description** | **str**|  | [optional] 

### Return type

[**InlineResponse2006**](InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_boatroom**
> InlineResponse2003 delete_boatroom(id)

Delete a boatroom by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatroomApi()
id = 789 # int | 

try: 
    # Delete a boatroom by ID
    api_response = api_instance.delete_boatroom(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatroomApi->delete_boatroom: %s\n" % e
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

# **edit_boatroom**
> InlineResponse2006 edit_boatroom(id, name, description=description)

Update a boatroom by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatroomApi()
id = 789 # int | 
name = 'name_example' # str | 
description = 'description_example' # str |  (optional)

try: 
    # Update a boatroom by ID
    api_response = api_instance.edit_boatroom(id, name, description=description)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatroomApi->edit_boatroom: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **name** | **str**|  | 
 **description** | **str**|  | [optional] 

### Return type

[**InlineResponse2006**](InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_boatrooms**
> list[Boatroom] get_all_boatrooms()

Retrieve all boatrooms

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatroomApi()

try: 
    # Retrieve all boatrooms
    api_response = api_instance.get_all_boatrooms()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatroomApi->get_all_boatrooms: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Boatroom]**](Boatroom.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_boatrooms**
> list[Boatroom] get_all_with_trashed_boatrooms()

Retrieve all boatrooms including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatroomApi()

try: 
    # Retrieve all boatrooms including any deleted models
    api_response = api_instance.get_all_with_trashed_boatrooms()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatroomApi->get_all_with_trashed_boatrooms: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Boatroom]**](Boatroom.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_boatroom**
> InlineResponse2006 get_boatroom(id)

Retrieve a boatroom by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BoatroomApi()
id = 789 # int | 

try: 
    # Retrieve a boatroom by ID
    api_response = api_instance.get_boatroom(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BoatroomApi->get_boatroom: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**InlineResponse2006**](InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

