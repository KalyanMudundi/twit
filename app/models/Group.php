<?php


class Group extends Eloquent
{
  protected $table = 'groups';

  public $validation_messages = array(
    'name'	=> "You need to enter a name",
    'description'			=> 'You need to enter a decription',
  );

  public $inputRules = array(
    'name' => 'required',
    'description' => 'required',
  );

  public function user()
  {
    return $this->belongsTo('User');
  }

  public function createFromInput()
  {
    $this->name = Input::get('name');
    $this->description = Input::get('description','');
    $this->user_id = Confide::user()->id;
    return $this->save();
  }
}
