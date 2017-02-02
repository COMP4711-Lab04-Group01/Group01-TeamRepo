<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    /**
     * Show the bottom middle author quote
     */
    function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get(5);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}