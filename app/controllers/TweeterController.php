<?php

class TweeterController extends BaseController {

  /**
  * The layout that should be used for responses.
  */
  protected $layout = 'layouts.master';

  public function postCreate()
  {
    if(!Confide::user())
    {
      return Redirect::to("users/login");
    }

    $data = Input::all();
    $tweeter = new Tweeter();
    $group = Group::whereId(Input::get("groupid"))->first();
    $validator = Validator::make($data, $tweeter->inputRules, $tweeter->validation_messages);

    if ($validator->passes())
    {
      $tweeter->createFromInput();
    }
    else
    {
      $this->layout->content = View::make('groups.view')
      ->with('group',$group)
      ->withErrors($validator);
    }

    if($tweeter)
    {
      $tweeters = Tweeter::where("group_id", $group->id)->get();
      //return $this->getTwitterId("jonathangizmo");
      $this->layout->content = View::make('groups.view')->with('success','Group Created')->with('tweeters',$tweeters)->with('group',$group);
    }
    else
    {
      $tweeters = Tweeter::where("group_id", $group->id)->get();
      $this->layout->content = View::make('groups.view')->with('error','Unable to create group. Group name might already exist.')->with('tweeters',$tweeters)->with('group',$group);
    }
  }

  private function getTwitterId($screenname)
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://twitter.com/".$screenname);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    preg_match_all("/[data]+-[user]+-[id]+[=]+[\"]+[0-9]+[\"]+[\s]+[data]+-[screen]+-[name]+[=]/", $output, $match);
    return $match[0];
  }

}
