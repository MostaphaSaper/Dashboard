<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\ProjectGallery;

class BackendProjectGalleryController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('can:project-galleries-create', ['only' => ['create','store']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $project_galleries =  ProjectGallery::where(function($q)use($request){
            if($request->id!=null)
                $q->where('id',$request->id);
            if($request->q!=null)
                $q->where('project_title','LIKE','%'.$request->q.'%')->orWhere('project_content','LIKE','%'.$request->q.'%');
        })->orderBy('id','DESC')->paginate();
        return view('admin.project-gallery.index',compact('project_galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::get();
        return view('admin.project-gallery.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'our_role'=>"nullable|max:10000",
            'finished_work'=>"nullable|max:10000",
            'project_content'=>"nullable|max:100000",
            'about_project'=>"nullable|max:100000",
        ]);
        $project_gallery = ProjectGallery::create([
            'user_id'=>auth()->user()->id,
            "project_title"=>$request->project_title,
            "our_role"=>$request->our_role,
            "finished_work"=>$request->finished_work,
            "project_content"=>$request->project_content,
            "about_project"=>$request->about_project,
        ]);
        $project_gallery->tags()->sync($request->tag_id);
        \MainHelper::move_media_to_model_by_id($request->temp_file_selector,$project_gallery,"project_content");
        if($request->hasFile('main_image')){
            $main_image = $project_gallery->addMedia($request->main_image)->toMediaCollection('image');
            $project_gallery->update(['main_image'=>$main_image->id.'/'.$main_image->file_name]);
        }
        toastr()->success(__('utils/toastr.project_gallery_store_success_message'), __('utils/toastr.successful_process_message'));
        return redirect()->route('admin.project-gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectGallery $project_gallery)
    {
        $tags = Tag::get();
        return view('admin.project-gallery.edit',compact('project_gallery','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectGallery $project_gallery)
    {


        $request->validate([
            'project_title'=>"required|max:190",
            'our_role'=>"nullable|max:10000",
            'finished_work'=>"nullable|max:10000",
            'project_content'=>"nullable|max:100000",
            'about_project'=>"nullable|max:100000",
        ]);
        $project_gallery->update([
            'user_id'=>auth()->user()->id,
            "project_title"=>$request->project_title,
            "our_role"=>$request->our_role,
            "finished_work"=>$request->finished_work,
            "project_content"=>$request->project_content,
            "about_project"=>$request->about_project,
        ]);
        $project_gallery->tags()->sync($request->tag_id);
        \MainHelper::move_media_to_model_by_id($request->temp_file_selector,$project_gallery,"about_project");
        if($request->hasFile('main_image')){
            $main_image = $project_gallery->addMedia($request->main_image)->toMediaCollection('image');
            $project_gallery->update(['main_image'=>$main_image->id.'/'.$main_image->file_name]);
        }
        toastr()->success(__('utils/toastr.project_gallery_update_success_message'), __('utils/toastr.successful_process_message'));
        return redirect()->route('admin.project-gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectGallery $project_gallery)
    {
        $project_gallery->delete();
        toastr()->success(__('utils/toastr.project_gallery_destroy_success_message'), __('utils/toastr.successful_process_message'));
        return redirect()->route('admin.project-gallery.index');
    }
}
