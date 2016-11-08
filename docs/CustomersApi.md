# swagger_client.CustomersApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get_all_with_trashed_customers**](CustomersApi.md#get_all_with_trashed_customers) | **GET** /customer/all-with-trashed | Retrieve all customer including any deleted models


# **get_all_with_trashed_customers**
> list[Customer] get_all_with_trashed_customers()

Retrieve all customer including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CustomersApi()

try: 
    # Retrieve all customer including any deleted models
    api_response = api_instance.get_all_with_trashed_customers()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CustomersApi->get_all_with_trashed_customers: %s\n" % e
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

