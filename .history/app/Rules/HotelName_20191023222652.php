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
        $string = 'my domain name is website3.com';
        foreach ($owned_urls as $url) {
            //if (strstr($string, $url)) { // mine version
            if (strpos($string, $url) !== FALSE) { // Yoshi version
                echo "Match found"; 
                return true;
            }
        }
        echo "Not found!";
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
