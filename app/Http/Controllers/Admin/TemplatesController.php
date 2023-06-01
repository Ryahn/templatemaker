<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Template::select('id',  'type', 'game_name', 'devName', 'version')->get();
            return Datatables::of($data)
            ->addIndexColumn()
                ->addColumn('action', function($row){
                    $view = '<a href="#" id="templateView" class="btn btn-primary btn-sm" style="margin-right: 5px;" data-id="'. $row->id.'">View</a>';
                    $edit = '<a href="#" id="templateEdit" class="btn btn-warning btn-sm" style="margin-right: 5px;" data-id="'. $row->id.'">Edit</a>';
                    $delete = '<a href="#" id="templateDelete" class="btn btn-danger btn-sm" style="margin-right: 5px;" data-id="'. $row->id.'">Delete</a>';
                    return $view . $edit . $delete;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.template.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        //
    }
}
