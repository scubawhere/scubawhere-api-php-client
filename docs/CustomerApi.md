# swagger_client.CustomerApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_customer**](CustomerApi.md#create_customer) | **POST** /customer/add | Create a new customer
[**delete_customer**](CustomerApi.md#delete_customer) | **DELETE** /customer/delete | Delete a customer by ID
[**edit_customer**](CustomerApi.md#edit_customer) | **POST** /customer/edit | Update a customer by ID
[**get_all_customers**](CustomerApi.md#get_all_customers) | **GET** /customer/all | Retrieve all customers
[**get_customer**](CustomerApi.md#get_customer) | **GET** /customer | Retrieve a customer by ID


# **create_customer**
> InlineResponse20029 create_customer(email, firstname, lastname, birthday=birthday, gender=gender, address_1=address_1, address_2=address_2, city=city, county=county, postcode=postcode, country_id=country_id, phone=phone, last_dive=last_dive, number_of_dives=number_of_dives, chest_size=chest_size, show_size=show_size, height=height, certificates=certificates)

Create a new customer

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CustomerApi()
email = 'email_example' # str | 
firstname = 'firstname_example' # str | 
lastname = 'lastname_example' # str | 
birthday = '2013-10-20' # date |  (optional)
gender = 56 # int |  (optional)
address_1 = 'address_1_example' # str |  (optional)
address_2 = 'address_2_example' # str |  (optional)
city = 'city_example' # str |  (optional)
county = 'county_example' # str |  (optional)
postcode = 'postcode_example' # str |  (optional)
country_id = 789 # int |  (optional)
phone = 'phone_example' # str |  (optional)
last_dive = '2013-10-20' # date |  (optional)
number_of_dives = 56 # int |  (optional)
chest_size = 'chest_size_example' # str |  (optional)
show_size = 'show_size_example' # str |  (optional)
height = 'height_example' # str |  (optional)
certificates = [56] # list[int] |  (optional)

try: 
    # Create a new customer
    api_response = api_instance.create_customer(email, firstname, lastname, birthday=birthday, gender=gender, address_1=address_1, address_2=address_2, city=city, county=county, postcode=postcode, country_id=country_id, phone=phone, last_dive=last_dive, number_of_dives=number_of_dives, chest_size=chest_size, show_size=show_size, height=height, certificates=certificates)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CustomerApi->create_customer: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **str**|  | 
 **firstname** | **str**|  | 
 **lastname** | **str**|  | 
 **birthday** | **date**|  | [optional] 
 **gender** | **int**|  | [optional] 
 **address_1** | **str**|  | [optional] 
 **address_2** | **str**|  | [optional] 
 **city** | **str**|  | [optional] 
 **county** | **str**|  | [optional] 
 **postcode** | **str**|  | [optional] 
 **country_id** | **int**|  | [optional] 
 **phone** | **str**|  | [optional] 
 **last_dive** | **date**|  | [optional] 
 **number_of_dives** | **int**|  | [optional] 
 **chest_size** | **str**|  | [optional] 
 **show_size** | **str**|  | [optional] 
 **height** | **str**|  | [optional] 
 **certificates** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse20029**](InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_customer**
> InlineResponse2003 delete_customer(id)

Delete a customer by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CustomerApi()
id = 789 # int | 

try: 
    # Delete a customer by ID
    api_response = api_instance.delete_customer(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CustomerApi->delete_customer: %s\n" % e
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

# **edit_customer**
> InlineResponse20030 edit_customer(id, email=email, firstname=firstname, lastname=lastname, birthday=birthday, gender=gender, address_1=address_1, address_2=address_2, city=city, county=county, postcode=postcode, country_id=country_id, phone=phone, last_dive=last_dive, number_of_dives=number_of_dives, chest_size=chest_size, show_size=show_size, height=height, certificates=certificates)

Update a customer by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CustomerApi()
id = 789 # int | 
email = 'email_example' # str |  (optional)
firstname = 'firstname_example' # str |  (optional)
lastname = 'lastname_example' # str |  (optional)
birthday = '2013-10-20' # date |  (optional)
gender = 56 # int |  (optional)
address_1 = 'address_1_example' # str |  (optional)
address_2 = 'address_2_example' # str |  (optional)
city = 'city_example' # str |  (optional)
county = 'county_example' # str |  (optional)
postcode = 'postcode_example' # str |  (optional)
country_id = 789 # int |  (optional)
phone = 'phone_example' # str |  (optional)
last_dive = '2013-10-20' # date |  (optional)
number_of_dives = 56 # int |  (optional)
chest_size = 'chest_size_example' # str |  (optional)
show_size = 'show_size_example' # str |  (optional)
height = 'height_example' # str |  (optional)
certificates = [56] # list[int] |  (optional)

try: 
    # Update a customer by ID
    api_response = api_instance.edit_customer(id, email=email, firstname=firstname, lastname=lastname, birthday=birthday, gender=gender, address_1=address_1, address_2=address_2, city=city, county=county, postcode=postcode, country_id=country_id, phone=phone, last_dive=last_dive, number_of_dives=number_of_dives, chest_size=chest_size, show_size=show_size, height=height, certificates=certificates)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CustomerApi->edit_customer: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **email** | **str**|  | [optional] 
 **firstname** | **str**|  | [optional] 
 **lastname** | **str**|  | [optional] 
 **birthday** | **date**|  | [optional] 
 **gender** | **int**|  | [optional] 
 **address_1** | **str**|  | [optional] 
 **address_2** | **str**|  | [optional] 
 **city** | **str**|  | [optional] 
 **county** | **str**|  | [optional] 
 **postcode** | **str**|  | [optional] 
 **country_id** | **int**|  | [optional] 
 **phone** | **str**|  | [optional] 
 **last_dive** | **date**|  | [optional] 
 **number_of_dives** | **int**|  | [optional] 
 **chest_size** | **str**|  | [optional] 
 **show_size** | **str**|  | [optional] 
 **height** | **str**|  | [optional] 
 **certificates** | [**list[int]**](int.md)|  | [optional] 

### Return type

[**InlineResponse20030**](InlineResponse20030.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_customers**
> list[Customer] get_all_customers()

Retrieve all customers

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CustomerApi()

try: 
    # Retrieve all customers
    api_response = api_instance.get_all_customers()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CustomerApi->get_all_customers: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Customer]**](Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_customer**
> InlineResponse20029 get_customer(id=id)

Retrieve a customer by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CustomerApi()
id = 789 # int |  (optional)

try: 
    # Retrieve a customer by ID
    api_response = api_instance.get_customer(id=id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CustomerApi->get_customer: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | [optional] 

### Return type

[**InlineResponse20029**](InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

