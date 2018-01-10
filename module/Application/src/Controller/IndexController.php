<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Request;
use Zend\Http\Client;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        echo "hola desde indexAction";
            }
    

    public function addAction()
    {
            echo "hola desde addAction";

       
    }
    
    public function editAction()
    {
            echo "hola desde editAction";


    }

    public function deleteAction()
    {
            echo "hola desde deleteAction";
    }
}
