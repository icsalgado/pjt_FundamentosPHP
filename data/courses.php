<?php

/**
 * Retorna um array de objetos 
 */

function getCourses(){
    return[ 
        "PHP" => [
            "nome_curso" => "PHPfundamentos", 
            "versao" => 7.4, 
            "carga_horaria" => 40, 
            "status" => true
        ],
        "Java" => [
            "nome_curso" => "Javafundamentos", 
            "versao" => 6, 
            "carga_horaria" => 40, 
            "status" => true
        ],
        "JavaScript" => [
            "nome_curso" => "JavaSciptfundamentos", 
            "versao" => 6, 
            "carga_horaria" => 40, 
            "status" => false
        ],
    ];
}