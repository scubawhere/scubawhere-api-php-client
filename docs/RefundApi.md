# swagger_client.RefundApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add_refund**](RefundApi.md#add_refund) | **POST** /refund/add | Create a new refund
[**filter_refunds**](RefundApi.md#filter_refunds) | **GET** /refund/filter | Retrieve all refunds that match a filter
[**get_all_refunds**](RefundApi.md#get_all_refunds) | **GET** /refund/all | Retrieve all refunds made
[**get_refund**](RefundApi.md#get_refund) | **GET** /refund | Retrieve a refund by ID


# **add_refund**
> InlineResponse2012 add_refund(booking_id, paymentgateway_id, amount)

Create a new refund

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.RefundApi()
booking_id = 789 # int | 
paymentgateway_id = 789 # int | 
amount = 3.4 # float | 

try: 
    # Create a new refund
    api_response = api_instance.add_refund(booking_id, paymentgateway_id, amount)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling RefundApi->add_refund: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **int**|  | 
 **paymentgateway_id** | **int**|  | 
 **amount** | **float**|  | 

### Return type

[**InlineResponse2012**](InlineResponse2012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **filter_refunds**
> InlineResponse20039 filter_refunds(after=after, before=before)

Retrieve all refunds that match a filter

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.RefundApi()
after = '2013-10-20' # date | Date of the earliest payment (optional)
before = '2013-10-20' # date | Date of the latest payment to be retrieved (optional)

try: 
    # Retrieve all refunds that match a filter
    api_response = api_instance.filter_refunds(after=after, before=before)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling RefundApi->filter_refunds: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **date**| Date of the earliest payment | [optional] 
 **before** | **date**| Date of the latest payment to be retrieved | [optional] 

### Return type

[**InlineResponse20039**](InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_refunds**
> InlineResponse20038 get_all_refunds()

Retrieve all refunds made

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.RefundApi()

try: 
    # Retrieve all refunds made
    api_response = api_instance.get_all_refunds()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling RefundApi->get_all_refunds: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse20038**](InlineResponse20038.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_refund**
> InlineResponse20037 get_refund(id)

Retrieve a refund by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.RefundApi()
id = 789 # int | 

try: 
    # Retrieve a refund by ID
    api_response = api_instance.get_refund(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling RefundApi->get_refund: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 

### Return type

[**InlineResponse20037**](InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

