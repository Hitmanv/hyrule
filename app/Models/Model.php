<?php
/**
 * Author: hitman
 * Date: 27/6/2016
 * Time: 2:50 PM
 */

use App\Traits\ModelTrait;

class Model extends \Illuminate\Database\Eloquent\Model
{
    use ModelTrait;

    protected $rules = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function save(array $options = [])
    {
        $this->validate();

        return parent::save($options);
    }

    public function validate()
    {
        $validator = Validator::make($this->attributes, $this->rules);

        if ($validator->fails()) {
            $error = collect($validator->errors())->first()[0];
        }
    }
}

