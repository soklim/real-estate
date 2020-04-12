@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('Project List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title "><i class="fa fa-list"></i> Projects</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a class="btn btn-primary" href="javascript:void(0)" id="btnNew"><i class="fa fa-plus"></i> Add New</a>
                                <table class="table table-bordered data-table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Project Name KH</th>
                                        <th>Project Name EN</th>
                                        <th>Abbreviation</th>
                                        <th>Project Code</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="ajaxModel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modelHeading"></h4>
                        </div>
                        <div class="modal-body">
                            <form id="userForm" name="userForm" class="form-horizontal">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="name" name="name"  value="" maxlength="50" required="true">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-12">
                                        <input id="email" type="email" name="email" required=""  class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Profile</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="profile_id" name="profile_id">
                                            <option value="2">Editor</option>
                                            <option value="1">Administrator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-12">
                                        <input id="password" type="password" name="password" required=""  class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: false,
                ajax: "{{ route('user.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'abbreviation', name: 'abbreviation'},
                    {data: 'project_name_en', name: 'project_name_en'},
                    {data: 'abbreviation', name: 'project_code'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            {{--$('#btnNew').click(function () {--}}
                {{--$('#saveBtn').val("Save");--}}
                {{--$('#user_id').val('');--}}
                {{--$('#userForm').trigger("reset");--}}
                {{--$('#modelHeading').html("Create New User");--}}
                {{--$('#ajaxModel').modal('show');--}}
                {{--$('#name').focus();--}}
            {{--});--}}

            {{--$('body').on('click', '.editUser', function () {--}}
                {{--var user_id = $(this).data('id');--}}
                {{--$.get("{{ route('user.index') }}" +'/' + user_id +'/edit', function (data) {--}}
                    {{--$('#modelHeading').html("Edit User");--}}
                    {{--$('#saveBtn').val("edit-user");--}}
                    {{--$('#ajaxModel').modal('show');--}}
                    {{--$('#id').val(data.id);--}}
                    {{--$('#name').val(data.name);--}}
                    {{--$('#email').val(data.email);--}}
                    {{--$('#profile_id').val(data.profile_id);--}}
                {{--})--}}
            {{--});--}}

            {{--$('#saveBtn').click(function (e) {--}}
                {{--e.preventDefault();--}}
                {{--$(this).html('Sending..');--}}

                {{--$.ajax({--}}
                    {{--data: $('#userForm').serialize(),--}}
                    {{--url: "{{ route('user.store') }}",--}}
                    {{--type: "POST",--}}
                    {{--dataType: 'json',--}}
                    {{--success: function (data) {--}}
                        {{--$('#userForm').trigger("reset");--}}
                        {{--$('#ajaxModel').modal('hide');--}}
                        {{--table.ajax.reload();--}}
                    {{--},--}}
                    {{--error: function (data) {--}}
                        {{--console.log('Error:', data);--}}
                        {{--$('#saveBtn').html('Save');--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}

            {{--$('body').on('click', '.deleteUser', function () {--}}

                {{--var product_id = $(this).data("id");--}}
                {{--confirm("Are You sure want to delete !");--}}

                {{--$.ajax({--}}
                    {{--type: "DELETE",--}}
                    {{--url: "{{ route('user.store') }}"+'/'+product_id,--}}
                    {{--success: function (data) {--}}
                        {{--table.ajax.reload();--}}
                    {{--},--}}
                    {{--error: function (data) {--}}
                        {{--console.log('Error:', data);--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}

        });
    </script>
@endsection
