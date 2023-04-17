<?php 
    session_start();
    require "vendor/autoload.php";
    use App\QuestionManager;
    
    //Debug funtion
    function a_test($var){
        echo $var;
        var_dump(debug_backtrace());
    }

    try {
        $manager = new QuestionManager;
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['download'])) {
        $manager->downloadResult($_SESSION['answers']);
    }
    }
    catch (Exception $e) {
        a_test($_SESSION['answers']);
    }

    
?>
