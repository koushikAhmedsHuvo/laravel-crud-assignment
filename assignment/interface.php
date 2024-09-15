<?php

interface LoggerInterface {
    public function log($message);
}

// FileLogger class implements LoggerInterface
class FileLogger implements LoggerInterface {
    public function log($message) {
        file_put_contents('log.txt', $message . PHP_EOL, FILE_APPEND);
    }
}

// DatabaseLogger class implements LoggerInterface
class DatabaseLogger implements LoggerInterface {
    public function log($message) {
        // Simulate database logging
        echo "Logging message to database: $message\n";
    }
}

// Example usage
$fileLogger = new FileLogger();
$fileLogger->log("File log entry");

$dbLogger = new DatabaseLogger();
$dbLogger->log("Database log entry");
?>
<!-- bfbfnfj -->