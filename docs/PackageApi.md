# swagger_client.PackageApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_package**](PackageApi.md#create_package) | **POST** /package/add | Create a new package
[**delete_package**](PackageApi.md#delete_package) | **DELETE** /package/delete | Delete a package by ID
[**edit_package**](PackageApi.md#edit_package) | **POST** /package/edit | Update a package by ID
[**get_all_packages**](PackageApi.md#get_all_packages) | **GET** /package/all | Retrieve all packages including any deleted models
[**get_all_with_trashed_packages**](PackageApi.md#get_all_with_trashed_packages) | **GET** /package/all-with-trashed | Retrieve all packages including any deleted models
[**get_package**](PackageApi.md#get_package) | **GET** /package | Retrieve a package by ID


# **create_package**
> InlineResponse20032 create_package(name, description=description, available_from=available_from, available_until=available_until, tickets=tickets, courses=courses, accommodations=accommodations, addons=addons, prices=prices)

Create a new package

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PackageApi()
name = 'name_example' # str | 
description = 'description_example' # str |  (optional)
available_from = '2013-10-20' # date |  (optional)
available_until = '2013-10-20' # date |  (optional)
tickets = [56] # list[int] |  (optional)
courses = [56] # list[int] |  (optional)
accommodations = [56] # list[int] |  (optional)
addons = [56] # list[int] |  (optional)
prices = [56] # list[int] |  (optional)

try: 
    # Create a new package
    api_response = api_instance.create_package(name, description=description, available_from=available_from, available_until=available_until, tickets=tickets, courses=courses, accommodations=accommodations, addons=addons, prices=prices)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PackageApi->create_package: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | 
 **description** | **str**|  | [optional] 
 **available_from** | **date**|  | [optional] 
 **available_until** | **date**|  | [optional] 
 **tickets** | [**list[int]**](int.md)|  | [optional] 
 **courses** | [**list[int]**](int.md)|  | [optional] 
 **accommodations** | [**list[int]**](int.md)|  | [optional] 
 **addons** | [**list[int]**](int.md)|  | [optional] 
 **prices** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse20032**](InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_package**
> InlineResponse2003 delete_package(id)

Delete a package by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PackageApi()
id = 789 # int | 

try: 
    # Delete a package by ID
    api_response = api_instance.delete_package(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PackageApi->delete_package: %s\n" % e
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

# **edit_package**
> InlineResponse20033 edit_package(id, name, description=description, available_from=available_from, available_until=available_until, tickets=tickets, courses=courses, accommodations=accommodations, addons=addons, prices=prices)

Update a package by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PackageApi()
id = 789 # int | 
name = 'name_example' # str | 
description = 'description_example' # str |  (optional)
available_from = '2013-10-20' # date |  (optional)
available_until = '2013-10-20' # date |  (optional)
tickets = [56] # list[int] |  (optional)
courses = [56] # list[int] |  (optional)
accommodations = [56] # list[int] |  (optional)
addons = [56] # list[int] |  (optional)
prices = [56] # list[int] |  (optional)

try: 
    # Update a package by ID
    api_response = api_instance.edit_package(id, name, description=description, available_from=available_from, available_until=available_until, tickets=tickets, courses=courses, accommodations=accommodations, addons=addons, prices=prices)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PackageApi->edit_package: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **name** | **str**|  | 
 **description** | **str**|  | [optional] 
 **available_from** | **date**|  | [optional] 
 **available_until** | **date**|  | [optional] 
 **tickets** | [**list[int]**](int.md)|  | [optional] 
 **courses** | [**list[int]**](int.md)|  | [optional] 
 **accommodations** | [**list[int]**](int.md)|  | [optional] 
 **addons** | [**list[int]**](int.md)|  | [optional] 
 **prices** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse20033**](InlineResponse20033.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_packages**
> list[Package] get_all_packages()

Retrieve all packages including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PackageApi()

try: 
    # Retrieve all packages including any deleted models
    api_response = api_instance.get_all_packages()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PackageApi->get_all_packages: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Package]**](Package.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_packages**
> list[Package] get_all_with_trashed_packages()

Retrieve all packages including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PackageApi()

try: 
    # Retrieve all packages including any deleted models
    api_response = api_instance.get_all_with_trashed_packages()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PackageApi->get_all_with_trashed_packages: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Package]**](Package.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_package**
> InlineResponse20032 get_package(id=id)

Retrieve a package by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PackageApi()
id = 789 # int |  (optional)

try: 
    # Retrieve a package by ID
    api_response = api_instance.get_package(id=id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PackageApi->get_package: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | [optional] 

### Return type

[**InlineResponse20032**](InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

