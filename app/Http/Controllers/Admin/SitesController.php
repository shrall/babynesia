<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::all();
        return view('admin.site.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.site.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Site::create([
            'code' => $request->title,
            'isi' => $request->content,
            'urutan' => $request->order
        ]);
        return redirect()->route('adminpage.site.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        return view('admin.site.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        if ($site->editable == 'yes') {
            $site->update([
                'code' => $request->title,
                'isi' => $request->content,
                'urutan' => $request->order
            ]);
        }
        return redirect()->route('adminpage.site.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        if ($site->editable == 'yes') {
            $site->delete();
        }
        return redirect()->route('adminpage.site.index');
    }
    public function upload_photo(Request $request)
    {
        if ($request->has('upload')) {
            $upload = 'site-' . time() . '-' . $request['upload']->getClientOriginalName();
            $request->upload->move(public_path('uploads'), $upload);
        } else {
            $upload = null;
        }
        return response()->json([
            "uploaded" => true,
            'url' => config('app.url')  . '/uploads/' .  $upload,
        ]);
    }
}
