<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/sendmail", name="sendmail")
     */
    public function sendmailAction() {
        $message = \Swift_Message::newInstance()
       ->setSubject('Send Email Test')
       ->setFrom('VIsualontest001@gmail.com')
       ->setTo('binghuanlin@gmail.com')
       ->setBody(
           $this->renderView(
               // app/Resources/views/Emails/registration.html.twig
               'default/registration.html.twig',
               array('name' => "BingHuanLin")
           ),
           'text/html'
       )
       /*
        * If you also want to include a plaintext version of the message
       ->addPart(
           $this->renderView(
               'Emails/registration.txt.twig',
               array('name' => $name)
           ),
           'text/plain'
       )
       */
       ;


       $mailer = $this->get('mailer');
       echo $mailer->send($message);

       $spool = $mailer->getTransport()->getSpool();
       $transport = $this->get('swiftmailer.transport.real');

       $spool->flushQueue($transport);


       // replace this example code with whatever you need
       return $this->render('default/index.html.twig', [
           'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
       ]);
    }
}
