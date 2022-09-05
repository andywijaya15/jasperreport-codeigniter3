# Using Jasper Report to your CI 3 Project

1. Requirement
1.Codeigniter 3 project
2.Java JDK 1.8  (check with java --version and javac --version)
3.Composer
4.Jaspersoft Studio

1. Installation
1.Go to your project path with terminal and type to add phpjasper to your composer dependencies list :
composer require geekcom/phpjasper:1.16
2.Install dependencies that you add in  composer.json with :
composer install
3.Then add Jasperreport.php to your controllers
4.Change the input and output value with your .jasper file
5.Acces controller with CURL or web,then check your output folder that you have define in Jasperreport.php