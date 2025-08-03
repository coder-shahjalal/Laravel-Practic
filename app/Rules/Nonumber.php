<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Nonumber implements ValidationRule
{


     public function passes($attribute, $value)
    {
        // যদি সংখ্যা থাকে return false
        return !preg_match('/\d/', $value);
    }

    public function message()
    {
        return 'The :attribute should not contain numbers.';
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
}