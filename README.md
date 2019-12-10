# Generate-Random-Email-Address
Function of Randomly generates valid email address.

### Usage
```php
generate_email_address();
```
##### NOTE
This function takes two parameters.
```php
@param integer $local_max_length  maximum length of user-local section of email address. Default: 64.
@param integer $domain_max_length maximum length of domain section of email address.     Default: 255
```
However, it should be noted that these numbers are maximum numbers. As a result, the number of characters may be smaller than these numbers.
