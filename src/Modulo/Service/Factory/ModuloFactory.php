<?php
namespace Modulo\Service\Factory;

class ModuloFactory
{
    /**
     * @var string
     */
    private $string;

    public function __invoke($serviceLocator)
    {
        $this->clase      = $serviceLocator->get('Modulo\Model\Clase');

        return $this->clase;
    }
}
