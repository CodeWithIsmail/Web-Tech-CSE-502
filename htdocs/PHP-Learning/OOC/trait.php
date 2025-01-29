<?php
    trait message1{
        public function msg1()
        {
            echo "oop is fun";
        }
    }
    trait message2{
        public function msg2()
        {
            echo "i dont know";
        }
    }

    class Welcome1{
        use message1;
    }
    class Welcome2{
        use message1,message2;
    }

    $wlc1=new Welcome1();
    $wlc2=new Welcome2();

    $wlc1->msg1();
    echo "<br>";
    $wlc2->msg1();
    echo "<br>";
    $wlc2->msg2();
    echo "<br>";
?>
