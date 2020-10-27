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
            'description' => 'Position: GK Country：Costa Rica',
            'image' => '1.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Thiago Silva',
            'description' => 'A special administrative region on the western side of the Pearl River estuary in southern China.',
            'image' => '2.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Marco Verratti',
            'description' => 'A country at the centre of the Southeast Asian Indochinese peninsula composed of 76 provinces.',
            'image' => '3.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Ángel Fabián Di María Hernández',
            'description' => 'An island country in East Asia.',
            'image' => '4.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Kylian Mbappé',
            'description' => 'The easternmost country on the Indochina Peninsula.',
            'image' => '5.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Neymar da Silva Santos Júnior',
            'description' => 'An island country in East Asia.',
            'image' => '6.jpg',
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
