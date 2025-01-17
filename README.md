# decimal-time
Convert time to decimal.

Example usage:

```
require_once 'vendor/autoload.php';

use \Jamesleealexander\DecimalTime\DecimalTime;

$hours = 7;
$minutes = 36;
$seconds = 0;

print_r(DecimalTime::convert($hours, $minutes, $seconds));

$decimal = 7.32;

print_r(DecimalTime::revert($decimal));
```

Result returns as an object:

```
stdClass Object
(
    [decimal] => 7.6
    [hours] => 7
    [minutes] => 36
    [seconds] => 0
)
stdClass Object
(
    [decimal] => 7.32
    [hours] => 7
    [minutes] => 19
    [seconds] => 12
)
```
