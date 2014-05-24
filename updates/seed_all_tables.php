<?php namespace BenFreke\MenuManager\Updates;

use Schema;
use October\Rain\Database\Updates\Seeder;
use BenFreke\MenuManager\Models\Menu;

class SeedAllTables extends Seeder
{

    public function run()
    {
        // This is a root node
        $mainMenu = Menu::create(
            [
                'title'       => 'Main Menu',
                'description' => 'The main menu items',
                'url'         => ''
            ]
        );

        // The top, or primary level of navigation
        $homePage = $mainMenu->children()->create(
            [
                'title' => 'Home Page',
                'description' => 'The primary navigation level',
                'url' => 'home'
            ]
        );

        // Secondary navigation
        $ajaxDemo = $homePage->children()->create(
            [
                'title' => 'Demo Ajax',
                'description' => 'Secondary item 1',
                'url' => 'ajax'
            ]
        );
        $homePage->children()->create(
            [
                'title' => 'Demo Plugins',
                'description' => 'Secondary item 2',
                'url' => 'plugins'
            ]
        );

        $ajaxDemo->children()->create(
            [
                'title' => 'Sub Link 1',
                'description' => 'Tertiary item 1',
                'url' => ''
            ]
        );

        $ajaxDemo->children()->create(
            [
                'title' => 'Sub Link 2',
                'description' => 'Tertiary item 2',
                'url' => ''
            ]
        );


    }
}