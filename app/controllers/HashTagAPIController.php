<?php

class HashTagAPIController extends BaseController
{


  public function getCreate()
  {
    $hashtag = Hashtag::where('hashtag', Input::get("hashtag"))->where('twitter_id', Input::get("twitterid"));

    if($hashtag->get()->count() == 0)
    {
      $hashtag =  new Hashtag();
      $hashtag->hashtag = Input::get("hashtag");
      $hashtag->twitter_id = Input::get("twitterid");
      $hashtag->count = 1;
      $hashtag->save();
    }
    else
    {
      $hashtag = $hashtag->first();
      $hashtag->count = $hashtag->count+1;
      $hashtag->save();
    }

  }

}
