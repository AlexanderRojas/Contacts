<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Http\Client;
use Zend\Http\Request;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {   
        $request = new Request();
        $request->setMethod('GET');
        $request->setUri('https://app.alegra.com/api/v1/contacts/');
        $client = new Client();
        $client->setAuth('rojjaas@gmail.com', 'df5daef64295ac9b6600');
        $response = $client->send($request);
        return $response;
    }
}
// Lo que NO USO ¡¡¡
//use Zend\Http\Client as HttpClient;
//return new JsonModel(
//$this->getHelper('Layout')->disableLayout();
//$this->getHelper('ViewRenderer')->setNoRender();
//use Zend\View\Model\ViewModel;
