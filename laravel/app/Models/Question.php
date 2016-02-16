<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question', 'type', 'role', 'options', 'required'];

    // Helper function to generate arrays for dropdowns from saved options 
    public function dropdown()
    {
        $options = explode("\n", $this->options);
        $output = [];

        foreach($options as $option)
        {
            list($value, $text) = explode(":", $option, 2);
            $output[trim($value)] = trim($text);
        }

        return $output;
    }
}
