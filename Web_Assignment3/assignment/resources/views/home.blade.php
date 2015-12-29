@extends('layouts.app')

@section('content')

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Interpreter</div>

                <div class="panel-body">

                  <form action="interpreter" method="get" target = "result" style="width:50%; border-radius:20px; >
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                  <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                  <textarea name="user_code" rows="24" cols="60" placeholder="  Write Your Code Here" style="resize: none; border-radius:20px;"></textarea>
                  <input type="submit" value="Run" class="btn btn-primary" style="width:97%">


                  </form>
                <div style="position:absolute; top:9%; left:50%; width:47%; height:79%; " >
                  <iframe class="frame2" src="" name="result" height ="100%" width="100%" frameBorder="1" style="border-radius:20px;">
                  </iframe>
                </div>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
