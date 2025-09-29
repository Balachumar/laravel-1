Route::get('/students', function () {
    $students = ['Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5'];
    return view('students', compact('students'));
});