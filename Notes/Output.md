# php

## echo:

output - strings , numbers , array , html ,etc

- output multiple values.

Ex: 

```
<?php
$name = 'Moayad Abukhadra';
echo $name;
echo 1, 2 , 3;
?>
```

output:
![echo output](../Images/echo.png)


## print:

- Works like echo but only takes one value.

Ex: 
```
<?php
$name = 'Moayad Abukhadra';
print $name
?>
```

output: 
![print output](../Images/print.png)

## print_r():

- Used to print arrays, it shows the index with value.

Ex:
```
<?php
print_r([1,2,3])
?>
```

output:
![print_r output](../Images/print_r().png)


## var_dumb:

- Returns the data with more info like the type and the length. 

Ex:
```
<?php
var_dump("Moayad")
?>
```

output: 
![var_dumb output](../Images/var_dumb.png)

## var_export:

- return the data with the type. 

Ex:
```
<?php
var_export([1,2,3]);
var_export("Moayad");
?>
```

output:

![var_export output](../Images/var_export.png)