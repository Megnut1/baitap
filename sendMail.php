<?php
    include("PHPMailer/src/Exception.php");
    include("PHPMailer/src/OAuth.php");
    include("PHPMailer/src/PHPMailer.php");
    include("PHPMailer/src/POP3.php");
    include("PHPMailer/src/SMTP.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    class Send{
        public function sendMails($email,$username){
            $mail = new PHPMailer(true);
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->Host='smtp.gmail.com';
                $mail->SMTPAuth=true;
                $mail->Username='hoangminhsang08121999@gmail.com';
                $mail->Password='Hoangsang0812';
                $mail->SMTPSecure='tls';
                $mail->Port=587;
                $mail->CharSet='UTF-8';
                $mail->setFrom('hoangminhsang08121999@gmail.com');
                $mail->addAddress($email,$username);
                $mail->isHTML(true);
                $mail->Subject='Hi '.$username.'!';
                $mail->Body = 'Chào bạn, chúng tôi đã nhận được yêu cầu của bạn! Hãy đăng nhập website ngay đi nào!';
                $mail->AltBody = 'Hãy đăng nhập website ngay bây giờ nào!';
                $mail->send();
                exit();
        }

        public function sendCode($email,$username,$code){
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->SMTPAuth=true;
            $mail->Username='hoangminhsang08121999@gmail.com';
            $mail->Password='Anhtoi2k1bg';
            $mail->SMTPSecure='tls';
            $mail->Port=587;
            $mail->CharSet='UTF-8';
            $mail->setFrom('hoangminhsang08121999@gmail.com');
            $mail->addAddress($email,$username);
            $mail->isHTML(true);
            $mail->Subject='Hi '.$username.'!';
            $mail->Body = 'Chào bạn, chúng tôi đã nhận được yêu cầu của bạn! Hãy nhập '.$code.' để reset mật khẩu!';
            $mail->AltBody = 'Hãy đăng nhập website ngay bây giờ nào!';
            $mail->send();
            exit();

        }
    }
?>