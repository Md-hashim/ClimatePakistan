<?php

namespace App\Http\Controllers;


use App\Models\Events;
use App\Interfaces\EventsInterface;
use App\Repositories\EventsRepository;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Helpers\Helper;

class EventsController extends Controller
{
    private EventsRepository $eventsRepository;
    private EventsInterface $eventsInterface;

    /**
     * @param EventsRepository $eventsRepository
     * @param EventsInterface $eventsInterface
     */
    public function __construct(EventsRepository $eventsRepository, EventsInterface $eventsInterface)
    {
        $this->eventsRepository = $eventsRepository;
        $this->eventsInterface = $eventsInterface;
    }


    public function viewEvents(Request $request)
    {
        $events = $this->eventsRepository->getEvents();
        return view("admin.events.view_events",['events'=>$events]);
    }
    public function addEvents(Request $request)
    {
        return view("admin.events.add_events");
    }

    public function submitEvent(Request $request)
    {
        try
        {
            $title=$request->get('title');
            $date=$request->get('date');
            $start_time=$request->get('start_time');
            $end_time=$request->get('end_time');
            $image=$request->get('image');
            $type=$request->get('type');

            $description=$request->get('description');
            if($image = $request->file('image'))
            {

                $helper = new Helper();
                $image = $helper->storeImage($image,"Events");
            }
            $this->eventsRepository->addEvents(title:$title,date: $date,start_time: $start_time,end_time: $end_time,image: $image,type: $type,description: $description);
            return redirect()->route("view_events")->with("success", "Event added successfully!");
        }
        catch(Exception $exception)
        {

            Log::error($exception);
            return redirect()->route("view_events")->with("error", "Something went wrong! Contact support");
        }
    }

    public function editEvent($id)
    {
        $event = $this->eventsRepository->getEvent($id);
        return view('admin.events.edit_events',['event'=>$event]);

    }

    public function updateEvent(Request $request)
    {

        try
        {
            $id = $request->get('id');

            $title=$request->get('title');
            $date=$request->get('date');
            $start_time=$request->get('start_time');
            $end_time=$request->get('end_time');
            $image=$request->get('image');
            $type=$request->get('type');

            $description=$request->get('description');
            if($image = $request->file('image'))
            {
                $helper = new Helper();
                $image = $helper->storeImage($image,"Events");
            }
            $this->eventsRepository->updateEvent(id:$id,title:$title,date: $date,start_time: $start_time,end_time: $end_time,image: $image,type: $type,description: $description);
            return redirect()->route("view_events")->with("success", "Event updated successfully!");
        }
        catch(Exception $exception)
        {
            dd($exception);
            Log::error($exception);
            return redirect()->route("view_events")->with("error", "Something went wrong! Contact support");
        }
    }


    public function deleteEvent($id)
    {
        try {
            $this->eventsRepository->deleteEvent($id);
            return redirect()->route("view_events")->with("success", "Success Story deleted  successfully!");
        }
        catch (Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_events")->with("error", "Something went wrong! Contact support");
        }
    }

    public function eventsCount()
    {
        $totalEvents = Events::count();
        $activeEvents = Events::where('start_time', '<=', now())
            ->where('end_time', '>=', now())
            ->count();
        $expiredEvents = Events::where('end_time', '<', now())->count();
        $upcomingEventsCount = Events::where('start_time', '>', now())->count();

        return response()->json([
            'totalEvents' => $totalEvents,
            'activeEvents' => $activeEvents,
            'expiredEvents' => $expiredEvents,
            'upcomingEventsCount' => $upcomingEventsCount,
        ]);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');

        // Assuming you have a model named "Event"
        $event = Events::find($id);
        if($event) {
            $event->is_active = $status;
            $event->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }
}
