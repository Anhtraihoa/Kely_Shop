<?php 
    class database{
        public $conn;
        protected $severName  = "kelyserver.mysql.database.azure.com";
        protected $userName = "kelyusername";
        protected $passWord = "Vothanhtu2002";
        protected $databaseName = "kelydatabase";

        function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->severName;dbname=$this->databaseName", $this->userName, $this->passWord);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
        }
    }
?>
