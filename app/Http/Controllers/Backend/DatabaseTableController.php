<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tags;
use App\Models\BBCode;
use App\Models\Software;
use App\Models\Template;
use App\Models\Languages;
use App\Models\OsSystems;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class DatabaseTableController extends Controller
{

    protected $tags, $sexual, $assets, $nonsexual, $technical, $languages, $os, $unreal, $blender, $none;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $t = Tags::all();
        $this->tags = $t->filter(function ($tag) {
            return $tag->optgroup == 'sexual';
        })->values();

        $this->sexual = $t->filter(function ($tag) {
            return $tag->optgroup == 'sexual';
        })->values();
        
        $this->assets = $t->filter(function ($tag) {
            return $tag->optgroup == 'assets';
        })->values();
        
        $this->nonsexual = $t->filter(function ($tag) {
            return $tag->optgroup == 'nonsexual';
        })->values();
        
        $this->technical = $t->filter(function ($tag) {
            return $tag->optgroup == 'technical';
        })->values();
        
        $this->languages = Languages::all();
        
        $this->os = OsSystems::all();
        $software = Software::all();

        $this->unreal = $software->filter(function ($soft) {
            return $soft->group == 'unreal';
        });

        $this->blender = $software->filter(function ($soft) {
            return $soft->group == 'blender';
        });

        $this->none = $software->filter(function ($soft) {
            return $soft->group == 'none';
        });
    }
    
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
        $bbcode = BBCode::where('template_id', $id)->get()[0];
        $returnHTML = view('template.modals.bbcode', ['template' => $template, 'bbcode' => $bbcode])->render();
        return response()->json(['msg' => 'OK', 'status' => 200, 'html' => $returnHTML, 'template' => $template]);
    }

    public function edit(string $id)
    {
        $template = Template::findOrFail($id);
        $returnHTML = view("template.modals.$template->type", ['template' => $template, 'tags' => $this->tags, 'sexual' => $this->sexual, 'assets' => $this->assets, 'nonsexual' => $this->nonsexual, 'technical' => $this->technical, 'languages' => $this->languages, 'os' => $this->os, 'unreal' => $this->unreal, 'blender' => $this->blender, 'none' => $this->none])->render();
        return response()->json(['msg' => 'OK', 'status' => 200, 'html' => $returnHTML, 'template' => $template]);
    }

    public function saveBBCode(Request $request)
    {
        $inputs = $request->except(['/backend/table/view/bbcode/save', '_token']);
        BBCode::updateOrCreate(
            ['template_id' => $inputs['id']],
            ['bbcode' => $inputs['bbcode']]
        );
        return response()->json(['msg' => 'bbcode update successfully']);
    }

    public function save(Request $request)
    {
        $inputs = $request->except(['/backend/table/save', '_token']);
        $id = $inputs['id'];
        unset($inputs['id']);
        $template = Template::findOrFail($id)->update($inputs);
        if (!$template) return response()->json(['msg' => 'template not updated!']);
        return response()->json(['msg' => 'template updated successfully']);
    }

    function importBBCode(string $id) {
        $template = Template::findOrFail($id);
        $returnHTML = view("template.types.$template->type")->with('template', $template)->render();
        $bbcode = BBCode::updateOrCreate(
            ['template_id' => $id],
            ['bbcode' => $returnHTML]
        );
        $code = view('template.modals.bbcode', ['template' => $template, 'bbcode' => $bbcode])->render();
        return response()->json(['msg' => 'OK', 'status' => 200, 'html' => $code]);
    }
}
