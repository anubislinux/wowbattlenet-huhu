# wowbattlenet
wowbattlenet



#System Requirements
>This project is likely to be able to work with older versions of programs, but support for these versions will not be provided
 - Apache 2.4.12
 - PHP 7.1
 - MySQL 5.6

#Supported Cores
>These Cores are supported so far
 - TrinityCore 7.x
 - TrinityCore 6.x
 - TrinityCore 5.4.8 - Register Only
 - TrinityCore 4.3.4 - Register Only
 - TrinityCore 3.3.5 - Register Only
 - TrinityCore 2.4.3 - Register Only

#Manual
 - To upload files to the server
 - Configure the configuration files of the database ( config/ConfigDB.php )
 - To change the language, open the file ( config/config.php ) Change the value - default_lang

#nginx configuration
>charset utf-8;
>location / {
>rewrite ^(.*)$ /public/$1;
>if (!-e $request_filename){
>rewrite ^(.*)$ /index.php?$1 break;
>}
>}
