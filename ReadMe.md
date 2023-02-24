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
- 
