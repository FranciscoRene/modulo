<?php
use Clase\Model\Clase;

return array(
    'service_manager' => array(
        'invokables' => array(
            'Zend\Permissions\Acl\Acl'              => 'Zend\Permissions\Acl\Acl',
        ),
        'factories' => array(
            'Modulo'                         => 'Modulo\Service\Factory\ModuloFactory',
            'Modulo\Model\Clase'             => function() {
							return new Clase();
						}
        ),
    ),
);
