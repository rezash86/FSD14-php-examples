<?php
    interface Logger{
        public function log($message);
    }


    class FileLogger implements Logger{
        public function log($message){
            //this is not real
            echo "Writing to file: $message";
        }
    }

    class DatabaseLogger implements Logger{
        public function log($message){
            //this is not real
            echo "Writing to database: $message";
        }
    }

    $file_logger = new FileLogger();
    $file_logger->log("this is a message <br>");
    $database_logger = new DatabaseLogger();

    $database_logger->log("this is a message <br>");


?>