@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.project-gallery.store')}}">
            @csrf
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <span class="fas fa-info-circle"></span> إضافة جديد
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            الوسوم
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" required name="tag_id[]"  multiple size="1" style="height:30px;opacity: 0;">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}" >{{$tag->tag_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            عنوان المشروع
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="project_title" required maxlength="190" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="col-12">
                            الصورة الرئيسية
                        </div>
                        <div class="col-12 pt-3">
                            <input type="file" required name="main_image" class="form-control" accept="image/*">
                        </div>
                    </div>
                    <div class="col-12  p-2">
                        <div class="col-12">
                            محتوى المشروع
                        </div>
                        <div class="col-12 pt-3">
                            <textarea name="project_content" required class="editor with-file-explorer">{{old('project_content')}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="col-12">
                            حول المشروع
                        </div>
                        <div class="col-12 pt-3">
                            <textarea name="about_project" required class="form-control" style="min-height:150px"></textarea>
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="col-12">
                            العمل المنجز
                        </div>
                        <div class="col-12 pt-3">
                            <textarea name="finished_work" required class="form-control" style="min-height:150px"></textarea>
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="col-12">
                            دورنا
                        </div>
                        <div class="col-12 pt-3">
                            <textarea name="our_role" required class="form-control" style="min-height:150px"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-3">
                <button class="btn btn-success" type="submit">حفظ</button>
            </div>
        </form>
    </div>
</div>
@endsection


