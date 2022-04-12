@extends('admin.master')
@section('title')
    Create Sub Category
@endsection

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Sub Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update_sub_category',['id'=>$subcategory->id])}}" method="post">
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
                                <label for="" class="col-md-4 col-form-label">Sub Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="sub_category_name" value="{{$subcategory->sub_category_name}}">
                                </div>
                            </div>
                            <div class="form-group row mt-5">

                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Update Sub Category">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
