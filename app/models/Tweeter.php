<?php


class Tweeter extends Eloquent
{
  protected $table = 'tweeter';

  public $validation_messages = array(
    'handle'	=> "You need to enter a handle"
  );

  public $inputRules = array(
    'handle' => 'required'
  );

  public function group()
  {
    return $this->belongsTo('Group');
  }

  public function createFromInput()
  {
    $this->handle = Input::get('handle');
    $this->twitter_id = Input::get('twitterid');
    $this->group_id = Input::get('groupid');
    return $this->save();
  }
}
