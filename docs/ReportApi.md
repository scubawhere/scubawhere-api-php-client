# swagger_client.ReportApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get_revenue_stream_report**](ReportApi.md#get_revenue_stream_report) | **GET** /report/revenue-streams | Get a report containing the distribution of revenue made from all the tickets, packages, courses, addons, accommodations
[**get_sources_report**](ReportApi.md#get_sources_report) | **GET** /report/sources | Get a report about the distribution of revenue between the diffrent source of bookings
[**get_training_utilisation_report**](ReportApi.md#get_training_utilisation_report) | **GET** /report/training-utilisation | Get a report containing the utilisation of all classes between the specified dates
[**get_utilisation_report**](ReportApi.md#get_utilisation_report) | **GET** /report/utilisation | Get a report containing the utilisation of all trips between the specified dates


# **get_revenue_stream_report**
> InlineResponse20040 get_revenue_stream_report(after, before)

Get a report containing the distribution of revenue made from all the tickets, packages, courses, addons, accommodations

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ReportApi()
after = '2013-10-20' # date | 
before = '2013-10-20' # date | 

try: 
    # Get a report containing the distribution of revenue made from all the tickets, packages, courses, addons, accommodations
    api_response = api_instance.get_revenue_stream_report(after, before)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ReportApi->get_revenue_stream_report: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **date**|  | 
 **before** | **date**|  | 

### Return type

[**InlineResponse20040**](InlineResponse20040.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_sources_report**
> InlineResponse20041 get_sources_report(after, before)

Get a report about the distribution of revenue between the diffrent source of bookings

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ReportApi()
after = '2013-10-20' # date | 
before = '2013-10-20' # date | 

try: 
    # Get a report about the distribution of revenue between the diffrent source of bookings
    api_response = api_instance.get_sources_report(after, before)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ReportApi->get_sources_report: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **date**|  | 
 **before** | **date**|  | 

### Return type

[**InlineResponse20041**](InlineResponse20041.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_training_utilisation_report**
> InlineResponse20042 get_training_utilisation_report(after, before)

Get a report containing the utilisation of all classes between the specified dates

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ReportApi()
after = '2013-10-20' # date | 
before = '2013-10-20' # date | 

try: 
    # Get a report containing the utilisation of all classes between the specified dates
    api_response = api_instance.get_training_utilisation_report(after, before)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ReportApi->get_training_utilisation_report: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **date**|  | 
 **before** | **date**|  | 

### Return type

[**InlineResponse20042**](InlineResponse20042.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_utilisation_report**
> InlineResponse20042 get_utilisation_report(after, before)

Get a report containing the utilisation of all trips between the specified dates

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ReportApi()
after = '2013-10-20' # date | 
before = '2013-10-20' # date | 

try: 
    # Get a report containing the utilisation of all trips between the specified dates
    api_response = api_instance.get_utilisation_report(after, before)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling ReportApi->get_utilisation_report: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **date**|  | 
 **before** | **date**|  | 

### Return type

[**InlineResponse20042**](InlineResponse20042.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

