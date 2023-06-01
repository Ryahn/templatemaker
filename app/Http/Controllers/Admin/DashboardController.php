<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tags;
use App\Models\Software;
use App\Models\Template;
use App\Models\Languages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Datatables;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = json_decode(Http::get(env('APP_URL').'/api/logs')->body(), true);
            return Datatables::of($data)
            // ->addIndexColumn()
                // ->addColumn('action', function($row){
                //     $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                //     return $btn;
                // })
                // ->rawColumns(['action'])
                ->make(true);
        }

        $template = Template::all()->count();
        $tags = Tags::all()->count();
        $software = Software::all()->count();
        $lang = Languages::all()->count();
        return view('admin.index', compact('template', 'tags', 'software', 'lang'));
    }
}
