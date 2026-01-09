<?php

namespace Entity;

class Notification
{
    private $message;
    private $is_read;
    private $user_id;

    function __construct($message, $user_id)
    {
        $this->message = $message;
        $this->user_id = $user_id;
    }
    public function getUser_id()
    {
        return $this->user_id;
    }
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
    public function getIs_read()
    {
        return $this->is_read;
    }
    public function setIs_read($is_read)
    {
        $this->is_read = $is_read;

        return $this;
    }
    public function getMessage()
    {
        return $this->message;
    }
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
    public function toString()
    {
        return  " =>| message: " . $this->getmessage() . "<br>" .
            " =>| is_read: " . $this->getis_read() . "<br>" .
            " =>| user_id: " . $this->getuser_id() . "<br>";
    }
}
