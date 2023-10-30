@extends('layouts.lay')

@section('content')

@foreach($dafa as $us)
                        <div class="col-lg-12">
                            <?php
                            $myString = "{{$us->iframe}}";
                            $found=strstr( $myString, "tableau" ); 

                            if(!empty($found)){
                            ?>
                                {!!$us->iframe!!}
                            <?php
                            }else{
                            ?>
                            <iframe title="Report Section" width="100%" height="600px" src="{{$us->iframe}}" frameborder="0" allowFullScreen="true"></iframe>
                            <?php
                            }
                            ?>
                        </div>
@endforeach
@endsection