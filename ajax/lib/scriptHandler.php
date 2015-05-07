<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class scriptHandler{
    private $array = array();
    private $json;
    
    public function __construct($post){
        $json = new stdClass();
        $json->error = false;
        $request = array();
        foreach ($post as $element) {
            if (!isset($_REQUEST[$element])) {
                $json->error = true;
                break;
            }
            $request[$element] = $_REQUEST[$element];
        }
        $this->array = (object)$request;
        $this->json = $json;
    }
    
    public function getRequest(){
        return $this->array;
    }
    
    public function getJson(){
        return $this->json;
    }
    
    public function isLoaded(){
        return !$this->json->error;
    }
}