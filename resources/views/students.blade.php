<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>

<h2>Student Results</h2>

@foreach($students as $student)

    @if($student['marks'] >= 40)
        <p>{{ $student['name'] }} - {{ $student['marks'] }} - Pass</p>
    @else
        <p>{{ $student['name'] }} - {{ $student['marks'] }} - Fail</p>
    @endif

@endforeach

</body>
</html>