<?php
namespace RocketChat;

class RocketChatException extends \Exception {
    public function __construct($response, $code = 0, Exception $previous = null) {
    	$message = isset($response->body->error) ? $response->body->error : $response->body->message;
        parent::__construct($message, $response->code, $previous);
    }
}