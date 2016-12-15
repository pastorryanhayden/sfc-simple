<?php namespace Sfc\SfcSimple\Models;

use Model;

/**
 * Model
 */
class Series extends Model
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
    public $table = 'sfc_sfcsimple_series';

    public $attachOne = [
    'featured_image' => 'System\Models\File'
    ];

    public $belongsToMany = [

    'sermons' => [

        'Sfc\SfcSimple\Models\Sermon',
        'table' => 'sfc_sfcsimple_sermons_series',
        'order' => 'title'

    ]
    ];
}