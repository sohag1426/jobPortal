@extends ('laraview.layouts.topNavLayout')

@section ('title')
Page Title
@endsection

@section ('pageCss')
<style></style>
@endsection

@section ('topNavbar')
@include ('laraview.navbar')
@endsection

@section('contentTitle')
<h1>Content Title</h1>
@endsection

@section('content')

    <div class="row">
      <div class="col-xs-12">
            Content Body
      </div>
    </div>

@endsection

@section('pageJs')
@endsection
