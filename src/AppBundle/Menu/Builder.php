<?php


namespace AppBundle\Menu;


use Knp\Menu\FactoryInterface;

class Builder
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('Home');

        return $menu;
    }
}