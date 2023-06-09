<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    function kirimemail(Request $request)
    {
        $subject = 'Contact dari ' . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('pesan');
        $nomor = $request->input('phone');

        $mail = new PHPMailer(true); // Passing `true` enables exceptions
        try {
            // Pengaturan Server
            // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'lutfhinovalino@gmail.com'; // SMTP username
            $mail->Password = 'ncdyymhjwnqcuszl'; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465; // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom('luthfi@gmail.com', 'info');

            // Siapa yang akan menerima email
            $mail->addAddress('lutfhinovalino@gmail.com', 'LUTHFI'); // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);

            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = '<ul>
                            <li><b>Pengirim :  ' . $name . '</b></li>
                            <li><b>Email : ' . $emailAddress . '</b></li>
                            <li><b>Pesan : ' . $nomor . '</b></li>
                            <li><b>Pesan : ' . $message . '</b></li>
                            </ul>';
            $mail->AltBody = $message;

            $mail->send();
            return Redirect('/');
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}
