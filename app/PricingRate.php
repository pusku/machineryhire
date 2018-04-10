<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingRate extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pricing_rates';

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
    protected $fillable = ['name', 'pricing_models_id'];

    public function PricingModel()
    {
        return $this->belongsTo(\App\PricingModel::class,'pricing_models_id','id');

    }
}
