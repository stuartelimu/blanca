@extends('layouts.app')

@section('content')
    <ul class="bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    
    <section id="container">
        @if(count($mice) > 0)
            @foreach($mice as $mouse)
            <div class="mice-card">
                <div class="mice-icon">
                    <i class="fas fa-spider"></i>
                </div>
                <h3>{{$mouse->alias}}</h3>
                <p>{{$mouse->tag}}</p>
            </div>
            @endforeach
        @endif
        
    </section>

    <section id="story">
        <h2>the Three Blind Mice</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero hic iure ipsam voluptatibus quam! Recusandae, dolor repellat consectetur sit rem soluta dignissimos eius quibusdam officiis et nobis excepturi suscipit aliquid!</p>
    </section>
@endsection