@extends('layout')

@section('content')


<section class="section" id="age-form" aria-label="age-form">
        <div class="containerabout">
            <h2 class="h2 section-title">Age Check to View Next Content </h2>

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="CheckAge" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required min="0">

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </section>

@endsection