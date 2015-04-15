<?php


class Hashtag extends Eloquent
{
  protected $table = 'hashtags';

  public function tweeter()
  {
    return $this->belongsTo('Tweeter', 'twitter_id', 'twitter_id');
  }

}
