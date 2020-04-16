<?php
$mysql_host = 'localhost';
$mysql_user = 'root';

if(!@myswl_connect($mysql_host,$mysql_user))
{
    die('Cannot connect');
}
else
{
    if(@mysql_select_db('server'))
    {
        echo "Connection Success";
    }
    else
    {
        die('Cannot connect');
    }
}
?>