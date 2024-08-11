@extends('layouts.admin')

@section('content') 
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12" style="padding-bottom: 20px;">
        <div class="btn-group m-t-15">

        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <div class="header">
                <h3>Staff <button class="btn btn-primary waves-effect waves-light pull-right" data-toggle="modal"
                        data-target="#sendInvitation"><i class="fa fa-plus"></i> Create Account</button></h3>
            </div>

            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Last Operation</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staff as $member)
                        <tr onclick="window.location.href=window.location.pathname+'/{{$member->id}}'">
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->updated_at }}</td>
                            <td>
                                @if ($member->accept == 'true')
                                    <span class="label label-success">Active</span>
                                @endif
                                @if ($member->accept == 'false')
                                    <span class="label label-info">Invitation Sent</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for sending invitation -->
        <div class="modal fade" id="sendInvitation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Send Invitation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.staff.create') }}" method="POST">
                            @csrf
                            <fieldset class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required />
                            </fieldset>

                            <fieldset class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required />
                            </fieldset>

                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane-o"></i>
                                Send</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection