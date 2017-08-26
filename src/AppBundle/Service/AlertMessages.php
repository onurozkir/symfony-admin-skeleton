<?php
/**
 * Created by PhpStorm.
 * User: onurozkir
 * Date: 8/13/17
 * Time: 3:38 AM
 */

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;

class AlertMessages
{
    protected $session;
    public function __construct()
    {
        $this -> session = new Session();
        if ($this -> session -> get('alert')) {
            $this -> session -> remove('alert');
            $this -> session -> remove('alertType');
        }
    }
    /**
     * $this->setMessage->setMessage(array('danger'=>'unSuccessFul')); ->  Başarısız Mesaj Gösterimi
     * $this->>setMessage->setMessage(array('success'=>'Succesful'));  -> Başrılı Mesajı Gösterimi
     * $this->>setMessage->setMessage(array('warning'=>'Warning'));  -> Uyarı Mesajı Gösterimi
     */
    public function setMessage($messages = array())
    {
        $alertType = key($messages);
        if($alertType == 'danger') { $alertType = 'error'; }
            foreach ($messages as $key => $value) {
                $this-> session->set('alert', $value);
            }
        $this-> session->set('alertType', $alertType);
    }
    /**
     * @param $message
     * $this->setMessage->infoMessage('info message example'); -> Uyarı Mesajı Gösterimi
     */
    public function infoMessage($message)
    {
        if($message != "")
        {
            $this->session->set('infoMessage', $message);
            $this->session->set('alertType', 'info');
        }
    }

}