# swagger_client.BookingApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add_booking_detail**](BookingApi.md#add_booking_detail) | **POST** /booking/add-detail | Add a package / course / ticket with its session to the booking
[**attach_accommodation**](BookingApi.md#attach_accommodation) | **POST** /booking/add-accommodation | Attach an accommodation booking to a booking
[**attach_addon**](BookingApi.md#attach_addon) | **POST** /booking/add-addon | Attach an addon to a trip of a booking
[**attach_pickup**](BookingApi.md#attach_pickup) | **POST** /booking/add-pickup | Attach a pickup location for a booking
[**cancel_booking**](BookingApi.md#cancel_booking) | **POST** /booking/cancel | Cancel a booking
[**confirm_booking**](BookingApi.md#confirm_booking) | **POST** /booking/confirm | Confirm a booking and all of its sessions and notify the lead customer
[**delete_booking**](BookingApi.md#delete_booking) | **DELETE** /booking/delete | Delete a booking by ID
[**dettach_accommodation**](BookingApi.md#dettach_accommodation) | **POST** /booking/remove-accommodation | Dettach an accommodation booking to a booking
[**dettach_addon**](BookingApi.md#dettach_addon) | **POST** /booking/remove-addon | Dettach an addon to a trip of a booking
[**dettach_pickup**](BookingApi.md#dettach_pickup) | **POST** /booking/remove-pickup | Dettach a pickup location for a booking
[**edit_booking_info**](BookingApi.md#edit_booking_info) | **POST** /booking/edit-info | Edit the information related to a booking
[**filter_bookings**](BookingApi.md#filter_bookings) | **GET** /booking/filter | Get all bookings matching a filter
[**get_all_bookings**](BookingApi.md#get_all_bookings) | **GET** /booking/all | Retrieve all bookings
[**get_all_with_trashed_bookings**](BookingApi.md#get_all_with_trashed_bookings) | **GET** /booking/all-with-trashed | Retrieve all bookings including any deleted models
[**get_booking**](BookingApi.md#get_booking) | **GET** /booking | Retrieve a booking by ID
[**get_customer_bookings**](BookingApi.md#get_customer_bookings) | **GET** /booking/customer | Get all bookings for a customer
[**get_payments**](BookingApi.md#get_payments) | **GET** /booking/payments | Retrieve all payments made for a booking
[**get_refunds**](BookingApi.md#get_refunds) | **GET** /booking/refunds | Retrieve all refunds for a booking
[**get_todays_bookings**](BookingApi.md#get_todays_bookings) | **GET** /booking/today | Get all bookings made today
[**get_tommorows_bookings**](BookingApi.md#get_tommorows_bookings) | **GET** /booking/tommorow | Get all bookings made today
[**init_booking**](BookingApi.md#init_booking) | **POST** /booking/init | Create a new empty booking
[**remove_booking_detail**](BookingApi.md#remove_booking_detail) | **POST** /booking/remove-detail | Remove a detail from a booking
[**resend_confirmation**](BookingApi.md#resend_confirmation) | **POST** /booking/resend-confirmation | Resend the confirmation email to the lead customer
[**reserve_booking**](BookingApi.md#reserve_booking) | **POST** /booking/reserve | Reserve a booking and its sessions capcity until a set date
[**save_booking**](BookingApi.md#save_booking) | **POST** /booking/save | Save a booking as a quote and release all capacity of sessions
[**set_lead_customer**](BookingApi.md#set_lead_customer) | **POST** /booking/set-lead | Set the lead customer for a booking


# **add_booking_detail**
> InlineResponse20010 add_booking_detail(booking_id, customer_id, ticket_id=ticket_id, session_id=session_id, boatroom_id=boatroom_id, training_session_id=training_session_id, temporary=temporary, package_id=package_id, packagefacade_id=packagefacade_id, course_id=course_id)

Add a package / course / ticket with its session to the booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 
customer_id = 789 # int | 
ticket_id = 789 # int |  (optional)
session_id = 789 # int |  (optional)
boatroom_id = 789 # int |  (optional)
training_session_id = 789 # int |  (optional)
temporary = true # bool |  (optional)
package_id = 789 # int |  (optional)
packagefacade_id = 789 # int |  (optional)
course_id = 789 # int |  (optional)

try: 
    # Add a package / course / ticket with its session to the booking
    api_response = api_instance.add_booking_detail(booking_id, customer_id, ticket_id=ticket_id, session_id=session_id, boatroom_id=boatroom_id, training_session_id=training_session_id, temporary=temporary, package_id=package_id, packagefacade_id=packagefacade_id, course_id=course_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->add_booking_detail: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **customer_id** | **int**|  | 
 **ticket_id** | **int**|  | [optional] 
 **session_id** | **int**|  | [optional] 
 **boatroom_id** | **int**|  | [optional] 
 **training_session_id** | **int**|  | [optional] 
 **temporary** | **bool**|  | [optional] 
 **package_id** | **int**|  | [optional] 
 **packagefacade_id** | **int**|  | [optional] 
 **course_id** | **int**|  | [optional] 

### Return type

[**InlineResponse20010**](InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **attach_accommodation**
> InlineResponse2008 attach_accommodation(booking_id, accommodation_id, customer_id, start=start, end=end)

Attach an accommodation booking to a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 
accommodation_id = 789 # int | 
customer_id = 789 # int | 
start = '2013-10-20' # date |  (optional)
end = '2013-10-20' # date |  (optional)

try: 
    # Attach an accommodation booking to a booking
    api_response = api_instance.attach_accommodation(booking_id, accommodation_id, customer_id, start=start, end=end)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->attach_accommodation: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **accommodation_id** | **int**|  | 
 **customer_id** | **int**|  | 
 **start** | **date**|  | [optional] 
 **end** | **date**|  | [optional] 

### Return type

[**InlineResponse2008**](InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **attach_addon**
> InlineResponse2009 attach_addon(booking_id, bookingdetail_id, addon_id, quantity=quantity, packagefacade_id=packagefacade_id)

Attach an addon to a trip of a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 
bookingdetail_id = 789 # int | 
addon_id = 789 # int | 
quantity = 789 # int |  (optional)
packagefacade_id = 789 # int |  (optional)

try: 
    # Attach an addon to a trip of a booking
    api_response = api_instance.attach_addon(booking_id, bookingdetail_id, addon_id, quantity=quantity, packagefacade_id=packagefacade_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->attach_addon: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **bookingdetail_id** | **int**|  | 
 **addon_id** | **int**|  | 
 **quantity** | **int**|  | [optional] 
 **packagefacade_id** | **int**|  | [optional] 

### Return type

[**InlineResponse2009**](InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **attach_pickup**
> InlineResponse20011 attach_pickup(booking_id, location, date, time)

Attach a pickup location for a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 
location = 'location_example' # str | 
date = '2013-10-20' # date | 
time = 'time_example' # str | 

try: 
    # Attach a pickup location for a booking
    api_response = api_instance.attach_pickup(booking_id, location, date, time)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->attach_pickup: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **location** | **str**|  | 
 **date** | **date**|  | 
 **time** | **str**|  | 

### Return type

[**InlineResponse20011**](InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancel_booking**
> InlineResponse2003 cancel_booking(booking_id)

Cancel a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 

try: 
    # Cancel a booking
    api_response = api_instance.cancel_booking(booking_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->cancel_booking: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **confirm_booking**
> InlineResponse20012 confirm_booking(booking_id)

Confirm a booking and all of its sessions and notify the lead customer

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 

try: 
    # Confirm a booking and all of its sessions and notify the lead customer
    api_response = api_instance.confirm_booking(booking_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->confirm_booking: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 

### Return type

[**InlineResponse20012**](InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_booking**
> InlineResponse2003 delete_booking(id)

Delete a booking by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
id = 789 # int | 

try: 
    # Delete a booking by ID
    api_response = api_instance.delete_booking(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->delete_booking: %s\n" % e
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

# **dettach_accommodation**
> InlineResponse20017 dettach_accommodation(booking_id, accommodation_id, customer_id, start=start)

Dettach an accommodation booking to a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 
accommodation_id = 789 # int | 
customer_id = 789 # int | 
start = '2013-10-20' # date |  (optional)

try: 
    # Dettach an accommodation booking to a booking
    api_response = api_instance.dettach_accommodation(booking_id, accommodation_id, customer_id, start=start)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->dettach_accommodation: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **accommodation_id** | **int**|  | 
 **customer_id** | **int**|  | 
 **start** | **date**|  | [optional] 

### Return type

[**InlineResponse20017**](InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **dettach_addon**
> InlineResponse20017 dettach_addon(booking_id, bookingdetail_id, addon_id, packagefacade_id=packagefacade_id)

Dettach an addon to a trip of a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 
bookingdetail_id = 789 # int | 
addon_id = 789 # int | 
packagefacade_id = 789 # int |  (optional)

try: 
    # Dettach an addon to a trip of a booking
    api_response = api_instance.dettach_addon(booking_id, bookingdetail_id, addon_id, packagefacade_id=packagefacade_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->dettach_addon: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **bookingdetail_id** | **int**|  | 
 **addon_id** | **int**|  | 
 **packagefacade_id** | **int**|  | [optional] 

### Return type

[**InlineResponse20017**](InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **dettach_pickup**
> InlineResponse2003 dettach_pickup(booking_id, id=id)

Dettach a pickup location for a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 
id = 789 # int |  (optional)

try: 
    # Dettach a pickup location for a booking
    api_response = api_instance.dettach_pickup(booking_id, id=id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->dettach_pickup: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **id** | **int**|  | [optional] 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **edit_booking_info**
> InlineResponse20014 edit_booking_info(booking_id=booking_id, discount=discount, comment=comment)

Edit the information related to a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int |  (optional)
discount = 1.2 # float |  (optional)
comment = 'comment_example' # str |  (optional)

try: 
    # Edit the information related to a booking
    api_response = api_instance.edit_booking_info(booking_id=booking_id, discount=discount, comment=comment)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->edit_booking_info: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | [optional] 
 **discount** | **float**|  | [optional] 
 **comment** | **str**|  | [optional] 

### Return type

[**InlineResponse20014**](InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **filter_bookings**
> InlineResponse20013 filter_bookings(reference=reference, date=date, lastname=lastname)

Get all bookings matching a filter

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
reference = 'reference_example' # str |  (optional)
date = '2013-10-20' # date |  (optional)
lastname = 'lastname_example' # str |  (optional)

try: 
    # Get all bookings matching a filter
    api_response = api_instance.filter_bookings(reference=reference, date=date, lastname=lastname)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->filter_bookings: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **str**|  | [optional] 
 **date** | **date**|  | [optional] 
 **lastname** | **str**|  | [optional] 

### Return type

[**InlineResponse20013**](InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_bookings**
> list[Booking] get_all_bookings()

Retrieve all bookings

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()

try: 
    # Retrieve all bookings
    api_response = api_instance.get_all_bookings()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->get_all_bookings: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Booking]**](Booking.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_bookings**
> list[Booking] get_all_with_trashed_bookings()

Retrieve all bookings including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()

try: 
    # Retrieve all bookings including any deleted models
    api_response = api_instance.get_all_with_trashed_bookings()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->get_all_with_trashed_bookings: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Booking]**](Booking.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_booking**
> InlineResponse2007 get_booking(id)

Retrieve a booking by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
id = 789 # int | 

try: 
    # Retrieve a booking by ID
    api_response = api_instance.get_booking(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->get_booking: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**InlineResponse2007**](InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_customer_bookings**
> InlineResponse20013 get_customer_bookings(customer_id)

Get all bookings for a customer

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
customer_id = 789 # int | 

try: 
    # Get all bookings for a customer
    api_response = api_instance.get_customer_bookings(customer_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->get_customer_bookings: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  | 

### Return type

[**InlineResponse20013**](InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_payments**
> InlineResponse20015 get_payments(booking_id=booking_id)

Retrieve all payments made for a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int |  (optional)

try: 
    # Retrieve all payments made for a booking
    api_response = api_instance.get_payments(booking_id=booking_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->get_payments: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | [optional] 

### Return type

[**InlineResponse20015**](InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_refunds**
> InlineResponse20016 get_refunds(booking_id=booking_id)

Retrieve all refunds for a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int |  (optional)

try: 
    # Retrieve all refunds for a booking
    api_response = api_instance.get_refunds(booking_id=booking_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->get_refunds: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | [optional] 

### Return type

[**InlineResponse20016**](InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_todays_bookings**
> InlineResponse20013 get_todays_bookings()

Get all bookings made today

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()

try: 
    # Get all bookings made today
    api_response = api_instance.get_todays_bookings()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->get_todays_bookings: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse20013**](InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_tommorows_bookings**
> InlineResponse20013 get_tommorows_bookings()

Get all bookings made today

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()

try: 
    # Get all bookings made today
    api_response = api_instance.get_tommorows_bookings()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->get_tommorows_bookings: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse20013**](InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **init_booking**
> InlineResponse201 init_booking(source, agent_id=agent_id, agent_reference=agent_reference)

Create a new empty booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
source = 'source_example' # str | 
agent_id = 789 # int |  (optional)
agent_reference = 'agent_reference_example' # str |  (optional)

try: 
    # Create a new empty booking
    api_response = api_instance.init_booking(source, agent_id=agent_id, agent_reference=agent_reference)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->init_booking: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source** | **str**|  | 
 **agent_id** | **int**|  | [optional] 
 **agent_reference** | **str**|  | [optional] 

### Return type

[**InlineResponse201**](InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **remove_booking_detail**
> InlineResponse20017 remove_booking_detail(booking_id, bookingdetail_id)

Remove a detail from a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 
bookingdetail_id = 789 # int | 

try: 
    # Remove a detail from a booking
    api_response = api_instance.remove_booking_detail(booking_id, bookingdetail_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->remove_booking_detail: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **bookingdetail_id** | **int**|  | 

### Return type

[**InlineResponse20017**](InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **resend_confirmation**
> InlineResponse2003 resend_confirmation(booking_id)

Resend the confirmation email to the lead customer

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 

try: 
    # Resend the confirmation email to the lead customer
    api_response = api_instance.resend_confirmation(booking_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->resend_confirmation: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **reserve_booking**
> InlineResponse20018 reserve_booking(booking_id, reserved_until=reserved_until)

Reserve a booking and its sessions capcity until a set date

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 
reserved_until = '2013-10-20' # date |  (optional)

try: 
    # Reserve a booking and its sessions capcity until a set date
    api_response = api_instance.reserve_booking(booking_id, reserved_until=reserved_until)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->reserve_booking: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **reserved_until** | **date**|  | [optional] 

### Return type

[**InlineResponse20018**](InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **save_booking**
> InlineResponse2003 save_booking(booking_id)

Save a booking as a quote and release all capacity of sessions

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 

try: 
    # Save a booking as a quote and release all capacity of sessions
    api_response = api_instance.save_booking(booking_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->save_booking: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **set_lead_customer**
> InlineResponse2003 set_lead_customer(booking_id, customer_id)

Set the lead customer for a booking

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.BookingApi()
booking_id = 789 # int | 
customer_id = 789 # int | 

try: 
    # Set the lead customer for a booking
    api_response = api_instance.set_lead_customer(booking_id, customer_id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling BookingApi->set_lead_customer: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **customer_id** | **int**|  | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

