```php
$file = fopen("somefile.txt", "r+");
if ($file === false) {
    // Handle the error appropriately
    // e.g., log an error, display a message to the user, etc.
    die("Error opening file: " . error_get_last()['message']);
} else {
    // ... process the file ...
    fclose($file);
}
```