<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 namespace App\Controllers; 
 class Places extends \CodeIgniter\Controller 
 {
     public function index() 
     {
          // connect to the model 
          $player = new \App\Models\Player(); 
           // retrieve all the records 
           $records = $player->findAll(); 
           // JSON encode and return the result
           return json_encode($records); 
     }
 }