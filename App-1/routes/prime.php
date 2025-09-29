Route::get('/prime', function () {
    $number = 17;
    $isPrime = true;

    if ($number <= 1) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    return view('prime', compact('number', 'isPrime'));
});