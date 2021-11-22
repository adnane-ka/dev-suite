<?php

namespace App\Http\Controllers\Api;

use App\Models\Sample;
use Illuminate\Http\Request;
use App\Http\Requests\SampleRequest;
use App\Http\Controllers\ApiController;

class SampleController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return self::showGroup(Sample::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SampleRequest  $request
     * @return \Illuminate\Http\Response
    */
    public function store(SampleRequest $request)
    {
        $sample = Sample::create($request->validated());

        return self::showOne($sample ,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Sample $sample
     * @return \Illuminate\Http\Response
    */
    public function show(Sample $sample)
    {
        return self::showOne($sample);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SampleRequest  $request
     * @param  App\Models\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function update(SampleRequest $request, Sample $sample)
    {
        $data = $request->validated();

        return self::showOne($sample->update($data));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sample $sample)
    {
        return $sample->delete();
    }
}
