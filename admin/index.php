<?php
    session_start(); 
    function checkFile($page)
        {
            if(file_exists($page))
            {
                require_once $page;
            }
            else{
                require_once "view/error.php";
            }
        }
    if(isset($_REQUEST['view']))
    {
        $page=$_REQUEST['view'];
        $pageUrl="view/".$page.".php";
        checkFile($pageUrl);
    }
    else
    {
        $page="view/home.php";
        checkFile($page);
    }
?>