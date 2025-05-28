<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'payroll_db');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to UTF-8
$conn->set_charset("utf8mb4");

// Function to get database connection
function getConnection() {
    global $conn;
    return $conn;
}

// Function to close database connection
function closeConnection() {
    global $conn;
    if ($conn) {
        $conn->close();
    }
}

// Function to escape string
function escapeString($string) {
    global $conn;
    return $conn->real_escape_string($string);
}

// Function to perform query
function query($sql) {
    global $conn;
    return $conn->query($sql);
}

// Function to get last inserted ID
function getLastId() {
    global $conn;
    return $conn->insert_id;
}

// Function to begin transaction
function beginTransaction() {
    global $conn;
    $conn->begin_transaction();
}

// Function to commit transaction
function commitTransaction() {
    global $conn;
    $conn->commit();
}

// Function to rollback transaction
function rollbackTransaction() {
    global $conn;
    $conn->rollback();
}

// Function to get number of affected rows
function getAffectedRows() {
    global $conn;
    return $conn->affected_rows;
}

// Function to check if a value exists in a table
function valueExists($table, $column, $value, $exclude_id = null) {
    global $conn;
    $sql = "SELECT COUNT(*) as count FROM $table WHERE $column = ?";
    $params = [$value];
    
    if ($exclude_id !== null) {
        $sql .= " AND id != ?";
        $params[] = $exclude_id;
    }
    
    $stmt = $conn->prepare($sql);
    $types = str_repeat('s', count($params));
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    
    return $result['count'] > 0;
}

// Register shutdown function to close connection
register_shutdown_function('closeConnection');
