<?php
    /*
     * pdo database class
     * to connect
     * create statements
     * bind values and returns rows and results
     */

    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        private $dbh;
        private $stml;
        private $error;

        public function __construct(){
            // set dsn
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            // create new pdo
            try{

                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);

            }catch (PDOException $e){

                $this->error = $e->getMessage();
                echo $this->error;

            }

        }
    }