<?php

namespace Rap2hpoutre\UuidRule;

use Illuminate\Contracts\Validation\Rule;
use Ramsey\Uuid\Uuid;

class UuidRule implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Uuid::isValid($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.uuid-rule') != 'validation.uuid-rule' ? trans('validation.uuid-rule') : 'The :attribute must be a UUID.';
    }
}
