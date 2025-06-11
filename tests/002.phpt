--TEST--
zstd_compress(): error conditions
--SKIPIF--
<?php
if (PHP_VERSION_ID >= 80000) die("skip requires PHP <8.0");
--FILE--
<?php
include(dirname(__FILE__) . '/data.inc');

echo "*** Testing zstd_compress() function with Zero arguments ***", PHP_EOL;
var_dump(zstd_compress());

echo "*** Testing with incorrect parameters ***", PHP_EOL;

class Tester {
}

$testclass = new Tester();
var_dump(zstd_compress($testclass));
?>
===Done===
--EXPECTF--
*** Testing zstd_compress() function with Zero arguments ***

Warning: zstd_compress() expects at least 1 parameter, 0 given in %s on line %d
bool(false)
*** Testing with incorrect parameters ***

Warning: zstd_compress() expects parameter 1 to be string, object given in %s on line %d
bool(false)
===Done===
