<?php
require "PHPMailer/class.phpmailer.php";
//require "PHPMailer/PHPMailerAutoload.php";
require "PHPMailer/class.smtp.php";
Class MAILER extends PHPMailer
{
    Public Function config($config = array())
    {
        if ($config["isSMTP"])
        {
            $this->isSMTP();
            $this->SMTPAuth = $config["SMTPAuth"];
            $this->SMTPSecure = $config["SMTPSecure"];
            $this->Host = $config["Host"];
            $this->Port = $config["Port"];
            $this->Username = $config["Username"];
            $this->Password = $config["Password"];
            $this->From = $config["From"];
            $this->FromName = $config["FromName"];
        }
    }
}