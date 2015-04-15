<?php

class GroupsController extends BaseController {

  /**
  * The layout that should be used for responses.
  */
  protected $layout = 'layouts.master';

  public function getCreate()
  {
    if(!Confide::user())
    {
      return Redirect::to("users/login");
    }

    $this->layout->content = View::make('groups.create');
  }

  public function postCreate()
  {
    if(!Confide::user())
    {
      return Redirect::to("users/login");
    }

    $data = Input::all();
    $group = new Group();
    $validator = Validator::make($data, $group->inputRules, $group->validation_messages);

    if ($validator->passes())
    {
      $group->createFromInput();
    }
    else
    {
      $this->layout->content = View::make('groups.create')
      ->withErrors($validator);
    }

    if($group)
    {
      $groups = Group::where('user_id',Confide::user()->id)->get();
      $this->layout->content = View::make('groups.list')->with('groups',$groups)->with('success','Group Created');
    }
    else
    {
      $this->layout->content = View::make('groups.create')->with('error','Unable to create group. Group name might already exist.');;
    }
  }

  public function getGroup($id)
  {
    if(!Confide::user())
    {
      return Redirect::to("users/login");
    }

    $group = Group::whereId($id)->first();

    $tweeters = Tweeter::where("group_id", $group->id)->get();

    $this->layout->content = View::make('groups.view')->with('group',$group)->with('tweeters',$tweeters);
  }

  public function getList()
  {
    if(!Confide::user())
    {
      return Redirect::to("users/login");
    }

    $groups = Group::where('user_id',Confide::user()->id)->get();

    $this->layout->content = View::make('groups.list')->with('groups',$groups);
  }

  public function getAnalytics($id)
  {
    if(!Confide::user())
    {
      return Redirect::to("users/login");
    }

    $hashtags = Hashtag::whereIn('twitter_id', DB::table('tweeter')->where('group_id', $id)->lists('twitter_id'))->orderBy('count','Desc')->take(10)->get();

    $group = Group::where('id',$id)->first();

    $this->layout->content = View::make('groups.analytics')->with('group',$group)->with('hashtags',$hashtags);
  }

}
