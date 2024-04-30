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

    public static function selectCheckAvailability($conn, $query, $params) {
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $params['check_in'], $params['check_out']);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $row = $result->fetch_all(MYSQLI_ASSOC);
        return $row;
    }


}