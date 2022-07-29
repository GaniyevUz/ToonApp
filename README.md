# ToonApp-API-in-PHP-OOP

**Convert real photos into cartoon images with high accuracy and beautiful**

## **How to use ?**

example code is here

```shell
composer require ganiyevuz/toonapp
```

```php
require_once "vendor/autoload.php";
use GaniyevUz\ToonApp;

$image  = new CURLFile('image.jpg'); // source image
$ToonApp = new ToonApp($image);
echo $ToonApp->execute();

//save with custom name
$name   = 'new-'.time().'.png';
echo $img->execute($name);
```
