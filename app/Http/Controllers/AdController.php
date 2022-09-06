<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAd;
use App\Models\Ad;
use Illuminate\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Int_;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $ads = Ad::all();
        return view('ads.list', ['ads' => $ads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateAd $request)
    {
        $data = new Ad();

        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;

        $data->save();

        return redirect()
            ->route('ads.index')
            ->with('status', 'Ogłoszenie dodane');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id): View
    {
        $ad = Ad::find($id)->first();
        return view('ads.show', ['id' => $id, 'ad' => $ad]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $ad = Ad::find($id)->first();
        return view('ads.edit', ['id' => $id, 'ad' => $ad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd $request, int $id)
    {
        $ad = Ad::find($id);

        $ad->name = $request->name;
        $ad->description = $request->description;
        $ad->price = $request->price;

        $ad->save();

        return redirect()
            ->route('ads.show', $id)
            ->with('status', 'Ogłoszenie zaktualizowane');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Ad::find($id)->delete();

        return back();
    }
}
