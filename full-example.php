<?php 
    function isSqlInjected()
    {
        // get the current url
        $inurl = $_SERVER['REQUEST_URI'];
        if (preg_match("#select|update|delete|concat|create|table|union|length|show_table|mysql_list_tables|mysql_list_fields|mysql_list_dbs#i", $inurl))
        {
            return true;
        }
        $securityUlrs_url = $_SERVER['QUERY_STRING'];
        if ($securityUlrs_url != '' AND !preg_match("/^[_a-zA-Z0-9-=&]+$/", $securityUlrs_url))
        {
            return true;
        }
        return false;
    }


    if(isSqlInjected()) 
    {
        header('Location: http://www.yahoo.com'); 
    }
    else
    {
        header('location: http://www.google.com');
    }
?>