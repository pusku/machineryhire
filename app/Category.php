<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'parent'];
    public function Parent()
    {
        return $this->belongsTo(\App\Category::class,'parent','id');
    
    }
    public function Children()
    {
        return $this->hasMany(\App\Category::class,'parent','id');
    
    }
}
