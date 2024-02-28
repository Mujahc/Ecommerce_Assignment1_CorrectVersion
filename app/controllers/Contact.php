<?php

namespace app\controllers;

use app\models\Message;

class Contact extends \app\core\Controller
{
    public function index(){
        $this->view('Contact/index');
    }

    public function submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $message = new Message(
                $_POST['email'],
                $_POST['message'],
                $_SERVER['REMOTE_ADDR']
            );

            $message->write();
            header('location:/Contact/read');
        } else {
            throw new \Exception('Invalid request method');
        }
    }

    public function read() {
        // Create a new Message object
        $messageModel = new Message();

        // Read messages from the file
        $messages = $messageModel->read();

        // Pass data to the view
        $this->view('Contact/read', ['messages' => $messages]);
    }
}