<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pricing_models';

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
    protected $fillable = ['name', 'description'];

    public function PricingRates()
    {
        # code...
    }
}
