<?php

namespace Contacts\Controller;

//use Zend\Json;
use Zend\Http\Request;
use Zend\Http\Client;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;



class ContactsController extends AbstractActionController
{
    public function indexAction()
    {
        $client = new Client('https://app.alegra.com/api/v1/contacts/',
        
        array(
            'maxredirects' => 0,
            'timeout' => 30,
            'Accept' => 'application/json',
        ));

        // Using basic authentication
          $client->setAuth(
            'rojjaas@gmail.com', 
            'df5daef64295ac9b6600');
         $response = $client->send();

         echo $response;
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}