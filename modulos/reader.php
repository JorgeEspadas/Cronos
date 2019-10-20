<?php
class reader{
    public $json_obj;
    
    function readJSON($path){
        $json_obj = file_get_contents($path);
        return json_decode($json_obj, true);        
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

