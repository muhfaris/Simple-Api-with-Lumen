# list of container
 * php-7.1-fpm
 * mysql 5:6 
 * nginx 1:10
 
# how to use this :
build and run with :
``````````````
  docker-compose up -d 
``````````````
 and point your browser to :
``````````````
  127.0.0.1:8080
``````````````

if you got file permision issue like +0000 "GET /index.php" 500

try fix it with: 
`````
  chmod 777 -R storage/ && chmod  777 -R bootstrap/*
`````
