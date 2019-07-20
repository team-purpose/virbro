<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Asset;
use App\Http\Resources\Asset as AssetResource;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all assets
        $assets = Asset::paginate(15);
        // Return collection of assets as a resource
        return AssetResource::collection($assets);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asset = $request->isMethod('put') ? Asset::findOrFail($request->asset_id) : new Asset;

        $asset->name = $request->input('name');
        $asset->category = $request->input('category');
        $asset->value = $request->input('value');
        $asset->premium = $request->input('premium');
        $asset->insured = $request->input('insured');

        if ($asset->save()) {
            return new AssetResource($asset);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get single asset
        $asset = Asset::findOrFail($id);
        // Return asset as resource
        return new AssetResource($asset);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get single asset
        $asset = Asset::findOrFail($id);
        
        if($asset->delete()) {
            return new AssetResource($asset);
        }
    }
}
