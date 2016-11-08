# swagger_client.TicketApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add_ticket**](TicketApi.md#add_ticket) | **POST** /ticket/add | Create a new ticket
[**delete_ticket**](TicketApi.md#delete_ticket) | **DELETE** /ticket/delete | Delete a ticket
[**edit_ticket**](TicketApi.md#edit_ticket) | **PUT** /ticket/edit | Update an existing ticket
[**get_all_available_tickets**](TicketApi.md#get_all_available_tickets) | **GET** /ticket/only-available | Retrieve all tickets that are available to booked today
[**get_all_tickets**](TicketApi.md#get_all_tickets) | **GET** /ticket/all | Retrieve all tickets
[**get_all_with_trashed_tickets**](TicketApi.md#get_all_with_trashed_tickets) | **GET** /ticket/all-with-trashed | Retrieve all tickets
[**get_ticket**](TicketApi.md#get_ticket) | **GET** /ticket | Retrieve a ticket by ID


# **add_ticket**
> InlineResponse2014 add_ticket(name, trips, prices, description=description, available_from=available_from, available_until=available_until, only_packaged=only_packaged, boats=boats, boatrooms=boatrooms)

Create a new ticket

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TicketApi()
name = 'name_example' # str | 
trips = [56] # list[int] | 
prices = swagger_client.BasePrice() # BasePrice | 
description = 'description_example' # str |  (optional)
available_from = '2013-10-20' # date |  (optional)
available_until = '2013-10-20' # date |  (optional)
only_packaged = true # bool |  (optional)
boats = [56] # list[int] |  (optional)
boatrooms = [56] # list[int] |  (optional)

try: 
    # Create a new ticket
    api_response = api_instance.add_ticket(name, trips, prices, description=description, available_from=available_from, available_until=available_until, only_packaged=only_packaged, boats=boats, boatrooms=boatrooms)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TicketApi->add_ticket: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | 
 **trips** | [**list[int]**](int.md)|  | 
 **prices** | [**BasePrice**](BasePrice.md)|  | 
 **description** | **str**|  | [optional] 
 **available_from** | **date**|  | [optional] 
 **available_until** | **date**|  | [optional] 
 **only_packaged** | **bool**|  | [optional] 
 **boats** | [**list[int]**](int.md)|  | [optional] 
 **boatrooms** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse2014**](InlineResponse2014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_ticket**
> InlineResponse2014 delete_ticket(name)

Delete a ticket

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TicketApi()
name = 'name_example' # str | 

try: 
    # Delete a ticket
    api_response = api_instance.delete_ticket(name)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TicketApi->delete_ticket: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | 

### Return type

[**InlineResponse2014**](InlineResponse2014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **edit_ticket**
> InlineResponse2014 edit_ticket(id, name, trips, prices, description=description, available_from=available_from, available_until=available_until, only_packaged=only_packaged, boats=boats, boatrooms=boatrooms)

Update an existing ticket

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TicketApi()
id = 789 # int | 
name = 'name_example' # str | 
trips = [56] # list[int] | 
prices = swagger_client.BasePrice() # BasePrice | 
description = 'description_example' # str |  (optional)
available_from = '2013-10-20' # date |  (optional)
available_until = '2013-10-20' # date |  (optional)
only_packaged = true # bool |  (optional)
boats = [56] # list[int] |  (optional)
boatrooms = [56] # list[int] |  (optional)

try: 
    # Update an existing ticket
    api_response = api_instance.edit_ticket(id, name, trips, prices, description=description, available_from=available_from, available_until=available_until, only_packaged=only_packaged, boats=boats, boatrooms=boatrooms)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TicketApi->edit_ticket: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **name** | **str**|  | 
 **trips** | [**list[int]**](int.md)|  | 
 **prices** | [**BasePrice**](BasePrice.md)|  | 
 **description** | **str**|  | [optional] 
 **available_from** | **date**|  | [optional] 
 **available_until** | **date**|  | [optional] 
 **only_packaged** | **bool**|  | [optional] 
 **boats** | [**list[int]**](int.md)|  | [optional] 
 **boatrooms** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse2014**](InlineResponse2014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_available_tickets**
> list[Ticket] get_all_available_tickets()

Retrieve all tickets that are available to booked today

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TicketApi()

try: 
    # Retrieve all tickets that are available to booked today
    api_response = api_instance.get_all_available_tickets()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TicketApi->get_all_available_tickets: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Ticket]**](Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_tickets**
> list[Ticket] get_all_tickets()

Retrieve all tickets

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TicketApi()

try: 
    # Retrieve all tickets
    api_response = api_instance.get_all_tickets()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TicketApi->get_all_tickets: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Ticket]**](Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_tickets**
> list[Ticket] get_all_with_trashed_tickets()

Retrieve all tickets

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TicketApi()

try: 
    # Retrieve all tickets
    api_response = api_instance.get_all_with_trashed_tickets()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TicketApi->get_all_with_trashed_tickets: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Ticket]**](Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_ticket**
> Ticket get_ticket(id)

Retrieve a ticket by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.TicketApi()
id = 789 # int | 

try: 
    # Retrieve a ticket by ID
    api_response = api_instance.get_ticket(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling TicketApi->get_ticket: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**Ticket**](Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

