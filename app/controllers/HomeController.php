<?php

class HomeController extends BaseController {

	/**
	* The layout that should be used for responses.
	*/
	protected $layout = 'layouts.master';

	public function getIndex()
	{
		$this->layout->content = View::make('hello');
	}

}
