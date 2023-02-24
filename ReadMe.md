# Project Woocommerce Mobile Flutter
<img  width="90%" src="https://user-images.githubusercontent.com/43582900/221207403-7244295a-1b5b-469e-a5c1-50ef39007356.png" alt=""/>

actually this is two projects as follows:
1. WordPress with WooCommerce Plugin for ECommerece Store
2. Flutter MObile App connecting with our Store through WooCommerce RESTAPI
# Objective
- this is a step by step creating two projects locally using postman 
- then creating mobile app using flutter 
# creating wordpress project
- the prerequisites is to install [wamp](https://www.wampserver.com/en/download-wampserver-64bits/) or [xamp](https://www.apachefriends.org/download.html) server suite to obtain server and database services we chose wamp
- also we need [postman](https://www.postman.com/) as HTTP client to send receive api requests from woocommerce creating account and new collection
- download [wordpress](https://wordpress.org/download/) and extract it in `wamp64/www`
- start wamp server and for our system we didn't use the default port for mysql but we use `3308` 
- open phpmyadmin with the your credential s which by default

|login|password|
|--|--|
|root||

- create database with name `wordpress` and collection data encoding type `utf8mb4_general_ci`
- for browsing and starting in the browser `http://localhost/woocommerce_Mobile_flutter/wordpress` 
- this for the first time will install wordpress for us asking for the language and for the database connection 
- fill the database information 

|DATABASE NAME|User name|Password|database host|Table Prefix|
|--|--|--|--|--|
|wordpress|root||localhost:3308 where it is not default so we have to write it as shown|wp_|

- then register your app as follows:

|Site Title|Username|Password|Your Email|
|--|--|--|--|
|Ecommerce|Mostafa|root123X!|mostafa_adawy@ymail.com|

- then log with credentials 
- now this will be the link `http://localhost/woocommerce_Mobile_flutter/wordpress/wp-admin/`
# Note base url is `http://localhost/woocommerce_Mobile_flutter/wordpress/` which will be changed in case of copy this folder in other path
- remove unwanted plugins
- installing woocommerce plugin and activate it
- set the information required for the app
- select country address and kind of products
- do not add recommended plugins unless we need
- select suitable theme storefront for example
- now we will add some products it is easy process and we can get help of youtube tutorials if needed
- preparing rest api for woocommerce as follows
    - from general settings permaLinks select any option `except plain` in structure just as `post name`
    - and default permalink
    - save changes
    - from woocommerce settings advanced then RESTAPI create api keys to be used as credentials
    - generate key with description and user and permissions
    - copy `consumer_key=ck_0715b1694e75647f7a6155ac191ba1f0becfe6bf` and its secret `consumer_secret=cs_c3aaa59816e3e3a0728616ad3e90a84159988527`
    - then in legacy Api and check for Enable the legacy REST API
    - save 
- now we can use these keys for our api and to use the woocommerce api check [woocommerce rest apis](https://woocommerce.github.io/woocommerce-rest-api-docs/#)
- for example in apis for listing all product 
- copy curl
```sh
curl https://example.com/wp-json/wc/v3/products \
    -u consumer_key:consumer_secret
```
- in post man import and in raw text past 
- then next then save in collection
- replace the example path by our bas url as mentioned before `http://localhost/woocommerce_Mobile_flutter/wordpress/wp-json/wc/v3/products` 
- in authentication select `OAUTH 1.0` in consumer_key past our key and same for secret
- now try it should work
- now we try to create same steps from woocommerce api copy curl for create product
```sh
curl -X POST https://example.com/wp-json/wc/v3/products \
    -u consumer_key:consumer_secret \
    -H "Content-Type: application/json" \
    -d '{
  "name": "Premium Quality",
  "type": "simple",
  "regular_price": "21.99",
  "description": "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.",
  "short_description": "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
  "categories": [
    {
      "id": 9
    },
    {
      "id": 14
    }
  ],
  "images": [
    {
      "src": "http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg"
    },
    {
      "src": "http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg"
    }
  ]
}'
```
- do the same in post man
- now we get new created product from api

