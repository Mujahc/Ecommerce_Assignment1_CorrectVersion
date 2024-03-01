<?php

namespace app\controllers;

use stdClass;

class Contact extends \app\core\Controller
{
    public function index(){
        $this->view('Contact/index');
    }

    public function submit()
    {
        //call a view to show the submitted data
		//collect the data
		//declare a person object
		$message = new \app\models\Message();
		//populate the properties
		$message->name = $_POST['name'];
		$message->email = $_POST['email'];
		$message->IP = $_SERVER['REMOTE_ADDR'];
		$message->myMessage = $_POST['myMessage'];
		//hypothetically insert into a database
		$message->write(); //add the person to the data file
		//show the feedback view to confirm with the user
		//$this->view('Person/complete_registration',$person);

		//redirect the user back to the list
		header('location:/Contact/read');
    }

    public function read() {
		$message = \app\models\Message::read();

		$this->view('Contact/read', $message);
    }
}