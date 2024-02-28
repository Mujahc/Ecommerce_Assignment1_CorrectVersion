<?php

namespace app\models;

class Message{
    // The Message model class has three properties: name, email, and IP, and 2 functions: read and write.
    public $name;
    public $email;
    public $IP;

    public static function read(){
        // The read method opens the /resources/messages.txt file with the file() function and returns the result.
		return file("/resources/messages.txt");
	}

    public function write(){
		// 1. json_encode this object into $message;
        $message = json_encode($this);

        // 2. Open the /resources/messages.txt file for appending (use fopen);
        $file = fopen("/resources/messages.txt", "a");

        // 3. Lock the file for writing (use flock);
        flock($file, LOCK_EX);

        // 4. write contents of $message and concatenate with a \n (use fwrite).
        fwrite($file, $message . "\n");

        // 5. Close the file handler (use fclose)
        fclose($file);
	}
}