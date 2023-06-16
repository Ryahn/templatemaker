<?php

namespace App\Http\Controllers\Api;

use App\Models\BBCode;
use App\Models\Template;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class DatabaseTableController extends Controller
{
    public function recentIndex()
    {
        $data = Template::select('id', 'type', 'game_name', 'devName', 'version')->orderBy('id', 'DESC')->get();
            return Datatables::of($data)
            ->addIndexColumn()
                ->addColumn('action', function($row){
                    $edit = '<button id="edit" class="btn btn-primary btn-sm" style="margin-right: 5px;" data-id="'. $row->id.'">Edit</button>';
                    $view = '<button id="bbcode" class="btn btn-warning btn-sm" style="margin-right: 5px;" data-id="'. $row->id.'">BBCode</button>';
                    return $edit . $view;
                })
                ->rawColumns(['action'])
                ->make(true);
    }

    public function viewBBCode(string $id)
    {
        $template = Template::findOrFail($id);
        $returnHTML = view('template.modals.bbcode', ['template' => $template])->render();
        return response()->json(['msg' => 'OK', 'status' => 200, 'html' => $returnHTML, 'template' => $template]);
    }

    public function saveBBCode(Request $request)
    {
        $inputs = $request->except(['/api/table/view/bbcode/save']);
        BBCode::updateOrCreate(
            ['template_id' => $inputs['id']],
            ['bbcode' => $inputs['bbcode']]
        );
        return response()->json(['msg' => 'bbcode update successfully']);
    }
}
