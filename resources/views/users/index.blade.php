@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <a>
                    <button type="button" class="btn btn-primary" ><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add New</button>
                </a>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Users</h4>
                            <p class="card-category"> Here is user list</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th class="th-actions text-right">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>
                                                    @if($item->profile_id==1)
                                                        Admin
                                                    @else
                                                        Editor
                                                    @endif
                                                </td>
                                                <td class="td-actions text-right">

                                                        <form action="#" method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                                                                <i class="material-icons">edit</i>
                                                                <div class="ripple-container"></div>
                                                            </a>
                                                            <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                <i class="material-icons">close</i>
                                                                <div class="ripple-container"></div>
                                                            </button>
                                                        </form>

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
        </div>
    </div>
@endsection
