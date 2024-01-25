<?php
namespace App\Service;

use Knp\Menu\FactoryInterface;

class MenuPrincipal
{
    private FactoryInterface $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function generateMenu(): \Knp\Menu\ItemInterface
    {
        $menu = $this->factory->createItem('root');
        
        $menu->addChild('Accueil', ['route' => 'index']);
        $menu->addChild('Articles', ['route' => 'articles']);
        $menu->addChild('Catégories', ['route' => 'catégories']);

        return $menu;
    }
}
?>
