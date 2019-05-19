<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
use Illuminate\Http\Request;
use App\Game;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameRequest $request)
    {
        $game = new Game();
        $game->name = $request->name;
        $game->description = $request->description;
        $game->publisher_id = $request->user()->id;
        $game->year = $request->year;

        if($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $poster_name = 'poster_'.$poster->getClientOriginalExtension();
            $poster->move('posters', $poster_name);
            $game->poster = 'posters/'.$poster_name;
        }else {
            $game->poster = '...';
        }

        $game->save();

//        Session::flash('key', 'value');
        Session::flash('message', 'Игра '.$game->name.' успешно добавлена!');
        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
