The solution involves being more explicit about the type of keys used in your PHP arrays. Avoid implicit type casting by using consistent key types and performing stricter key checks. 

```php
<?php
$arr = ["1" => "one", 1 => "two"];

if (isset($arr['1'])) {
  echo "Key '1' exists and its value is: " . $arr['1'] . "\n";
}

if (isset($arr[1])) {
  echo "Key 1 exists and its value is: " . $arr[1] . "\n";
}

// Use strict comparison to ensure type safety:
foreach ($arr as $key => $value) {
  if ($key === '1') { 
    echo "Key '1' exists and its value is: " . $value . "\n";
  }
  if ($key === 1) {
    echo "Key 1 exists and its value is: " . $value . "\n";
  }
}
var_dump($arr);
?>
```

Using `isset()` instead of `array_key_exists()` and explicit type comparisons with `===` prevents unintended key matching due to PHP's type juggling.  It also makes code more readable and easier to maintain.