<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogueController extends Controller
{
    const PATH_VIEW = 'admin.catalogues.';

    const PATH_UPLOAD= 'catalogues';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Catalogue::query()->latest('id')->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('cover'); //Nghĩa là tôi lấy tất cả input đầu vào ngoại trừ trường cover
        //Cách 1:
        // $data['is_active'] = $data['is_active'] ?? 0;
        $data['is_active'] ??= 0;
        //Cách 2:
        // $data['is_active'] = $request->input('is_active', 0);
        
        // dd($data);
        // $data = request()->all();
        // unset($data['cover']);

        //upload file

        // dd($request->hasFile('cover'));
        if($request->hasFile('cover')) {
            $data['cover'] = Storage::put(self::PATH_UPLOAD,$request->file('cover'));
        }
        
        // DB::table('catalogues')->insert($data);

        // dd($data);
        Catalogue::query()->create($data);
        return redirect()->route(self::PATH_VIEW . 'index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Catalogue::query()->findOrFail($id);

        // if(!$model) {
        //     abort(404);
        // }

        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Catalogue::query()->findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Catalogue::query()->findOrFail($id);
        // dd($model->cover);
        $data = $request->except('cover'); //Nghĩa là tôi lấy tất cả input đầu vào ngoại trừ trường cover
        $data['is_active'] ??= 0;
        
        if($request->hasFile('cover')) {
            $data['cover'] = Storage::put(self::PATH_UPLOAD,$request->file('cover'));
        } 
        // dd($data);

        $currentCover = $model->cover;

        $model->update($data);

        if($currentCover && Storage::exists($currentCover) && $request->hasFile('cover')) {
            Storage::delete($currentCover);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Catalogue::query()->findOrFail($id);
        $model->delete();
        if($model->cover && Storage::exists($model->cover)) {
            Storage::delete($model->cover);
        }
    }
}
