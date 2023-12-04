<?php

namespace App\Repositories;

use App\Interfaces\EventsInterface;
use App\Models\Events;

class EventsRepository implements EventsInterface
{
    public function getEvents()
    {
        // TODO: Implement getSuccessStories() method.
        return Events::all();
    }

    public function addEvents($title,$date,$start_time,$end_time,$image,$type,$description)
    {
        // TODO: Implement addSuccessStories() method.
        $event = new Events([
        "title"=>$title,
         "date"=>$date,
         "start_time"=>$start_time,
         "end_time"=>$end_time,
         "image"=>$image,
         "type"=>$type,
         "description"=>$description
        ]);
        $event->save();
        return $event;
    }
    public function getEvent($id)
    {
        // TODO: Implement editSuccessStory() method.
        return Events::where(["id"=>$id])->first();
    }

    public function updateEvent($id, $title,$date,$start_time,$end_time,$type,$description,$image=null)
    {
        // TODO: Implement updateSuccessStory() method.
        $event = Events::where(["id"=>$id])->first();
        $event->title=$title;
        $event->date=$date;
        $event->start_time=$start_time;
        $event->end_time=$end_time;
        if($image!=null)
        {
            $event->image=$image;
        }
        $event->type=$type;
        $event->description=$description;

        $event->save();

        return $event;
    }

    public function deleteEvent($id)
    {
        // TODO: Implement deleteSuccessStory() method.
        return Events::where(["id"=>$id])->delete();
    }

}
