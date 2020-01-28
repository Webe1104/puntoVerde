<?php

namespace App\Http\Controllers;
use App\Mail\ContactoMail;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require_once __DIR__ . '/composer/autoload_real.php';
// require __DIR__.'/../vendor/autoload.php';
// require  __DIR__.'/../vendor/autoload.php';
// require asset('puntoVerde/blog/vendor/autoload.php');

// require 'aws.phar';

class MailController extends Controller{

	public function send(Request $req){
		$data = [
		        'subject' => 'puntoverdegrupo@gmail.com',
		        'message' => '$request->message',
		    ];

		Mail::to('puntoverdegrupo@gmail.com')->send(new ContactoMail($data));
	}
}

?>

