<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class categoryName implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $passed_arr = array('hotel', 'alternative', 'hostel', 'lodge', 'resort', 'guest-house');
  
            if (in_array($value, $passed_arr)) { 
                return true;
            }
         
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
