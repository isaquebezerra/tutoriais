<?php

//namespace TestApp;

require 'src/StringHelper.php';

$myString = 'This is great';
//var_dump(StringHelper::startsWith($myString, 'This is')); // true

print StringHelper::startsWith('ribamar', 'ri');// 1
print StringHelper::endsWith('ribamar', 'maru');
print StringHelper::removeChar('amor', 'r');
print '<br>'.StringHelper::removeFromEnd('ribamar', 'ar');
