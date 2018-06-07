@extends('layouts.datatables')
@section('title', 'Clubs')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Clubs</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Football Clubs
            <span class="pull-right">
            <button data-toggle="modal" data-target="#add-club-modal" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Football Club</button>
        </div>
            
        <div class="card-body">
            @include('flash.success')
            @include('flash.warnings')
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>No of Players</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>No of Players</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if(count($clubs))
                        @foreach($clubs as $club)
                            <tr>
                                <td>{{ $club->id }}</td>
                                <td>{{ $club->name }}</td>
                                <td>{{ $club->players()->count() }}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit</button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    <a href="{{ url('club/attach/'. $club->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-paperclip"></i> Add Players</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                </table>
            </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="add-club-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create a Football Club</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="{{ route('add-club') }}" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label" for="club_name">Club Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required/>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection