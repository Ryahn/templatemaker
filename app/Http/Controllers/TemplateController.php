<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\BBCode;
use App\Models\Software;
use App\Models\Template;
use App\Models\Languages;
use App\Models\OsSystems;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;


class TemplateController extends Controller
{
    private $tags, $sexual, $assets, $nonsexual, $technical, $languages, $os, $unreal, $blender, $none;

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

    public function index()
    {

        return view('template.index', ['tags' => $this->tags, 'sexual' => $this->sexual, 'assets' => $this->assets, 'nonsexual' => $this->nonsexual, 'technical' => $this->technical, 'languages' => $this->languages, 'os' => $this->os, 'unreal' => $this->unreal, 'blender' => $this->blender, 'none' => $this->none]);
    }

    public function store(Request $request)
    {
        $inputs = $request->except(['_token','/maker/store']);

        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'trailer' => ['url', 'sometimes', 'nullable', 'regex:/(youtube|drive.google|imgur|vimeo)(.com|.net)/'],
        ],
        [
            'type.required' => 'You must choose a template type!',
            'trailer.url' => 'Trailer must a URL and be supported. See help text below input for support sites.'
        ]);

        if (!$validator->fails()) {
            $data = Template::create($inputs);
            // return dd($data);
            return response()->json(['msg' => 'Template created successfully!', 'id' => $data->id, 'status' => 200]);
        }
        return response()->json(['errors' => $validator->errors()->all()]);
    }

    public function ajax(string $id)  
    {
        $template = Template::findOrFail($id);
        $returnHTML = view("template.types.$template->type")->with('template', $template)->render();
        $bbcode = BBCode::updateOrCreate(
            ['template_id' =>  $template->id], //Where
            ['bbcode' => $returnHTML] //What to update
        );
        return response()->json(['status' => 200, 'msg' => 'OK', 'template' => $template, 'html' => $bbcode->bbcode]);
        // return response($returnHTML, 200)->header('Content-Type', 'text/html');
    }

    public function storeBBCode(Request $request)
    {
        $inputs = $request->except(['_token','/maker/bbcode']);
        BBCode::updateOrCreate(
            ['template_id' => $inputs['id']],
            ['bbcode' => $inputs['bbcode']]
        );
        return response()->json(['msg' => 'BBCode updated successfully!', 'status' => 200]);
    }

    public function edit(string $id)
    {
        $template = Template::findOrFail($id);
        $returnHTML = view('template.bbcode')->with('template', $template)->render();
        return response($returnHTML);
    }

    public function test(string $id)
    {
        $tags = Tags::all();
        $sexual = $tags->filter(function ($tag) {
            return $tag->optgroup == 'sexual';
        })->values();
        $assets = $tags->filter(function ($tag) {
            return $tag->optgroup == 'assets';
        })->values();
        $nonsexual = $tags->filter(function ($tag) {
            return $tag->optgroup == 'nonsexual';
        })->values();
        $technical = $tags->filter(function ($tag) {
            return $tag->optgroup == 'technical';
        })->values();
        $languages = Languages::all();
        $os = OsSystems::all();
        $software = Software::all();
        $unreal = $software->filter(function ($soft) {
            return $soft->group == 'unreal';
        });
        $blender = $software->filter(function ($soft) {
            return $soft->group == 'blender';
        });
        $none = $software->filter(function ($soft) {
            return $soft->group == 'none';
        });
        $template = Template::findOrFail($id);
        $returnHTML = view("template.types.$template->type")->with('template', $template)->render();
        return view('template.test', compact('returnHTML', 'tags', 'sexual', 'assets', 'nonsexual', 'technical', 'languages', 'os', 'unreal', 'blender', 'none'));
    }

    public function recent(Request $request)
    {
        if ($request->ajax()) {
            $data = Template::select('id', 'type', 'game_name', 'devName', 'version', 'created_by')->orderBy('id', 'DESC')->get();
            return Datatables::of($data)
            ->addIndexColumn()
                ->addColumn('action', function($row){
                    $edit = '<button id="edit" class="btn btn-primary btn-sm" style="margin-right: 5px;" data-id="'. $row->id.'">Edit</button>';
                    $view = '<button id="bbcode" class="btn btn-warning btn-sm" style="margin-right: 5px;" data-id="'. $row->id.'">BBCode</button>';
                    $import = '<button id="import" class="btn btn-danger btn-sm show_confirm" style="margin-right: 5px;" data-id="'. $row->id.'">Import BBCode</button>';
                    return $edit . $view . $import;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('template.recent');
    }

    public function view(string $id)
    {
        $template = Template::findOrFail($id);
        $html = view('template.modal', ['template' => $template, 'tags' => $this->tags, 'sexual' => $this->sexual, 'assets' => $this->assets, 'nonsexual' => $this->nonsexual, 'technical' => $this->technical, 'languages' => $this->languages, 'os' => $this->os, 'unreal' => $this->unreal, 'blender' => $this->blender, 'none' => $this->none])->render();
        return response()->json(['html' => $html, 'template' => $template]);
    }

    public function recentEditStore(Request $request)
    {
        $inputs = $request->except(['_token','/maker/store']);
    }
    
}
