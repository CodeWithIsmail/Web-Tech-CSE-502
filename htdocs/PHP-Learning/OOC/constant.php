<?php
    class Alert{
        const ALERT_MESSAGE="this is an alert message";
        const DANGER_MESSAGE="this is a dangerous message";
        public function show_alert()
        {
            echo self::ALERT_MESSAGE . "<br>";
        }
    }

    $alert1=new  Alert();
    $alert1->show_alert();
    echo Alert::DANGER_MESSAGE . "<br>";
?>