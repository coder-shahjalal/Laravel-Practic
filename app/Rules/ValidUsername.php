<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class ValidUsername implements Rule
{
    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, $value): bool
    {
        // Regex: Must start with a letter, can have letters, numbers, underscores, 5-20 chars
        return preg_match('/^[a-zA-Z][a-zA-Z0-9_]{4,19}$/', $value);
    }

    /**
     * Get the validation error message.
     */
    public function message(): string
    {
        return 'The :attribute must start with a letter and can contain only letters, numbers, and underscores (5-20 characters).';
    }
}
