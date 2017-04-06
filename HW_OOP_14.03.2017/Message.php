<?php
namespace PhpAcademy\Models;
use PhpAcademy\Models\User;
abstract class Message
{
    protected $subject;
    protected $text;
    protected $created_at;
    protected $user;
    protected $id;

    public function __construct($subject, $text, \DateTime $created_at, User $user)
    {
        $this->subject = $subject;
        $this->text = $text;
        $this->created_at = $created_at;
        $this->user = $user;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getUser()
    {
        return $this->user;
    }
    function __toString()
    {
        return $this->getSubject() . ' : ' . $this->getText() . '(' . $this->user->getUsername() . ') at: ' . $this->created_at->format('d.m.Y h:i:s').' id ='. $this->id;
    }
    abstract static function getAllMessages();
    abstract static function getMessageById($id);
    abstract function updateMessageById($id);
    abstract static function deleteMessageById($id);
    abstract function save();
}