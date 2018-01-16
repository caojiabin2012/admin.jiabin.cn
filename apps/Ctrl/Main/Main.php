<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;
use ZPHP\Core\Config;
use ZPHP\Protocol\Request;
use ZPHP\View;
use Common;
use PHPMailer\PHPMailer\PHPMailer;

class Main extends \Ctrl\Admin implements IController
{

    public function _before()
    {
        parent::_before();
        return true;
    }

    public function _after()
    {
        //
    }

    public function main()
    {
        return [];

        // echo 23424;
        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/main/main.php');
        $view->display();
    }

    public function jiabin()
    {
        return ['name' => 'jiabin'];
    }


    // public function main()
    // {
    //     $project = Config::getField('project', 'name', 'zphp');
    //     $data = $project . " runing!\n";
    //     $params = Request::getParams();
    //     if (!empty($params)) {
    //         foreach ($params as $key => $val) {
    //             $data .= "key:{$key}=>{$val}\n";
    //         }
    //     }
    //     return ['data' => ['data' => ['zphp' => $data]]];
    // }

    public function reg()
    {
       $mail = new PHPMailer;
        $body = '<h1>jiabin</h1>';
        $mail->isSMTP();
        $mail->Host = 'smtp.126.com';
        $mail->SMTPAuth = true;
        // $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->Port = 25;
        $mail->Username = 'caojiabin2012@126.com';
        $mail->Password = 'jiabin123';
        $mail->setFrom('caojiabin2012@126.com');
        // $mail->addReplyTo('caojiabin2012@qq.com');
        $mail->AddAddress('cao.jiabin@timecash.cn');
        // $mail->SMTPDebug = true;
        $mail->Subject = "PHPMailer Simple database mailing list test";
        //Same body for all messages, so set this before the sending loop
        //If you generate a different body for each recipient (e.g. you're using a templating system),
        //set it inside the loop
        $mail->msgHTML($body);
        //msgHTML also sets AltBody, but if you want a custom one, set it afterwards
        $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';

        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }
}
// <?php
// namespace ctrl\main;
// use ZPHP\Controller\IController,
//     ZPHP\Core\Config,
//     ZPHP\View;
// use ZPHP\Protocol\Request;

// class main implements IController
// {
//     public function _before()
//     {
//         return true;
//     }

//     public function _after()
//     {
//         //
//     }

//     public function main()
//     {
//         $project = Config::getField('project', 'name', 'zphp');
//         $data = $project . " runingada!\n";
//         $params = Request::getParams();
//         if (!empty($params)) {
//             foreach ($params as $key => $val) {
//                 $data .= "key:{$key}=>{$val}\n";
//             }
//         }
//         return ['data' => ['data' => ['zphp' => $data]]];
//     }

//     public function jiabin()
//     {
//         $project = Config::getField('project', 'name', 'zphp');
//         $data = $project . " runingad24242424a!\n";
//         $params = Request::getParams();
//         if (!empty($params)) {
//             foreach ($params as $key => $val) {
//                 $data .= "key:{$key}=>{$val}\n";
//             }
//         }
//         return ['data' => ['data' => ['zphp' => $data]]];
//     }
// }




