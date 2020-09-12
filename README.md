Xtreme Vulnerable Web Application (XVWA) 
=========================================
XVWA is a badly coded web application written in PHP/MySQL that helps security enthusiasts to learn application security.  It’s not advisable to host this application online as it is designed to be “Xtremely Vulnerable”. We recommend hosting this application in local/controlled environment and sharpening your application security ninja skills with any tools of your own choice. It’s totally legal to break or hack into this. The idea is to evangelize web application security to the community in possibly the easiest and fundamental way. Learn and acquire these skills for good purpose. How you use these skills and knowledge base is not our responsibility. 


![Image of XVWA Home Page](https://pbs.twimg.com/media/CWsFq1SVEAACsCh.png:large) 

XVWA is designed to understand following security issues. 

+ SQL Injection – Error Based 
+ SQL Injection – Blind
+ OS Command Injection
+ XPATH Injection 
+ Formula Injection
+ PHP Object Injection 
+ Unrestricted File Upload
+ Reflected Cross Site Scripting 
+ Stored Cross Site Scripting 
+ DOM Based Cross Site Scripting 
+ Server Side Request Forgery (Cross Site Port Attacks) 
+ File Inclusion 
+ Session Issues 
+ Insecure Direct Object Reference 
+ Missing Functional Level Access Control 
+ Cross Site Request Forgery (CSRF)
+ Cryptography 
+ Unvalidated Redirect & Forwards
+ Server Side Template Injection

Good Luck and Happy Hacking!


## Disclaimer 

Do not host this application on live or production environment. XVWA is totally vulnerable application and giving online/live access of this application could lead to complete compromise of your system. We are not responsible for any such bad incidents. Stay safe ! 

## Copyright
This work is licensed under GNU GENERAL PUBLIC LICENSE Version 3
To view a copy of this license, visit http://www.gnu.org/licenses/gpl-3.0.txt


## Instructions 
XVWA is hassle-free to setup. You can set this up on windows, linux or Mac. Following are the basic steps you should be doing on your Apache-PHP-MYSQL environment to get this working.  Let that be WAMP, XAMP or anything you prefer to use. 

## Manual Installation Method

Copy the xvwa folder in your web directory. Make sure the directory name remains **xvwa** itself. Make necessary changes in xvwa/config.php for database connection. Example below: 

```php
$XVWA_WEBROOT = '';  
$host = "localhost"; 
$dbname = 'xvwa';  
$user = 'root'; 
$pass = 'root';
```

Please note that mysql version 5.7 and above requires sudoer to access root user. This means apache user will not be able to use 'root' username to access the database. In such cases, a new username would need to be created and config.php file would also need to be changed accordingly.  


Make following changes in PHP configuration file

```php
file_uploads = on 
allow_url_fopen = on 
allow_url_include = on 
```

XVWA will be accessible at http://localhost/xvwa/

Setup or reset the database and table here http://localhost/xvwa/setup/

The login details

```php
admin:admin
xvwa:xvwa
user:vulnerable
```

## Automatic Installation Script
I have written a small script to easily automates XVWA Setup in linux distributions. Run this with *root* to install the dependencies if not found in your linux environment
>https://github.com/s4n7h0/Script-Bucket/blob/master/Bash/xvwa-setup.sh 

## Alternative Setup Environments
### Docker 
I have also seen a multiple dockers published to setup XVWA. Our thanks to all of them. Any docker lovers can also checkout below work. https://github.com/tuxotron/xvwa_lamp_container 
### Live ISO 
[@knoself](https://twitter.com/knoself) made XVWA live ISO on minimal Ubuntu server 14.04.x [(issue27)](https://github.com/s4n7h0/xvwa/issues/27)
https://mega.nz/#!4bJ2XRLT!zOa_IZaBz-doqVZz77Rs1tbhXuR8EVBLOHktBGp11Q8 
```
User = xvwa
Pass = toor
```

## About 
XVWA is intentionally designed with many security flaws and enough technical ground to upskill application security knowledge. This whole idea is to evangelize web application security issues. Do let us know your suggestions for improvement or any more vulnerability you would like to see in XVWA future releases. 


## Authors:

- @s4n7h0 https://twitter.com/s4n7h0
- @samanL33T https://twitter.com/samanl33t 
