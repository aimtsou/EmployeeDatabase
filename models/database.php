<?php
include "connect.php";
header('Content-Type: text/html; charset=iso-8859-7');

if( !function_exists('query'))
{
    function query($query) {
        connect();
        $result = mysql_query($query) or die( error_function( $query,mysql_error()));
        if ( !$result ) {
            die( error_function( $query,mysql_error()) );
        }
        disconnect();
    }
}
if( !function_exists('query_array'))
{
    function query_array($query) {
        connect(); 
        $result = mysql_query($query) or die( error_function( $query,mysql_error()));
        if ( !$result ) {
            die( error_function( $query,mysql_error()) );
        }

        while($row = mysql_fetch_array($result))
        {
            $answer[] = $row;
        } 
        //mysql_free_result($result);
        disconnect(); 
        return $answer;
    }
}

if( !function_exists('query_row'))
{
    function query_row($query) {
        connect();
        $result = mysql_query($query) or die( error_function( $query,mysql_error()));
        if ( !$result ) {
            die( error_function( $query,mysql_error()) );
        }

        $row = mysql_fetch_array($result);
        //mysql_free_result($result);
        disconnect();
        return $answer;
    }
}
if( !function_exists('error_function'))
{
    function error_function($query,$error) {
        include "../header.php";
        echo "<br>";
        echo "<h2>This shouldn't happen! Please make sure that you have filled all the required information correctly.</h2>";
        echo "<table> <tr><td>query :" . $query;
        echo "</td><td>error :" . $error;
        echo "</td><td></table>";
        include "../footer.php";

    }
}
?>