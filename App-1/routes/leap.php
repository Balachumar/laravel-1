use Illuminate\Support\Facades\Route;

Route::get('/leap-year', function () {
    $birthYear = 2000;
    $isLeap = ($birthYear % 400 == 0) || ($birthYear % 4 == 0 && $birthYear % 100 != 0);

    return view('leap', compact('birthYear', 'isLeap'));
});