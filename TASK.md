#mmcrm v0.0.1

1) Create an order table with foliwing fields:

##ORDERS

| Field        | Type/Length  | Constraints   |   
|:------------:|:------------:|:-------------:| 
|Client Name   | string(255)  | required   >2 |
|Client Surname| string(255)  | required   >3 |
|Phone Number  | string(30)   | mobile pattern|
|Material      | string(30)   | required   >2 |
|Variant       | integer      | required      |
|Tasks         | string(255)  | required      |
|Done Date     | date         | required      |
|Date          | date         | required, auto|
|Price         | date         | required, auto|

2) Make crud
3) Create a command to fill the table with random data
