<?php 
require __DIR__ . '/vendor/autoload.php';

use App\Book;
use App\eReaderAdapter;
use App\Kindle;
use App\Nook;
use App\Person;

echo (new Person)->read(new eReaderAdapter(new Kindle)) . PHP_EOL;
echo (new Person)->read(new eReaderAdapter(new Nook)) . PHP_EOL;