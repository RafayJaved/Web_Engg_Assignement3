
@extends('layouts.app1')

@section('content')

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Moderator View Logout from moderator and login as user to run your code</div>

                <div class="panel-body">

                <center>  <h1>Codes</h1>  </center>
                  @foreach ($codes as $c)
                  <h3>Coded by {{$c->name}}<h3>
                  <h4>
                    &lt;

                    <?php
                      $code = $c->code;
                      $code = str_replace("<", "", $code);
                      $code = str_replace(">", "", $code);
                      echo $code;
                    ?>

                    &gt;
                  </h4>


                    <h3>Result<h3>
                    <h4>
                      <?php
                        $code = $c->code;
                        $code = str_replace("<?php", "", $code);
                        $code = str_replace("?>", "", $code);
                        eval($code);
                        echo "<hr>";
                        echo "<hr>";
                      ?>

                  </h4>

                  @endforeach




                </div>
            </div>
        </div>
    </div>
</div>

@endsection
