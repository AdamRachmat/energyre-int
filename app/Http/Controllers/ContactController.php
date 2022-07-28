<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    function showContactForm(){
        return view('home');
    }

    function sendMail(Request $request){
        
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $subject = "Contact dari " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
           $mail->isSMTP();                                      // Set mailer to use SMTP
           $mail->Host = 'energyre-int.com';                  // Specify main and backup SMTP servers
           $mail->SMTPAuth = true;                               // Enable SMTP authentication
           $mail->Username = 'adminone@energyre-int.com';                 // SMTP username
           $mail->Password = '92e3@eSf1UzZD.';                           // SMTP password
           $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
           $mail->Port = 465;                                    // TCP port to connect to

           // Siapa yang mengirim email
           $mail->setFrom('info.energyre@gmail.com',$name);

           // Siapa yang akan menerima email
           $mail->addAddress('info.energyre@gmail.com', 'Contact dari Website');     // Add a recipient
           // $mail->addAddress('ellen@example.com');               // Name is optional

           // ke siapa akan kita balas emailnya
           $mail->addReplyTo($emailAddress, $name);
           
           // $mail->addCC('cc@example.com');
           // $mail->addBCC('bcc@example.com');

           //Attachments
           // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
           // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


           //Content
           $mail->isHTML(true);                                  // Set email format to HTML
           $mail->Subject = $subject;
           $mail->Body    = $message;
           $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('home');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}