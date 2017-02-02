<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hogwarts extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

	/**
	 * Show the top middle author quote
	 */
	public function shucks()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';
 
		// build the middle top authors, to pass on to our view
                $record = $this->quotes->topMiddle();
                $this->data = array_merge($this->data, $record);
		$this->render();
	}

	/**
     * Show a random quote for invalid URL
     */
    public function random()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array ();
        //get random record
        $count = count($source);
        $index = rand(0, $count-1);
        $record = $source[$index];
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}
