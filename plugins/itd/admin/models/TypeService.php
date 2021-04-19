<?php namespace Itd\Admin\Models;

use Model;

/**
 * Model
 */
class TypeService extends Model
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
    public $table = 'itd_admin_type_service';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'service' => [
            'Itd\Admin\Models\Service',
            'key' => 'type_service_id',
            'otherKey' => 'id',
        ],
        'portfolio' => [
            'Itd\Admin\Models\Portfolio',
            'key' => 'type_service_id',
            'otherKey' => 'id',
        ],
    ];
}
