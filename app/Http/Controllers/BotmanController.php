<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Http\Request;

class BotManController extends Controller
{

    public function handle()
    {
        
        $botman = app('botman');

        $botman->hears('{message}',function($botman,$message){

            if ($message == 'hi') {
                $this->askName($botman);
            };
            if ($message == 'I need help') {
                $this->askques($botman);
            }
            

        });

        $botman->listen();
    }

    public function askName($botman)
    {
        $botman->ask("Hello! What is Your Name?",function(Answer $answer){
            $name = $answer->getText();

            $this->say('Nice to meet you '.$name);
        });
    }
    public function askques($botman)
    {
        $botman->ask("Yes please! How Can I help you?",function(Answer $answer){
            $name = $answer->getText();

            $this->say('Please wait for our admin to contact with you');
        });
    }
}
