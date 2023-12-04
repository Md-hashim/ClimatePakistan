<?php

namespace App\Interfaces;

interface EventsInterface
{

    public function getEvents();
    public function addEvents($title,$date,$start_time,$end_time,$image,$type,$description);

    public function getEvent($id);

    public function updateEvent($id,$title,$date,$start_time,$end_time,$type,$description,$image=null);

    public function deleteEvent($id);


}
