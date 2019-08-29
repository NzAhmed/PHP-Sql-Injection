<?php 
    include("detectSqlInjection.php");
    $sqlInjection = new DetectSqlInjection(); 
    if($sqlInjection->isSqlInjected()) 
    {
        header('Location: warning.php'); 
    }
    else
    {
        header('location: http://www.google.com');
    }
?>