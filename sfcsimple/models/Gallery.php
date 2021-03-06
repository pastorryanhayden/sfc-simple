<?php namespace Sfc\SfcSimple\Models;

use Model;

/**
 * Model
 */
class Gallery extends Model
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
    public $table = 'sfc_sfcsimple_galleries';

    public $attachMany = [
    'gallery' => 'System\Models\File'
    ];

    public $belongsToMany = [

    'ministry' => [

        'Sfc\SfcSimple\Models\Ministry',
        'table' => 'sfc_sfcsimple_ministry_photos',
        'order' => 'name'

    ],
    ];
}