@extends ('laraview.layouts.sideNavLayout')

@section ('title')
Expense Categories
@endsection

@section ('pageCss')
<style></style>
@endsection

@section ('sidebar')
@include ('laraview.sidebar')
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
