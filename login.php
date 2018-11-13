<?php

    session_start();

    if(isset($_SESSION['name'])){
        echo "<script> window.alert('Already Logged IN') </script>";
        echo "<script> location.href='front.php'</script>";
    }
    else{
        echo "<script> location.href='login.html'</script>";
    }


?>