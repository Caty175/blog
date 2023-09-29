<?php

require_once '../../blog/include/database.php';


    function ClassAutoLoad($ClassName){
        $directories = array("contents","forms", "layout", "processes", "includes");
        foreach($directories AS $dir){
            $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $ClassName . ".php";
            if(is_readable($FileName)){
                require $FileName;
            }
        }
    }
    spl_autoload_register('ClassAutoLoad', true, true);


$OBJ_Layout = NEW layout();
$OBJ_Contents = NEW contents();
$OBJ_Forms = NEW forms();