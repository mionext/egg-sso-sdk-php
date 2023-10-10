<?php

use Egg\Foundation\Sso\Client;

require __DIR__ . '/../vendor/autoload.php';

$cli = new Client(['secret' => 'SK6523A91A7C0AA']);

var_dump($cli->checkSession('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOjEsInN1YiI6MSwiaXNzIjoiaHR0cDovL2xvY2FsaG9zdCIsImlhdCI6MTY5Njg0MDQzNCwibmJmIjoxNjk2ODQwNDM0LCJleHAiOjE2OTY4NDQwMzQsInNjcCI6WyJzc28uYXBpIl0sImFpZCI6MSwicmlkIjoxOSwiZWlkIjoxfQ.ZroPESiL4RxNDQ171VmMsw3KfTZIcCRk2k8l5KgprwE'));
