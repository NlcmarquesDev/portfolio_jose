<?php
require_once('Database.php');
class EmailDAO
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getEmails()
    {
        return $this->db->query("SELECT * FROM emails")->findAll();
    }

    public function sendEmail($email_sender, $subject, $message)
    {
        $this->db->query("INSERT INTO emails ( email_sender, subject, message) VALUES(:email_sender, :subject, :message)", [
            ':email_sender' => $email_sender,
            ':subject' => $subject,
            ':message' => $message
        ]);
    }
}
