<?php
//  fichier de config de l'app

session_start();

const CONFIG=[
    'db'=>[
        'HOST'=>'localhost',
        'PORT'=>'3306',
        'NAME'=>'star_island',
        'USER'=>'root',
        'PWD'=>''

    ],
    'app'=>[
        'name'=>'CRUD',
        'projecturl'=>'http://localhost/crud-master2'
    ]

];

const BASE_PATH='/StarIslandMain-master/';

