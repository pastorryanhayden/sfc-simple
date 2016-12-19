<?php namespace Sfc\SfcSimple\Models;

use Model;

/**
 * Model
 */
class Ministry extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sfc_sfcsimple_ministries';

    public $belongsToMany = [

    'leader' => [

        'Sfc\SfcSimple\Models\Mleader',
        'table' => 'sfc_sfcsimple_ministries_mleaders',
        'order' => 'name'

    ],
    'events' => [

        'Sfc\SfcSimple\Models\Event',
        'table' => 'sfc_sfcsimple_ministries_events',
        'order' => 'date'

    ],
    'photos' => [

        'Sfc\SfcSimple\Models\Gallery',
        'table' => 'sfc_sfcsimple_ministry_photos',
        'order' => 'date'

    ],
    ];

    public $attachOne = [
    'header_image' => 'System\Models\File',
    'logo' => 'System\Models\File',
    ];

}