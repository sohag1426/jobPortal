@extends ('laraview.layouts.topNavLayout')
@section ('title')
Job Application of X Company
@endsection
@section ('pageCss')
<style></style>
@endsection
@section ('topNavbar')
@include ('navbar')
@endsection
@section('contentTitle')
<h1>Job Application of X Company</h1>
@endsection
@section('content')
<div class="row">
  <div class="col-xs-12">
    <h4>Wish to play a role in building the future?</h4>
    <a class="btn btn-success" href="{{ route('job_applications.create') }}">Apply Now</a>
  </div>
</div>
@endsection
@section('pageJs')
@endsection
