Route::get('/marksheet/{name}/{class}/{sub1?}/{sub2?}', function ($name, $class, $sub1 = 80, $sub2 = 75) {
    $sub3 = 90; $sub4 = 85; $sub5 = 70;
    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $percentage = $total / 5;

    if ($percentage >= 80) $grade = 'A+';
    elseif ($percentage >= 70) $grade = 'A';
    elseif ($percentage >= 60) $grade = 'B';
    elseif ($percentage >= 50) $grade = 'C';
    else $grade = 'F';

    return view('marksheet', compact('name', 'class', 'sub1', 'sub2', 'sub3', 'sub4', 'sub5', 'percentage', 'grade'));
});