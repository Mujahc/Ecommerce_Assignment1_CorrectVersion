<?php

namespace app\controllers;

use app\models\Counter;

class Count extends \app\core\Controller{
    // The Count controller class will have an index method which will perform the following operations:
    //     1. Make a new Counter model object
    //     2. Call increment on the Counter object
    //     3. Call write the Counter object
    //     4. Echo the Counter object
    public function index(){
        $counter = new Counter;
        $counter->increment();
        $counter->write();
        echo $counter;
    }
}