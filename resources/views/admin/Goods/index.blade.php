@extends('admin.layouts.app')
@section('title','分类')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h6><i class="fa fa-folder fa-fw"></i>分类</h6>
                </div>
                <div class="widget-body">
                    <a class="btn pull-right" role="button" data-toggle="modal" data-target="#add-category-modal">
                        <i class="fa fa-folder-o"></i>
                    </a>
                    <table class="table table-hover table-bordered table-responsive" style="overflow: auto">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>code</th>
                            <th>create time</th>

                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($goods as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->code }}</td>
                                <td>{{ $item->created_at->format('Y-m-d') }}</td>

                                <td>
                                    <div>
                                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="编辑">
                                            <i class="fa fa-pencil fa-fw"></i>
                                        </a>
                                        <button class="btn btn-danger" data-toggle="modal"
                                                data-toggle="tooltip" data-placement="top" title="删除"
                                                data-method="delete"
                                                data-url="{{ route('category.destroy',$category->id) }}"
                                                data-modal-target="{{ $category->name }}">
                                            <i class="fa fa-trash-o fa-fw"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('admin.modals.add-category-modal')
@endsection