<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Typo3 Theme',
    'description' => '',
    'category' => 'templates',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Jonas Koneczny',
    'author_email' => 'koneczny@analog.de',
    'author_company' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.12-7.99.99'
        ),
        'conflicts' => array(
            'fluidpages' => '*',
            'themes' => '*',
        ),
    ),
);
