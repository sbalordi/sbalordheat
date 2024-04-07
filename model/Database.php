<?php
// CLASSE DATABASE ACCESS LAYER

// questa classe va ad "impacchettare" la libreria mysqli in modo da avere un accesso con un livello di astrazione più alto

class Database {
    protected $connection;

    // metodo costruttore
    public function __construct() {
        try {
            $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

            if (mysqli_connect_errno()) {
                throw new Exception("DB connection failed!");
            }
        } catch(Exception $e) {
            throw $e;
        }
    }

    public function select($query = "", $params = []) {
        try {
            $statement = $this->executeStatement($query, $params);
            $result = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
            $statement->close();
            
            return $result;
        } catch(Exception $e) {
            throw $e;
        }
    }

    public function executeStatement($query, $params) {
        try {
            $statement = $this->connection->prepare($query);
            
            if ($statement == false) {
                throw new Exception("Unable to do prepared statement");
            }
            
            if ($params) {
                $i = 0;
                while ($i < sizeof($params, 0)) {
                    $statement->bind_param($params[$i], $params[$i + 1]);
                    $i += 2;
                }
            }
            
            $statement->execute();
            return $statement;
        } catch(Exception $e) {
            throw $e;
        }
   }
}
