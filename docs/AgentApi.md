# swagger_client.AgentApi

All URIs are relative to *https://dev.scubawhere.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_agent**](AgentApi.md#create_agent) | **POST** /agent/add | Create a new agent
[**delete_agent**](AgentApi.md#delete_agent) | **DELETE** /agent/delete | Delete an agent by ID
[**get_agent**](AgentApi.md#get_agent) | **GET** /agent | Retrieve an agent by ID
[**get_all_agents**](AgentApi.md#get_all_agents) | **GET** /agent/all | Retrieve all agents
[**get_all_with_trashed_agents**](AgentApi.md#get_all_with_trashed_agents) | **GET** /agent/all-with-trashed | Retrieve all agents including any deleted models


# **create_agent**
> InlineResponse2004 create_agent(name, branch_name, branch_address, branch_phone, branch_email, commission, terms, website=website, billing_address=billing_address, billing_phone=billing_phone, billing_email=billing_email)

Create a new agent

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AgentApi()
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
    api_response = api_instance.create_agent(name, branch_name, branch_address, branch_phone, branch_email, commission, terms, website=website, billing_address=billing_address, billing_phone=billing_phone, billing_email=billing_email)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AgentApi->create_agent: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **delete_agent**
> InlineResponse2003 delete_agent(id)

Delete an agent by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AgentApi()
id = 789 # int | ID of the Agent

try: 
    # Delete an agent by ID
    api_response = api_instance.delete_agent(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AgentApi->delete_agent: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the Agent | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_agent**
> InlineResponse2004 get_agent(id)

Retrieve an agent by ID

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AgentApi()
id = 789 # int | ID of the agent to be retrieved

try: 
    # Retrieve an agent by ID
    api_response = api_instance.get_agent(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AgentApi->get_agent: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the agent to be retrieved | 

### Return type

[**InlineResponse2004**](InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_agents**
> list[Agent] get_all_agents()

Retrieve all agents

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AgentApi()

try: 
    # Retrieve all agents
    api_response = api_instance.get_all_agents()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AgentApi->get_all_agents: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Agent]**](Agent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_all_with_trashed_agents**
> list[Agent] get_all_with_trashed_agents()

Retrieve all agents including any deleted models

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AgentApi()

try: 
    # Retrieve all agents including any deleted models
    api_response = api_instance.get_all_with_trashed_agents()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling AgentApi->get_all_with_trashed_agents: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**list[Agent]**](Agent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

