<?php
use IP1\RESTClient\Core\Communicator;
use IP1\RESTClient\SMS\OutGoingSMS;

require_once('vendor/autoload.php');

// Initial setup
$config = json_decode(file_get_contents('config.json'), true);
$api = new Communicator($config['account'], $config['token']);

// handle parameters
$sender = $_GET["sender"];
$msg = $_GET["text"];

if (substr($msg, 0, 5) == "santa") {
  $name = substr($msg, 6);
  $printed = file_put_contents('santa.txt', $sender . ";" . $name . PHP_EOL, FILE_APPEND | LOCK_EX);
} else if (substr($msg, 0, 2) == "go") {

}
