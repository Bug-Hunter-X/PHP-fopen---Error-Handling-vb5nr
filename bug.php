```php
$file = fopen("somefile.txt", "r+");
if ($file) {
    // ... process the file ...
    fclose($file);
}
```
This code is vulnerable to a common error:  it doesn't check the return value of `fopen()` thoroughly. If the file "somefile.txt" does not exist or is inaccessible for any reason, `fopen()` will return `false`. The code then proceeds to use `$file` as if it were a valid resource, leading to undefined behavior (often a warning or fatal error).