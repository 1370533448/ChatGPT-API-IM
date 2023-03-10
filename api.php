<?php

require __DIR__ . '/vendor/autoload.php';

use HaoziTeam\ChatGPT\V2 as ChatGPTV2;
use HaoziTeam\ChatGPT\V1 as ChatGPTV1;

$chatGPT = new ChatGPTV2('在这里填写你的秘钥','https://api.openai.com/'); //在这里填写秘钥和下面的角色设定，如果是国内服务器需要返代OPENAI的API接口
$chatGPT->addMessage('现在开始我们扮演一个角色扮演游戏，不用回答直接开始！从现在开始你就是流浪地球中的MOSS', 'user');
//$chatGPT = new ChatGPTV1('https://chat.openai.com/backend-');
//$chatGPT->addAccount('eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6Ik1UaEVOVUpHTkVNMVFURTRNMEZCTWpkQ05UZzVNRFUxUlRVd1FVSkRNRU13UmtGRVFrRXpSZyJ9.eyJodHRwczovL2FwaS5vcGVuYWkuY29tL3Byb2ZpbGUiOnsiZW1haWwiOiJ5cnV3aXdvQHByb3Rvbi5tZSIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJnZW9pcF9jb3VudHJ5IjoiSlAifSwiaHR0cHM6Ly9hcGkub3BlbmFpLmNvbS9hdXRoIjp7InVzZXJfaWQiOiJ1c2VyLXdNbUNndzA3aGlvV1JHVFBmMVd6OGJHNSJ9LCJpc3MiOiJodHRwczovL2F1dGgwLm9wZW5haS5jb20vIiwic3ViIjoiYXV0aDB8NjM5MzMxYTRlOGM4YWZjMDRiZmJlMTAyIiwiYXVkIjpbImh0dHBzOi8vYXBpLm9wZW5haS5jb20vdjEiLCJodHRwczovL29wZW5haS5vcGVuYWkuYXV0aDBhcHAuY29tL3VzZXJpbmZvIl0sImlhdCI6MTY3NzgwNjc4NSwiZXhwIjoxNjc5MDE2Mzg1LCJhenAiOiJUZEpJY2JlMTZXb1RIdE45NW55eXdoNUU0eU9vNkl0RyIsInNjb3BlIjoib3BlbmlkIHByb2ZpbGUgZW1haWwgbW9kZWwucmVhZCBtb2RlbC5yZXF1ZXN0IG9yZ2FuaXphdGlvbi5yZWFkIG9mZmxpbmVfYWNjZXNzIn0.XrxZsUJl1KvYl8ocKAQfmP-M819KP7_rnBL-nJuJ8LiymXVy2nyJfFq4r51wGpcXoF_HXrAjBb1q146Xh2FOFx_U8iEiVMgitOrq_3Ao7EP9TCAcgalOg7_x-WIvZJv_eD48uegaNkfIii52URGLdTNCMFAxADd3v8WVrIv14t-b7H_FvOwmB7lBDF7ABhi7Q4bciEEVhJR9uorwvxZhACIp6NtKHIroXNx7jCiVf6OprfDfqfJ32McZByFHdIaIo6vQ-q498RZGo-QNjDXqOQcVAylwtxf7afXp-8k4513FiskWYXyG6rkf4yP6R460eiiaKggT8pqmpRPnBXo8pw',"first",true);
$answer = $chatGPT->ask($_GET['question']);
echo $answer['answer'];