<?php namespace Sfc\SfcSimple\Models;

use Model;

/**
 * Model
 */
class Infopage extends Model
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
    public $table = 'sfc_sfcsimple_infopage';

    public $attachOne = [
    'featured_image' => 'System\Models\File'
    ];
}