<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code', 'name', 'unit_price', 'description'];
    private $rules = [
        'code' => 'required|max:10',
        'name' => 'required|max:255',
        'unit_price' =>'required|integer',
        'description' => 'max:1000',
    ];
    private $errors;

    public function validate(array $params)
    {
        $validator = \Validator::make($params, $this->rules);

        if($validator->fails())
        {
            $this->errors = $validator->errors();
            return false;
        }
        return true;
    }

    public function errors()
    {
        return $this->errors;
    }
}
