<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Player {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Keylor Navas',
            'height'=>'185 cm',
            'weight'=>'80 kg',
            'Position'=>'GK',
            'Age'=>'34',
            'Country' => 'Costa Rica',
            'image' => '1.jpg',
            'Played for the team'=>'Real Madrid',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Thiago Silva',
            'height'=>'183 cm',
            'weight'=>'79 kg',
            'Position'=>'CB',
            'Age'=>'36',
            'Country' => 'Brazil',
            'image' => '2.jpg',
            'Played for the team'=>'Chelsea',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Marco Verratti',
            'height'=>'165 cm',
            'weight'=>'60 kg',
            'Position'=>'CMF',
            'Age'=>'28',
            'Country' => 'Italy',
            'image' => '3.jpg',
            'Played for the team'=>'Pescara',
        ],
        '11' => [
            'id' => 11,
            'name' => 'Ángel Fabián Di María Hernández',
            'height'=>'178 cm',
            'weight'=>'70 kg',
            'Position'=>'LWM',
            'Age'=>'32',
            'Country' => 'Argentina',
            'image' => '4.jpg',
            'Played for the team'=>'Real Madrid',
        ],
        '7' => [
            'id' => 7,
            'name' => 'Kylian Mbappé',
            'height'=>'178 cm',
            'weight'=>'73 kg',
            'Position'=>'ST',
            'Age'=>'22',
            'Country' => 'France',
            'image' => '5.jpg',
            'Played for the team'=>'Monaco',
        ],
        '10' => [
            'id' => 10,
            'name' => 'Neymar da Silva Santos Júnior',
            'height'=>'175 cm',
            'weight'=>'68 kg',
            'Position'=>'ST',
            'Age'=>'28',
            'Country' => 'Brazil',
            'image' => '6.jpg',
            'Played for the team'=>'Barcelona',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
