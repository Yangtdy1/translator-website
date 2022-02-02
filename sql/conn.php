<?php
/*-----
        Start connection string
-----*/

        // set up db connection string

        function getConnection()
        {
                $servername = "localhost";
             $usr = "thongang_daoyang";
       $pass = "nU9s9mn6vxNt";
       $dbname = "thongang_translatordb";
                $mysqli = new mysqli($servername, $usr, $pass, $dbname);
        // CAN I complain and exit from HERE if fails?

                if ($mysqli->connect_error)
                {
                        die("Error, could not log into MySQL, sorry: " .$mysqli->connect_error);
                }
                else
                {
                        return $mysqli;
                }
                return $mysqli;
        }

     
?>