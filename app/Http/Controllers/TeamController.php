<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function viewAllTeams(Request $request){
        $teams = Team::all();
        return view("admin.teams.teams", ["teams"=> $teams]);
    }


    public function addNewTeam(Request $request){

        return view("admin.teams.add_team");
    }


    public function addNewTeamSave(Request $request){
        $picture = null;
        $helper = new  Helper();
        if ($imageFile = $request->file('picture')) {
            $picture = $helper->storeImage($imageFile, 'team');
        }
        $team = new Team([
            "name"=>$request->get("name"),
            "designation"=>$request->get("designation"),
            "image"=>$picture,
            "content"=>$request->get("content"),
        ]);
        $team->save();
        return redirect()->route("view_all_teams")->with("success", "Team member added successfully");
    }

    public function editTeam(Request $request, $id){
        $team = Team::where(["id"=>$id])->first();
        return view("admin.teams.edit_team", ["team"=> $team]);
    }

    public function editTeamSave(Request $request, $id){
        $picture = null;
        $helper = new  Helper();
        if ($imageFile = $request->file('picture')) {
            $picture = $helper->storeImage($imageFile, 'team');
        }
        $team = Team::where(["id"=>$id])->first();
        $team->name = $request->get("name");
        $team->designation = $request->get("designation");
        if($picture !=null){
            $team->image = $picture;
        }

        $team->content = $request->get("content");

        $team->save();
        return redirect()->route("view_all_teams")->with("success", "Team member updated successfully");
    }
}
