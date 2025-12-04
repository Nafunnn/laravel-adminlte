<?php

namespace App\Rules;

use Closure;

use Illuminate\Contracts\Validation\Rule;

class NoAdminWord implements Rule
{
    public function passes($attribute, $value)
    {
        return !str_contains(strtolower($value), 'admin');
    }

    public function message()
    {
        return ':attribute tidak boleh mengandung kata "admin".';
    }
}

