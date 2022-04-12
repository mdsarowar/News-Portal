@extends('admin.master')
@section('title')
    Create Category
@endsection

@section('body')

        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('new_category')}}" method="post">
                                @csrf
                                <div class="form-group row mt-5">
                                    <label for="" class="col-md-4 col-form-label">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="category_name">
                                    </div>
                                </div>
                                <div class="form-group row mt-5">

                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-outline-success btn-block" value="Add Category">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

@endsection
