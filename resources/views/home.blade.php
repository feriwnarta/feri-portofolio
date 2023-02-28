@extends('templates.app')


@section('header')

    <div id="header">
        @include('partials.navbar')
        <div class="container">


            <div class="row d-flex align-items-center">
                <div class="col-sm-6">
                    <div class="margin-top-132 headline-sub">
                        <div>Hello i’m CodeCraft from indonesia,</div>
                    </div>
                    <div class="margin-top-20 headline-title">
                        Igniting Innovation and Driving Results in Software Development.
                    </div>Ï
                </div>

                <div class="col-sm-6">
                    <img src="{{asset('img/programming.png')}}" alt="" class="img-fluid">
                </div>
            </div>







        </div>
    </div>


@endsection

@section('body')
    <section id="recent-work">

    </section>
@endsection()

