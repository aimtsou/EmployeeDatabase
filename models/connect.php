<?php
if( !function_exists('connect'))
{
    function connect() {
        //$myset = include 'settings-local.php';
        $link = mysql_connect('localhost',
                                'root',
                                ''
                            );

        if (!$link) {
                die('Could not connect: ' . mysql_error());
        }

        //make database the current db
        $db_selected = mysql_select_db('db', $link);
        if (!$db_selected) {
            die ('Can\'t use db : ' . mysql_error());
        }
        mysql_query("SET NAMES utf8");
        //echo "I am connected\n";
    }
}
if (!function_exists('disconnect'))
{
    function disconnect() {
        mysql_close();
    }
}

?>
