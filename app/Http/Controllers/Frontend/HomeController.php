<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a homepage.
     */
    public function index()
    {
        return view('frontend.pages.homepage');
    }

    /**
     * Display users profile.
     */
    public function profile()
    {
        return view('frontend.pages.profile.profile');
    }

    /**
     * Show all event.
     */
    public function events()
    {
        return view('frontend.pages.event.events');
    }

    /**
     * Show selected event.
     */
    public function eventDetails()
    {
        return view('frontend.pages.event.eventDetails');
    }

    /**
     * Show selected event.
     */
    public function eventBook()
    {
        return view('frontend.pages.event.eventBook');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
