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
<h1>Application Details</h1>
@endsection
@section('content')
@include('job_application')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="{{ route('job_applications.edit',['job_application' => $job_application->id]) }}" class="btn btn-warning">Edit</a>
  <form	method="post" action="{{ route('job_applications.destroy',['job_application' => $job_application->id]) }}" onsubmit="return confirm('Are you sure to Delete')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</nav>
@endsection
@section('pageJs')
@endsection
