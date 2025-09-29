<h2>Prime Number Check</h2>
<p>
    @if($isPrime)
        ✅ {{ $number }} is Prime.
    @else
        ❌ {{ $number }} is NOT Prime.
    @endif