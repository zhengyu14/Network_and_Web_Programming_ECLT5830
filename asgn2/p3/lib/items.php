<?php
  // This file contains an array of items (to emulate the data in a database).

/*
  Read JSON encoded data from mockdata.json and covert them to an array of map.
  Each item has four properties: id, title, origin, and price.

  Here are some examples to show how you can access the data in the array.
  mockDb: An array of map (a map is an array that uses string as index)
  mockDb[0]: The fist item
  mockDb[0]: id (type int) of the first item
  mockDb[1]['title']: title (type string) of the second item
  mockDb[1]['origin']: origin (type string) of the second item
  mockDb[10]['price']: price (type float) of the 11th item

*/
$jsonstr = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "mockdata.json");
$mockDb = json_decode($jsonstr, true);
