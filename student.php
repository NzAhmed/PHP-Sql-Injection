<?php
    /*********************** Detect Sql Injection ************************/
    include("detectsqlinjection.php");
    $sqlInjection = new DetectSqlInjection(); 
    if($sqlInjection->isSqlInjected()) header('Location: warning.php'); 
    /*********************************************************************/
        
    // if you get here do anything with your requested data

?>


