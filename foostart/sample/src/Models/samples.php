<?php

namespace Foostart\sample\Models;

use Illuminate\Database\Eloquent\Model;

class samples extends Model {
    protected $table = 'sample';
    protected $primaryKey = 'sample_id';
    public $timestamps = false;
    public $filltable = [
    "sample_name"];
    
    public function  getData(){
        return self::all();
    }
}
