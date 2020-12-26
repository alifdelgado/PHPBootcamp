<?php

use App\Test;
use App\Record;
use App\Student;

ini_set('display_errors', 'On');
header('Content-Type:text/plain', true);
require_once __DIR__ . '/vendor/autoload.php';
$student = new Student(new Record, new Test);
