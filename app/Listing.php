<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'listings';

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
    protected $fillable = ['item_name', 'item_picture', 'item_description', 'category_id', 'pricing_rate_id', 'hiring_cost', 'hiring_cost_with_expert', 'item_location', 'available_quantity', 'item_contact', 'supplier_id'];
    public function Category()
    {
        return $this->belongsTo(\App\Category::class,'category_id','id');
    }
    public function PricingRate()
    {
        return $this->belongsTo(\App\PricingRate::class,'pricing_rate_id','id');
    }
    public function Supplier()
    {
        return $this->belongsTo(\App\User::class,'supplier_id','id');
    }
}
