Route::get('/evenodd', function () {
    $num = 15;
    $isEven = $num % 2 == 0;

    return view('evenodd', compact('num', 'isEven'));
});