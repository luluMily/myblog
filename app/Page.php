<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

  public function hasManyComments()
  {
    return $this->hasMany('App\Comment', 'page_id', 'id');
  }

<<<<<<< HEAD
}
=======
}
>>>>>>> cdd12dff195457bd30766f6c16d0cb8a174686df
