
    @extends('layout.content')

    @section('content')
    <main>
        <h1>About</h1>
        <h2> {{$name}} </h2>
        <h3>Gli insegnanti di {{$name}} </h3>
        <p>
            @foreach($teachers as $teacher) 
                @if ($loop->last)
                    {{$teacher}} .
                @else 
                    {{$teacher}},    
                @endif
            
            @endforeach
        </p>
        <h3>Gli studenti di {{$name}} </h3>
            <p>
            @foreach($students as $student) 
                @if ($loop->last)
                    {{$student}}, ecc...
                @else 
                    {{$student . ', '}}     
                @endif
            @endforeach
            </p>
    </main>
    @endsection