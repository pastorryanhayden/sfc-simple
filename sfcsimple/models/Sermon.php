<?php namespace Sfc\SfcSimple\Models;

use Model;

/**
 * Model
 */
class Sermon extends Model
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
    public $table = 'sfc_sfcsimple_sermons';

    /* Relations */

    public $belongsToMany = [

    'series' => [

        'Sfc\SfcSimple\Models\Series',
        'table' => 'sfc_sfcsimple_sermons_series',
        'order' => 'name'

    ],
    'speaker' => [

        'Sfc\SfcSimple\Models\Speaker',
        'table' => 'sfc_sfcsimple_sermons_speakers',
        'order' => 'name'

    ]

    ];

    public $attachOne = [
    'handout' => 'System\Models\File',
    'slides' => 'System\Models\File',
    'mp3' => 'System\Models\File',
    ];



}