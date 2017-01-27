<?php

class Database
{
    public static function saveDatabase( $database, $motos ){
        $database = fopen( $database, 'w' );
        fwrite( $database, json_encode($motos) );
        fclose( $database );
    }


    public static function getMotos( $database ){
        $dadosString = file_get_contents( $database );
        $motos = json_decode($dadosString);
        return $motos;
    }
}