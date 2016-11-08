# swagger_client.PaymentApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add_payment**](PaymentApi.md#add_payment) | **POST** /payment/add | Create a new payment
[**filter_payments**](PaymentApi.md#filter_payments) | **GET** /payment/filter | Retrieve all payments that match a filter
[**get_all_payments**](PaymentApi.md#get_all_payments) | **GET** /payment/all | Retrieve all payments made
[**get_payment**](PaymentApi.md#get_payment) | **GET** /payment | Retrieve a payment by ID
[**get_payment_gateways**](PaymentApi.md#get_payment_gateways) | **GET** /payment/paymentgateways | Retrieve all the payment gateways


# **add_payment**
> InlineResponse2011 add_payment(booking_id, paymentgateway_id, amount)

Create a new payment

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PaymentApi()
booking_id = 789 # int | 
paymentgateway_id = 789 # int | 
amount = 3.4 # float | 

try: 
    # Create a new payment
    api_response = api_instance.add_payment(booking_id, paymentgateway_id, amount)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PaymentApi->add_payment: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **paymentgateway_id** | **int**|  | 
 **amount** | **float**|  | 

### Return type

[**InlineResponse2011**](InlineResponse2011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **filter_payments**
> InlineResponse20035 filter_payments(after=after, before=before)

Retrieve all payments that match a filter

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PaymentApi()
after = '2013-10-20' # date | Date of the earliest payment (optional)
before = '2013-10-20' # date | Date of the latest payment to be retrieved (optional)

try: 
    # Retrieve all payments that match a filter
    api_response = api_instance.filter_payments(after=after, before=before)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PaymentApi->filter_payments: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **date**| Date of the earliest payment | [optional] 
 **before** | **date**| Date of the latest payment to be retrieved | [optional] 

### Return type

[**InlineResponse20035**](InlineResponse20035.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_payments**
> list[Payment] get_all_payments()

Retrieve all payments made

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PaymentApi()

try: 
    # Retrieve all payments made
    api_response = api_instance.get_all_payments()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PaymentApi->get_all_payments: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Payment]**](Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_payment**
> InlineResponse20034 get_payment(id)

Retrieve a payment by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PaymentApi()
id = 789 # int | 

try: 
    # Retrieve a payment by ID
    api_response = api_instance.get_payment(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PaymentApi->get_payment: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**InlineResponse20034**](InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_payment_gateways**
> InlineResponse20036 get_payment_gateways()

Retrieve all the payment gateways

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.PaymentApi()

try: 
    # Retrieve all the payment gateways
    api_response = api_instance.get_payment_gateways()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling PaymentApi->get_payment_gateways: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse20036**](InlineResponse20036.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

