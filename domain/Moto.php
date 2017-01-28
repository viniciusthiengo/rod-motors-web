<?php

class Moto
{
    public $id;
    public $modelo;
    public $marca;
    public $imagem;
    public $ehFavorito;


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    public function getEhFavorito()
    {
        return $this->ehFavorito;
    }
    public function setEhFavorito($ehFavorito)
    {
        if( $ehFavorito === 'true' || $ehFavorito === true || $ehFavorito === 1 ){
            $this->ehFavorito = true;
        }
        else{
            $this->ehFavorito = false;
        }
    }
}