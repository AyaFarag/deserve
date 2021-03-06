<?php

namespace App\Http\Controllers;

use App\Models\Partition;
use Illuminate\Http\Request;

class PartitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partitions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partition  $partition
     * @return \Illuminate\Http\Response
     */
    public function show(Partition $partition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partition  $partition
     * @return \Illuminate\Http\Response
     */
    public function edit(Partition $partition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partition  $partition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partition $partition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partition  $partition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partition $partition)
    {
        //
    }
}
