<h2>Leap Year Check</h2>
<p>Birth Year: {{ $birthYear }}</p>
<p>
    @if($isLeap)
        {{ $birthYear }} is a Leap Year.
    @else
        {{ $birthYear }} is NOT a Leap Year.
    @endif