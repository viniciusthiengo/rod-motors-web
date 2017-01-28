<?php

include '../data/Database.php';

class AplMoto
{
    public static function getMotosComoJson(){
        $motos = Database::getMotos( '../data/motos.json' );
        return json_encode( $motos );
    }

    public static function updateFavoritoMoto( Moto $moto ){
        $motos = Database::getMotos( '../data/motos.json' );

        foreach( $motos as $m ){
            if( $m->id == $moto->getId() ){
                $m->ehFavorito = $moto->getEhFavorito();
                Database::saveDatabase( '../data/motos.json', $motos );
                break;
            }
        }
        return json_encode( $moto );
    }
}