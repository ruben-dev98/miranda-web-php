<?php 

class Connection extends mysqli {
    
    public function __construct($host, $username, $password, $dbName, $sqlPort) {
        parent::__construct($host, $username, $password, $dbName, $sqlPort);
    }

    public static function select($conn, $query) {
        $result = $conn->query($query);
        $row = $result->fetch_all(MYSQLI_ASSOC);
        return $row;
    }

    public static function selectWithParams($conn, $query, $params) {
        $stmt = $conn->prepare($query);
        foreach($params as $key => $value) {
            $stmt->bind_param($value);
        }

        $row = $stmt->execute();
        return $row;
    }


}