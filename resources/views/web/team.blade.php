@extends('web.layouts.master')
@section('content')
    <main id="content">
        <header class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Our team <small>We're smart and beautiful</small></h1>
                    </div>
                </div>
            </div>

        </header>

        @foreach($teams as $i => $team)

        @if ($i % 2 == 0)
            <section data-nekoanim="fadeInUp" data-nekodelay="300" class="section-fw">
        @else
            <section data-nekoanim="fadeInUp" data-nekodelay="300" class="light-color section-fw mt pt">
        @endif
            <div class="container">
                <div class="row">
                    @if ($i % 2 == 0)
                        <div class="col-md-6 image-background cover no-padding team-{{ $i }}">
                    @else
                        <div class="col-md-6 col-md-push-6 image-background cover no-padding team-{{ $i }}">
                    @endif
                         <br/> <br/> <br/> <br />
                        <img class="img-responsive" src="{{ $team->image }}" width="560px" height="560px">
                    </div>

                    @if ($i % 2 == 0)
                    <div class="col-md-6 col-md-offset-6 padding-medium body-color">
                    @else
                    <div class="col-md-6 col-md-pull-6 col-md-offset-6 padding-medium">
                    @endif
                        <h2><span>{{ $team->position }}</span>{{ $team->name }}</h2>
                        <p>
                            {!! nl2br(e($team->description,0,100)) !!}
                        </p>
                        <!-- progressbar -->
                        <h4>{{ $team->first_strength }}</h4>
                        <div class="progress">
                            <div class="progress-bar striped active" role="progressbar" aria-valuenow="{{ $team->first_strength_bar }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $team->first_strength_bar }}%">
                                <span class="sr-only">{{ $team->first_strength_bar }}% Complete</span>
                            </div>
                        </div>
                        <!-- progressbar -->
                        <h4>{{ $team->second_strength }}</h4>
                        <div class="progress">
                            <div class="progress-bar striped active" role="progressbar" aria-valuenow="{{ $team->second_strength_bar }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $team->second_strength_bar }}%">
                                <span class="sr-only">{{ $team->second_strength_bar }}% Complete</span>
                            </div>
                        </div>
                        <!-- progressbar -->
                        <h4>{{ $team->third_strength }}</h4>
                        <div class="progress">
                            <div class="progress-bar striped active" role="progressbar" aria-valuenow="{{ $team->third_strength_bar }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $team->third_strength_bar }}%">
                                <span class="sr-only">{{ $team->third_strength_bar }}% Complete</span>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </section>

        @endforeach


    </main>
    <!-- / content -->
@endsection