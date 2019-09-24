<?php

class Bar {

}

$bar = new Bar();

$demo = ['een', 'twee', 'drie'];
$demo[] = 'vier';

$demo['src'] = 'http://foo.bar';

echo $demo[];
echo "\r\n";
echo count($demo);