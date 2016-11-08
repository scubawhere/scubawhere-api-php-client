# swagger_client.AddonApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add_addon**](AddonApi.md#add_addon) | **POST** /addon/add | Create a new addon
[**delete_addon**](AddonApi.md#delete_addon) | **DELETE** /addon/delete | Delete an addon by ID
[**get_addon**](AddonApi.md#get_addon) | **GET** /addon | Retrieve an addon by ID
[**get_all_addons**](AddonApi.md#get_all_addons) | **GET** /addon/all | Retrieve all addons
[**get_all_with_trashed_addons**](AddonApi.md#get_all_with_trashed_addons) | **GET** /addon/all-with-trashed | Retrieve all addons including any deleted models
[**update_addon**](AddonApi.md#update_addon) | **PUT** /addon/edit | Update an Addon


# **add_addon**
> InlineResponse2002 add_addon(name, base_prices, description=description)

Create a new addon

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AddonApi()
name = 'name_example' # str | Name of the type of addon
base_prices = 789 # int | Prices for addon
description = 'description_example' # str | Description of the addon (optional)

try: 
    # Create a new addon
    api_response = api_instance.add_addon(name, base_prices, description=description)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AddonApi->add_addon: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**| Name of the type of addon | 
 **base_prices** | **int**| Prices for addon | 
 **description** | **str**| Description of the addon | [optional] 

### Return type

[**InlineResponse2002**](InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_addon**
> InlineResponse2003 delete_addon(body=body)

Delete an addon by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AddonApi()
body = 789 # int | ID of the Addon (optional)

try: 
    # Delete an addon by ID
    api_response = api_instance.delete_addon(body=body)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AddonApi->delete_addon: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **int**| ID of the Addon | [optional] 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_addon**
> InlineResponse2001 get_addon(id)

Retrieve an addon by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AddonApi()
id = 789 # int | ID of the addon to be retrieved

try: 
    # Retrieve an addon by ID
    api_response = api_instance.get_addon(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AddonApi->get_addon: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the addon to be retrieved | 

### Return type

[**InlineResponse2001**](InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_addons**
> list[Addon] get_all_addons()

Retrieve all addons

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AddonApi()

try: 
    # Retrieve all addons
    api_response = api_instance.get_all_addons()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AddonApi->get_all_addons: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Addon]**](Addon.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_addons**
> list[Addon] get_all_with_trashed_addons()

Retrieve all addons including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AddonApi()

try: 
    # Retrieve all addons including any deleted models
    api_response = api_instance.get_all_with_trashed_addons()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AddonApi->get_all_with_trashed_addons: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Addon]**](Addon.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_addon**
> InlineResponse2002 update_addon(id, name=name, description=description)

Update an Addon

Updates the addon by id using the specified fields

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AddonApi()
id = 789 # int | ID of the Addon to be updated
name = 'name_example' # str | Name of the Addon (optional)
description = 'description_example' # str | Description of the Addon (optional)

try: 
    # Update an Addon
    api_response = api_instance.update_addon(id, name=name, description=description)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AddonApi->update_addon: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the Addon to be updated | 
 **name** | **str**| Name of the Addon | [optional] 
 **description** | **str**| Description of the Addon | [optional] 

### Return type

[**InlineResponse2002**](InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

