<?php

$routes = [
    'page/(.*)' => 'Pages:detail',
    'artikel' => 'Artikel:list',
    'artikel/page/([0-9]+)' => 'Artikel:list',
	'cross/admin' => 'Cross:adminList',
];