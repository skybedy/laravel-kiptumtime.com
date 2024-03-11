<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\TrackPoint;
use App\Models\Registration;

class Result extends Model
{
    protected $casts = [
        'duplicity_check' => 'array',
    ];

    public function trackPoints()
    {
        return $this->hasMany(TrackPoint::class);
    }

    public function resultsOverallZal($eventId)
    {
        return self::join('registrations', 'results.registration_id', '=', 'registrations.id')
            ->join('users', 'registrations.user_id', '=', 'users.id')
            ->join('categories', 'registrations.category_id', '=', 'categories.id')
            ->selectRaw('results.id,MIN(SUBSTRING(results.finish_time,2)) AS best_finish_time,results.finish_time_sec as best_finish_time_sec,DATE_FORMAT(results.finish_time_date,"%e.%c.") AS date, registrations.id AS registration_id, users.firstname, users.lastname, users.team, users.id AS user_id,categories.name AS category_name,results.pace,COUNT(results.id) AS count')
            ->where('registrations.event_id', $eventId)
            ->groupBy('registrations.id')
            ->orderBy('best_finish_time')
            ->get();
    }


    public function resultsOverall($eventId)
    {
        $sql = "SELECT
        r1.registration_id,
        r1.finish_time_date AS date,
        r1.finish_distance_km,
        r1.pace_km,
        r1.finish_distance_mile,
        r1.pace_mile,
        r1.id,
        r.category_id,
        u.lastname,
        u.firstname,
        u.country,
        c.name AS category_name,
        counts.count
    FROM results r1
    JOIN registrations r ON r1.registration_id = r.id
    JOIN users u ON r.user_id = u.id
    JOIN categories c ON r.category_id = c.id
    JOIN (
        SELECT registration_id, COUNT(*) AS count
        FROM results
        GROUP BY registration_id
    ) counts ON r1.registration_id = counts.registration_id
    WHERE
        r1.finish_distance_km = (
            SELECT MAX(r2.finish_distance_km)
            FROM results r2
            WHERE r1.registration_id = r2.registration_id
        ) AND r.event_id = ?
    ORDER BY finish_distance_km DESC";

      $result = self::hydrate(DB::select($sql, [$eventId]));

      return $result;
    }


    public function resultsIndividual($registrationId)
    {
        return self::selectRaw('id,finish_distance_km,pace_km,finish_distance_mile,pace_mile,results.finish_time_date AS date')
            ->where('registration_id', $registrationId)
            ->orderBy('finish_distance_km','DESC')
            ->skip(1)
            ->take(PHP_INT_MAX)
            ->get();
    }




    public function resultsIndividualTime($registrationId)
    {
        return self::selectRaw('id,SUBSTRING(finish_time,2) AS finish_time,pace,DATE_FORMAT(results.finish_time_date,"%e.%c.") AS date')
            ->where('registration_id', $registrationId)
            ->orderBy('finish_time','ASC')
            ->skip(1)
            ->take(PHP_INT_MAX)
            ->get();
    }


    public function finishTimeOrder($registrationId)
    {
        return self::where(['registration_id' => $registrationId])->first('id') + 1;
    }


    public function getAllUserResults($userId)
    {
        $events = DB::table('events')->select('id','name')->get()->toArray();

        foreach($events as $event){
            $event->results = self::select('results.id', 'results.finish_distance_km','results.finish_distance_mile', 'results.finish_time_date', 'results.pace_km','results.pace_mile','registrations.event_id')
                ->where('registrations.user_id', $userId)
                ->where('registrations.event_id', $event->id)
                ->join('registrations', 'results.registration_id', '=', 'registrations.id')
                ->join('events', 'registrations.event_id', '=', 'events.id')
                ->join('categories', 'registrations.category_id', '=', 'categories.id')
                ->orderBy('results.finish_time_date', 'ASC')
                ->get()->toArray();
        }

        return $events;
    }

    public function deleteResultsAfterDeleteUser($userId)
    {
        $trackpoint = new TrackPoint;
       
        $trackpoint->deleteTrackPointsByUser($userId);
        
        self::where('registrations.user_id', $userId)
            ->join('registrations', 'results.registration_id', '=', 'registrations.id')
            ->delete();

        $registration = new Registration;

        $registration->deleteRegistrationsByUser($userId);
    }
    


}
    





