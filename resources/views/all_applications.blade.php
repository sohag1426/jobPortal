@extends ('laraview.layouts.topNavLayout')
@section ('title')
Job Application of X Company
@endsection
@section ('pageCss')
@endsection
@section ('topNavbar')
@include ('navbar')
@endsection
@section('contentTitle')
<h1>All Applications</h1>
@endsection
@section('content')
<!--modal -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Applicant Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="ModalBody">
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dialog -->
</div>
<!-- /modal -->
<table id="data_table" class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email address</th>
      <th scope="col">Phone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($applications as $application )
    <tr>
      <td>{{ $application->first_name }}</td>
      <td>{{ $application->last_name }}</td>
      <td>{{ $application->email }}</td>
      <td>{{ $application->phone }}</td>
      <td>
        <div class="custom-control-inline">
          <a href="#"  class="btn btn-success" onclick="showApplicantDetails('{{ $application->id }}','ModalBody')"  data-toggle="modal" data-target="#modal-default">Details</a>
          <a href="{{ route('job_applications.edit',['job_application' => $application->id]) }}" class="btn btn-warning">Edit</a>
          <form	method="post" action="{{ route('job_applications.destroy',['job_application' => $application->id]) }}" onsubmit="return confirm('Are you sure to Delete')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
@section('pageJs')
@endsection
