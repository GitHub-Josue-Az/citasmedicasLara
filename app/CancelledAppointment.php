<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class CancelledAppointment extends Model
{

	protected $table = 'cancelled_appointments';

    public function cancelled_by() // cancelled_by_id
    {	// belongsTo Cancellation N - 1 User hasMany
    	return $this->belongsTo(User::class);
    }
}
