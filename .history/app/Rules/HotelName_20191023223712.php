<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class HotelName implements Rule
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
        $skipped_arr = array("Free", "Offer", "Book", "Website");
        foreach ($skipped_arr as $skip) {
            if (strpos($value, $skip) !== FALSE) { // Yoshi version
                return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Hotel name is invalid.';
    }
}
