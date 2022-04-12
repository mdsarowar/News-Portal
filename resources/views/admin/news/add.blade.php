@extends('admin.master')
@section('title')
    Create News
@endsection

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Add News</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('new_news')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mt-5">
                                <label for="category_id" class="col-md-4 col-form-label">Category Name</label>
                                <div class="col-md-8">
                                    <select name="category_id" class="form-control" id="category_id">
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach($categorys as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>

                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="category_id" class="col-md-4 col-form-label">sub Category Name</label>
                                <div class="col-md-8">
                                    <select name="sub_category_id" class="form-control" id="category_id">
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach($subcategorys as $subcategory)
                                            <option value="{{$subcategory->id}}">{{$subcategory->sub_category_name}}</option>

                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">News Title</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="news_title">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Short Description</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="short_description">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Content</label>
                                <div class="col-md-8">
                                    <textarea name="content" id="editor" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-5">

                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Add Sub Category">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
