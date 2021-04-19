<?php namespace Itd\Admin\Models;

use Model;

/**
 * Model
 */
class Portfolio extends Model
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
    public $table = 'itd_admin_portfolio';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'typeService' => [
            'Itd\Admin\Models\TypeService',
            'key' => 'type_service_id',
            'otherKey' => 'id',
        ],
    ];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];
}
