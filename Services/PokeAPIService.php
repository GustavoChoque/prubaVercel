<?php
class PokeApi{
    private $urlBase;
    public function __construct(){

        $this->urlBase = 'https://pokeapi.co/api/v2/';

    }

    public function getPokemonName(int $id){
        $data = json_decode(file_get_contents($this->urlBase.'pokemon/'.$id));
        return $data->name;
    }

    public function getPokemonSprite(int $id){
        $data = json_decode(file_get_contents($this->urlBase.'pokemon/'.$id));
        return $data->sprites->front_default;
    }

}

?>