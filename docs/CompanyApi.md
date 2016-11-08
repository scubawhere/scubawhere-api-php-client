# swagger_client.CompanyApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attach_locations**](CompanyApi.md#attach_locations) | **POST** /company/add-location | Attach a location to a company
[**get_locations**](CompanyApi.md#get_locations) | **GET** /company/locations | Retrieve the locations this Dive Centre uses
[**get_pickup_schedule**](CompanyApi.md#get_pickup_schedule) | **GET** /company/pick-up-schedule | Retrieve the pick up schedule for a date
[**update_company**](CompanyApi.md#update_company) | **POST** /company/update | Update the companies information


# **attach_locations**
> InlineResponse20023 attach_locations(name=name, description=description, latitude=latitude, longitude=longitude)

Attach a location to a company

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CompanyApi()
name = 'name_example' # str |  (optional)
description = 'description_example' # str |  (optional)
latitude = 3.4 # float |  (optional)
longitude = 3.4 # float |  (optional)

try: 
    # Attach a location to a company
    api_response = api_instance.attach_locations(name=name, description=description, latitude=latitude, longitude=longitude)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CompanyApi->attach_locations: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | [optional] 
 **description** | **str**|  | [optional] 
 **latitude** | **float**|  | [optional] 
 **longitude** | **float**|  | [optional] 

### Return type

[**InlineResponse20023**](InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_locations**
> InlineResponse20024 get_locations(latitude, longitude, limit=limit)

Retrieve the locations this Dive Centre uses

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CompanyApi()
latitude = 'latitude_example' # str | 
longitude = 'longitude_example' # str | 
limit = 56 # int |  (optional)

try: 
    # Retrieve the locations this Dive Centre uses
    api_response = api_instance.get_locations(latitude, longitude, limit=limit)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CompanyApi->get_locations: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **str**|  | 
 **longitude** | **str**|  | 
 **limit** | **int**|  | [optional] 

### Return type

[**InlineResponse20024**](InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_pickup_schedule**
> InlineResponse20025 get_pickup_schedule(date)

Retrieve the pick up schedule for a date

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CompanyApi()
date = 'date_example' # str | 

try: 
    # Retrieve the pick up schedule for a date
    api_response = api_instance.get_pickup_schedule(date)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CompanyApi->get_pickup_schedule: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **str**|  | 

### Return type

[**InlineResponse20025**](InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_company**
> InlineResponse20026 update_company(id, contact=contact, description=description, name=name, address_1=address_1, address_2=address_2, city=city, county=county, postcode=postcode, country_id=country_id, currency_id=currency_id, business_phone=business_phone, business_email=business_email, vat_number=vat_number, registration_number=registration_number, website=website)

Update the companies information

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CompanyApi()
id = 789 # int | 
contact = 'contact_example' # str |  (optional)
description = 'description_example' # str |  (optional)
name = 'name_example' # str |  (optional)
address_1 = 'address_1_example' # str |  (optional)
address_2 = 'address_2_example' # str |  (optional)
city = 'city_example' # str |  (optional)
county = 'county_example' # str |  (optional)
postcode = 'postcode_example' # str |  (optional)
country_id = 789 # int |  (optional)
currency_id = 789 # int |  (optional)
business_phone = 'business_phone_example' # str |  (optional)
business_email = 'business_email_example' # str |  (optional)
vat_number = 'vat_number_example' # str |  (optional)
registration_number = 'registration_number_example' # str |  (optional)
website = 'website_example' # str |  (optional)

try: 
    # Update the companies information
    api_response = api_instance.update_company(id, contact=contact, description=description, name=name, address_1=address_1, address_2=address_2, city=city, county=county, postcode=postcode, country_id=country_id, currency_id=currency_id, business_phone=business_phone, business_email=business_email, vat_number=vat_number, registration_number=registration_number, website=website)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CompanyApi->update_company: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **contact** | **str**|  | [optional] 
 **description** | **str**|  | [optional] 
 **name** | **str**|  | [optional] 
 **address_1** | **str**|  | [optional] 
 **address_2** | **str**|  | [optional] 
 **city** | **str**|  | [optional] 
 **county** | **str**|  | [optional] 
 **postcode** | **str**|  | [optional] 
 **country_id** | **int**|  | [optional] 
 **currency_id** | **int**|  | [optional] 
 **business_phone** | **str**|  | [optional] 
 **business_email** | **str**|  | [optional] 
 **vat_number** | **str**|  | [optional] 
 **registration_number** | **str**|  | [optional] 
 **website** | **str**|  | [optional] 

### Return type

[**InlineResponse20026**](InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

