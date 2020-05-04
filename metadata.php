<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'searchoxid',
    'title'        => '<span style="font-family:monospace;background-color:#000000;color:#FFFFFF;">&nbsp;pflaesterer&nbsp;</span> - searchoxid',
    'thumbnail'    => 'logo.png',
    'email'        => 'oxid@pflaesterer.org',
    'url'          => 'https://pflaesterer.org',
    'description'  => array(
        'en'=>'Enhances the oxid shop search (also searches in variants).',
        'de'=>'Verbessert die OXID Shop Suche (durchsucht auch die Varianten).',
    ),
    'version'      => '0.0.1',
    'author'       => 'Philip Pflästerer',
    
    /*
        Don't forget "composer dump-autoload" when creating new controllers or extending functionality.
        Also see the "autoload"-section in composer.json in root-dir.
    */

    'extend' => [
        \OxidEsales\Eshop\Application\Model\Search::class => \Pflaesterer\SearchOxid\Application\Model\Search::class,
    ],

);

