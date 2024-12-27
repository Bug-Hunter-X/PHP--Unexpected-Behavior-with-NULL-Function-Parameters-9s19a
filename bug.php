```php
function my_function($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null values explicitly
  }

  // ... rest of the function ...
}

//Example usage
echo my_function(1,2); //outputs 3
echo my_function(null, 2); //outputs null
```