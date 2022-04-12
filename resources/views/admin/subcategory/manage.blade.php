@extends('admin.master')
@section('title')
    Manage-title
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
                                    <th>Category Id</th>
                                    <th>Sub Category name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subcategoryes as $subcategory)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$subcategory->category->category_name}}</td>
                                        <td>{{$subcategory->sub_category_name}}</td>
                                        <td>{{$subcategory->status == 0 ? 'unpublished':'published'}}</td>
                                        <td>
                                            <a href="{{route('sub_category_status_change',['id'=>$subcategory->id])}}"  class="btn-{{$subcategory->status== 0 ? 'primary':'secondery'}}">status</a>
                                            <a href="{{route('edit_sub_category',['id'=>$subcategory->id])}}" class="btn-secondary">edit</a>
                                            <a href="{{route('delete_sub_category',['id'=>$subcategory->id])}}" class="btn-danger">del</a>
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


