
# PHP-CRUD-with-pagination-in-OOP

**Convert real photos into cartoon images with high accuracy and beautiful**

**How to use ?**
--
example code is here

```php
require_once "ToonApp.php";
use GaniyevUz\Toon;

$image  = new CURLFile('image.jpg');
$ToonApp = new ToonApp($image);
echo $ToonApp->execute();

//save with custom name
$name   = 'new-'.time().'.png';
echo $img->execute($name);
```
