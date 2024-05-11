<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotmanController extends Controller
{
  /**
  * Place your BotMan converison.
  */
  public function Request()
  {
    $botman = app('botman');

    $botman->hears('{message}', function($botman, $message) {
      if ($message == 'Hi! i need your help') {
        $this->askName($botman);
      } else {
        $botman->reply("Hello! how can i Help you...?");
      }
    });

    $botman->listen();
  }

  /**
  * Place your BotMan converison.
  */
  public function askReply($botman)
  {
    $botman->ask('Hello! What is your Name?', function(Answer $answer) {
      $name = $answer->getText();

      $this->say('Nice to meet you '.$name);
    });
  }
}
