<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('events.index', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function update(){
        
    }
    
    public function delete($id=null){
        return view('events.delete', ['id' => $id]);
    }
    
    public function show($id=null){
        
        $event = Event::findorfail($id);
        return view('events.update', ['event' => $event]);
        
    }
    public function store(Request $request){
        $event = new Event();

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        
        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}
