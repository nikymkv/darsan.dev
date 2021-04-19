<?php namespace Itd\Admin\Models;

use Model;

/**
 * Model
 */
class Feedback extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'itd_admin_feedback';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
