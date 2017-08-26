<?php
/**
 * Created by PhpStorm.
 * User: onurozkir
 * Date: 8/24/17
 * Time: 3:36 PM
 */

namespace AppBundle\Service;


use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;

class EmailService
{
    /**
     *  Address to which the mail is delivered
     *  Maili TEslim alan Mail Adresi
     *  Bilgisini parameter.yml den almakta
     */
    protected $mailTo;

    private $mailer;

    protected $container;
    public function __construct(\Swift_Mailer $mailer, ContainerInterface $container)
    {
        $this -> container = $container;
        $this->mailTo = $this->container->getParameter('mailer_address');
        $this->mailer = $mailer;

    }

    public function sendMail( $data = array(), $type )
    {
        $retVal = FALSE;

        switch ($type) {
            case 'UserContactMessage':
                $mailTemplate = "mail/contact.html.twig";
                break;
            case 'AdminReplyMessage':
                $mailTemplate = 'mail/reply.html.twig';
                break;
            case 'SignInMessage':
                 $mailTemplate = "mail/welcome.html.twig";
                 break;
            default:
                $mailTemplate = "mail/default.html.twig";
        }

        $message = \Swift_Message::newInstance()
            ->setSubject( $data -> getMessageTitle() . " About" )
            ->setFrom( $data -> getEmail() )
            ->setTo( $this->mailTo )
            ->setBody(
                $this->renderView($mailTemplate, array(
                    'message' => $form['message']->getData(),
                    'who' => $form['nameSurname']->getData(),
                    'date' => new \DateTime('now'),
                    'phone' => $form['phone']->getData(),
                    'mail' => $form['email']->getData(),
                )
            ));
       if ( $this->mailer->send( $message ) ) {
           $retVal = TRUE;
       }

       return $retVal;
    }

    public function getMailTemplate( $data = array(), $type){




        die;


    }

}