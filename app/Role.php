<?php

namespace App;

class Role extends Model
{
    public function staffs()
    {
    	return $this->hasMany(Staff::class);
    }
}