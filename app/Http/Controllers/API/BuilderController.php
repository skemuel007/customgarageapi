<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bike;
use App\Models\Builder;
use Illuminate\Http\Request;

class BuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listBuilder = Builder::paginate();
        return response()->json([
            'result' => $listBuilder,
            'status' => true,
            'message' => 'Data retrieved'
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createBuilder = Builder::create($request->all());
        return response()->json([
            'status' => true,
            'result' => $createBuilder,
            'message' => 'Builder created sucessfully'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $showBuilderById = Builder::with('Bike')->findOrFail($id);
        return response()->json([
            'status' => $showBuilderById ? true : false,
            'result' => $showBuilderById
        ], $showBuilderById ? 200 : 404);
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
        $builder = Builder::findOrFail($id);
        $builder->update($request->all());
        return response()->json([
            'status' => true,
            'result' => $$builder,
            'message' => 'Builder updated sucessfully'
        ], 200);
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
        $deleteBikeById = Bike::find($id)->delete();
        return response()->json([], 204);
    }
}
