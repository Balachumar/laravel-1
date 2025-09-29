Route::get('/user-check', function () {
    $user = "User"; // try "Admin" also
    return view('usercheck', compact('user'));
});