<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hogwarts extends Application {
    
    function __construct() 
    {
        parent::__construct();
    }
    
    public function index()
    {
        
        // loads justone
        $this->data['pagebody'] = 'justone';
        
        // gets last quote
        $record = $this->quotes->last();
        
        // merge the records to data array
        $this->data = array_merge($this->data, $record);
        
        $this->render();
    }
}