// returns the home page with all <table>
Route::get('/', <controller>Controller::class .'@index')->name('<table>.index');
// returns the form for adding a id
Route::get('/<table>/create', <controller>Controller::class . '@create')->name('<table>.create');
// adds a id to the database
Route::id('/<table>', <controller>Controller::class .'@store')->name('<table>.store');
// returns a page that shows a full id
Route::get('/<table>/{id}', <controller>Controller::class .'@show')->name('<table>.show');
// returns the form for editing a id
Route::get('/<table>/{id}/edit', <controller>Controller::class .'@edit')->name('<table>.edit');
// updates a id
Route::put('/<table>/{id}', <controller>Controller::class .'@update')->name('<table>.update');
// deletes a id
Route::delete('/<table>/{id}', <controller>Controller::class .'@destroy')->name('<table>.destroy');