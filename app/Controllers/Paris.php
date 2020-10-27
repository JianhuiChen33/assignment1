<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 namespace App\Controllers; 
 
    class Paris extends BaseController   
    {       
        public function index()    
        {       
            // connect to the model
             $player = new \App\Models\Player(); 
             // retrieve all the records 
             $records = $player->findAll(); 
             // get a template parser
              $parser = \Config\Services::parser(); 
               // tell it about the substitions 
              return $parser->setData(['records' => $records]) 
                      // and have it render the template with those
                      ->render('playerlist'); 
            }
             public function showme($id)     
             {
                  // connect to the model 
                 $player = new \App\Models\Player();
                  // retrieve all the records 
                  $record = $player->find($id); 
                   // get a template parser 
                   $parser = \Config\Services::parser(); 
                    // tell it about the substitions 
                    return $parser->setData($record) 
                             // and have it render the template with those 
                             ->render('oneplayer'); 
             } 
 
         } 
 
