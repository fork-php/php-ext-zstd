--TEST--
ob_zstd_handler
--SKIPIF--
<?php
include (dirname(__FILE__) . '/ob_skipif.inc');
?>
--INI--
zstd.output_compression=0
--ENV--
HTTP_ACCEPT_ENCODING=zstd
--GET--
ob=004
--FILE--
<?php
ob_start('ob_zstd_handler');
echo "hi\n";
?>
--EXPECT_EXTERNAL--
files/ob_004.zstd
--EXPECTHEADERS--
Content-Encoding: zstd
Vary: Accept-Encoding
