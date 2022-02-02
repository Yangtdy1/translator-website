<?php
/*-----
        Start connection string
-----*/

        // set up db connection string

        function getConnection()
        {
                $host = "localhost";
                $usr = "root";
                $pass = "";
                $dbname = "translatordb";
                $mysqli = new mysqli($host, $usr, $pass, $dbname);
        // CAN I complain and exit from HERE if fails?

                if ($mysqli->connect_error)
                {
                        die("Error, could not log into MySQL, sorry: " .$mysqli->connect_error);
                }
                else
                {
                        return $mysqli;
                }
        }

     
?>