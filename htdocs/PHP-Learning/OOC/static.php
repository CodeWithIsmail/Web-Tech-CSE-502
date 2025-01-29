<?php
    class Message{
        public static $alert_message;
        public static function show()
        {
            echo self::$alert_message;
        }
    }

    Message::$alert_message="hello world";
    Message::show();
?>