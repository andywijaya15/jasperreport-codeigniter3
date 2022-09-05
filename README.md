# Using Jasper Report to your CI 3 Project

### Requirement
- Codeigniter 3 project
- Java JDK 1.8  (check with java --version and javac --version)
- Composer
- Jaspersoft Studio

### Installation
- Go to your project path with terminal and type to add phpjasper to your composer dependencies list :
composer require geekcom/phpjasper:1.16
- Install dependencies that you add in  composer.json with :
composer install
- Then add Jasperreport.php to your controllers
- Change the input and output value with your .jasper file
- Acces controller with CURL or web,then check your output folder that you have define in Jasperreport.php
