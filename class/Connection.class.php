<?php 

class Connection extends mysqli {
    
    public function __construct($host, $username, $password, $dbName, $sqlPort) {
        parent::__construct($host, $username, $password, $dbName, $sqlPort);
    }

    public static function executeQuery($conn, $query) {
        $result = $conn->query($query);
        $row = $result->fetch_all(MYSQLI_ASSOC);
        return $row;
    }

    public static function executeQueryWithParams($conn, $query, $params, $paramsType) {
        $stmt = $conn->prepare($query);
        $stmt->bind_param($paramsType, ...$params);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
        return $row;
    }
}