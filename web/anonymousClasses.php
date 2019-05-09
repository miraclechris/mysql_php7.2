<?php

interface Message
{
    public function getMessage(): string;
}

Class OutputMessage
{
    public function sendMessage(Message $message)
    {
        echo $message->getMessage();
    }
}

$output = new OutputMessage();

$output->sendMessage(new class implements Message{
    public function getMessage(): string
    {
        return "Hello!!<br/>";
    }
});

print_r($output);