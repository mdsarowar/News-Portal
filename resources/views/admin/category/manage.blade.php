@extends('admin.master')
@section('title')
    Manage-Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Category</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categoryes as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>{{$category->status == 0 ? 'unpublished':'published'}}</td>
                                    <td>
                                        <a href="{{route('category_status_change',['id'=>$category->id])}}"  class="btn-{{$category->status== 0 ? 'primary':'secondery'}}">status</a>
                                        <a href="{{route('edit_category',['id'=>$category->id])}}" class="btn-secondary">edit</a>
                                        <a href="{{route('delete_category',['id'=>$category->id])}}" class="btn-danger">del</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

