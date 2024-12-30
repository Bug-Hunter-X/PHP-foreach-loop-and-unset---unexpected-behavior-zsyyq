function foo(array $arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      $keysToRemove[] = $key;
    }
  }

  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )