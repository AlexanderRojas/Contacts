<?php

namespace Contacts;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return array(
    'controllers' => array(
        'invokables' => array(
            'Contacts\Controller\Contacts' => 'Contacts\Controller\ContactsController',
        ),
    ),

        // The following section is new and should be added to your file:
        'router' => [
            'routes' => [
                'contacts' => [
                    'type'    => Segment::class,
                    'options' => [
                        'route' => '/contacts[/:action[/:id]]',
                        'constraints' => [
                            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            'id'     => '[0-9]+',
                        ],
                        'defaults' => [
                            'controller' => Controller\ContactsController::class,
                            'action'     => 'index',
                        ],
                    ],
                ],
            ],
        ],
    
    'view_manager' => array(
        'template_path_stack' => array(
            'Contacts' => __DIR__ . '/../view',
        ),
    ),
 );