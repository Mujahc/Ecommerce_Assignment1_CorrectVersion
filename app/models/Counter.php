<?php

namespace app\models;

class Counter{
    public $count;

    // 1. If the /resources/counter.txt file exists (use the file_exists function)
    //     a. Open it for reading (use fopen);
    //     b. Lock the file (use flock);
    //     c. read the file into the $count variable;
    //     d. Close the file (use fclose);
    // 2. Else
    //     a. Set the $count variable to '{"count":0}';
    // 3. Decode the JSON in $count and copy the resulting object’s count property to this object’s
    //     count property
    public function __construct()
    {
        if(file_exists('counter.txt')) {
            $filename = 'resources/counter.txt';
            $file_handle = fopen($filename, 'r'); //a is for append, w for writing from the start, r for reading
            $count = fread($file_handle, filesize($filename));
            fclose($file_handle);
        } else {
            $count = 0;
        }
        if (!empty($count)) { // Check if $count is not empty to avoid errors
            $data = json_decode($count, true);
            $this->count = (isset($data['count'])) ? $data['count'] : 0; // Use isset to check if "count" key exists
        } else {
            $this->count = 0; // Set a default value if $count is empty
        }
    }

    // The increment method adds 1 to this object’s count property.
    public function increment(){
        $this->count++;
    }

    // The write method has the following algorithm:
    //     1. json_encode this object into $count;
    //     2. Open the counter.txt file for writing (use fopen);
    //     3. Lock the file for writing (use flock);
    //     4. Overwrite the file contents with $count (use fwrite).
    //     5. Close the file (use fclose)
    public function write() {
        $count = json_encode(['count' => $this->count]);
        $file = fopen('counter.txt', 'w');
        flock($file, LOCK_EX);
        fwrite($file, $count);
        fclose($file);
    }

    // The __toString method returns the json-encoded value of this object.
    public function __toString() {
        return json_encode(['count' => $this->count]);
    }
}