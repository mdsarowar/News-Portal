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
                                    <th>Sub Category Id</th>
                                    <th>News Title</th>
                                    <th>Image</th>
                                    <th>short Description</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Hit Count</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($newses as $news)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$news->category->category_name}}</td>
                                        <td>{{$news->subCategory->sub_category_name}}</td>
                                        <td>{{$news->news_title}}</td>
                                        <td>
                                            <img src="{{asset($news->image)}}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{{$news->short_description}}</td>
                                        <td>{{$news->content}}</td>
                                        <td>{{$news->status == 0 ? 'unpublished':'published'}}</td>
                                        <td>{{$news->hit_count}}</td>
                                        <td>
                                            <a href="{{route('news_status_change',['id'=>$news->id])}}"  class="btn-{{$news->status== 0 ? 'primary':'secondery'}}">status</a>
                                            <a href="{{route('edit_news',['id'=>$news->id])}}" class="btn-secondary">edit</a>
                                            <a href="{{route('delete_news',['id'=>$news->id])}}" onclick="return confirm('ary you sure ?')" class="btn-danger">del</a>
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


