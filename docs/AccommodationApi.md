# swagger_client.AccommodationApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add_accommodation**](AccommodationApi.md#add_accommodation) | **POST** /accommodation/add | 
[**delete_accommodation**](AccommodationApi.md#delete_accommodation) | **DELETE** /accommodation/delete | Delete an accommodation by ID
[**edit_agent**](AccommodationApi.md#edit_agent) | **POST** /agent/edit | Create a new agent
[**filter_accommodation**](AccommodationApi.md#filter_accommodation) | **GET** /accommodation/filter | Get all the accommodations matching a filter
[**find_accommodation**](AccommodationApi.md#find_accommodation) | **GET** /accommodation | 
[**get_all_accommodations**](AccommodationApi.md#get_all_accommodations) | **GET** /accommodations/all | 
[**get_all_with_trashed_accommodations**](AccommodationApi.md#get_all_with_trashed_accommodations) | **GET** /accommodations/all-with-trashed | Retrieve all accommodation including any deleted models
[**update_accommodation**](AccommodationApi.md#update_accommodation) | **PUT** /accommodation/edit | Update an Accommodation


# **add_accommodation**
> InlineResponse200 add_accommodation(name, capacity, base_prices, description=description)



Create an accommodation

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AccommodationApi()
name = 'name_example' # str | Name of the type of accommodation
capacity = 789 # int | Number of beds in the accommodation
base_prices = 56 # int | Price of the accommodation and the dates of when the price is applicable
description = 'description_example' # str | Description of the accommodation (optional)

try: 
    api_response = api_instance.add_accommodation(name, capacity, base_prices, description=description)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AccommodationApi->add_accommodation: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**| Name of the type of accommodation | 
 **capacity** | **int**| Number of beds in the accommodation | 
 **base_prices** | **int**| Price of the accommodation and the dates of when the price is applicable | 
 **description** | **str**| Description of the accommodation | [optional] 

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_accommodation**
> InlineResponse200 delete_accommodation(body)

Delete an accommodation by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AccommodationApi()
body = 789 # int | ID of the accommodation

try: 
    # Delete an accommodation by ID
    api_response = api_instance.delete_accommodation(body)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AccommodationApi->delete_accommodation: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **int**| ID of the accommodation | 

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **edit_agent**
> InlineResponse2004 edit_agent(id, name, branch_name, branch_address, branch_phone, branch_email, commission, terms, website=website, billing_address=billing_address, billing_phone=billing_phone, billing_email=billing_email)

Create a new agent

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AccommodationApi()
id = 789 # int | 
name = 789 # int | 
branch_name = 'branch_name_example' # str | 
branch_address = 'branch_address_example' # str | 
branch_phone = 'branch_phone_example' # str | 
branch_email = 'branch_email_example' # str | 
commission = 3.4 # float | 
terms = 'terms_example' # str | 
website = 'website_example' # str |  (optional)
billing_address = 'billing_address_example' # str |  (optional)
billing_phone = 'billing_phone_example' # str |  (optional)
billing_email = 'billing_email_example' # str |  (optional)

try: 
    # Create a new agent
    api_response = api_instance.edit_agent(id, name, branch_name, branch_address, branch_phone, branch_email, commission, terms, website=website, billing_address=billing_address, billing_phone=billing_phone, billing_email=billing_email)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AccommodationApi->edit_agent: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **name** | **int**|  | 
 **branch_name** | **str**|  | 
 **branch_address** | **str**|  | 
 **branch_phone** | **str**|  | 
 **branch_email** | **str**|  | 
 **commission** | **float**|  | 
 **terms** | **str**|  | 
 **website** | **str**|  | [optional] 
 **billing_address** | **str**|  | [optional] 
 **billing_phone** | **str**|  | [optional] 
 **billing_email** | **str**|  | [optional] 

### Return type

[**InlineResponse2004**](InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **filter_accommodation**
> InlineResponse200 filter_accommodation(before=before, after=after, accommodation_id=accommodation_id)

Get all the accommodations matching a filter

Get all the accommodations and their bookings between certain dates and / or an accommodation id

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AccommodationApi()
before = '2013-10-20' # date | The date for the upper boundary of the dates (optional)
after = '2013-10-20' # date | The date for the lower boundary of the dates (optional)
accommodation_id = 789 # int | ID Accommodation to filter by (optional)

try: 
    # Get all the accommodations matching a filter
    api_response = api_instance.filter_accommodation(before=before, after=after, accommodation_id=accommodation_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AccommodationApi->filter_accommodation: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **before** | **date**| The date for the upper boundary of the dates | [optional] 
 **after** | **date**| The date for the lower boundary of the dates | [optional] 
 **accommodation_id** | **int**| ID Accommodation to filter by | [optional] 

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **find_accommodation**
> InlineResponse200 find_accommodation(id)



Retrieve an accommodation by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AccommodationApi()
id = [56] # list[int] | ID of the accommodation to be retrieved

try: 
    api_response = api_instance.find_accommodation(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AccommodationApi->find_accommodation: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**list[int]**](int.md)| ID of the accommodation to be retrieved | 

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_accommodations**
> list[Accommodation] get_all_accommodations()



Retrieve all accommodation

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AccommodationApi()

try: 
    api_response = api_instance.get_all_accommodations()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AccommodationApi->get_all_accommodations: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Accommodation]**](Accommodation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_accommodations**
> list[Accommodation] get_all_with_trashed_accommodations()

Retrieve all accommodation including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AccommodationApi()

try: 
    # Retrieve all accommodation including any deleted models
    api_response = api_instance.get_all_with_trashed_accommodations()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AccommodationApi->get_all_with_trashed_accommodations: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Accommodation]**](Accommodation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_accommodation**
> InlineResponse200 update_accommodation(id, name=name, capacity=capacity)

Update an Accommodation

Updates the accommodation by id using the specified fields

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AccommodationApi()
id = 789 # int | ID of the Accommodation to be updated
name = 'name_example' # str | Name of the Accommodation (optional)
capacity = 789 # int | Number of rooms the accommodation holds (optional)

try: 
    # Update an Accommodation
    api_response = api_instance.update_accommodation(id, name=name, capacity=capacity)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AccommodationApi->update_accommodation: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the Accommodation to be updated | 
 **name** | **str**| Name of the Accommodation | [optional] 
 **capacity** | **int**| Number of rooms the accommodation holds | [optional] 

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

