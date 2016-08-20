<?php

class Schedule extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'schedule';

    public $timestamps = false;

    /*
	| Get Appliances
    */
    public static function saveToSchedule ($data) {
    	$saved = DB::table('schedule')->insert(
		    ['appliance_id' => $data['appliance'],
		     'when' => $data['datetime'],
		     'action' => $data['switch']]
		);
		if ($saved) return true;

    	return false;
    }
}
?>