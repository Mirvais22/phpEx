<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


/*User*/
Route::get("/GetAllUsers", [App\Http\Controllers\UserController::class, 'GetAllUsers']);
Route::get("/GetUserById/{id}", [App\Http\Controllers\UserController::class, 'GetUserById']);
Route::post("/UnHashPassword", [App\Http\Controllers\UserController::class, 'UnHashPassword']);
Route::get("/GetPassword/{log}", [App\Http\Controllers\UserController::class, 'GetPassword']);
Route::get("/GetUserByLogin/{log}", [App\Http\Controllers\UserController::class, 'GetUserByLogin']);
Route::put("/UpdateUser/{id}", [App\Http\Controllers\UserController::class, 'UpdateUser']);
Route::post("/CreateUser", [App\Http\Controllers\UserController::class, 'CreateUser']);
Route::delete("/DeleteUser/{id}", [App\Http\Controllers\UserController::class, 'DeleteUser']); 

/*Comments*/
Route::get("/GetAllComments",[App\Http\Controllers\CommentController::class,'GetAllComments']);
Route::get("/GetCommentById/{id}", [App\Http\Controllers\CommentController::class, 'GetCommentById']);
Route::post("/CreateComment", [App\Http\Controllers\CommentController::class, 'CreateComment']);
Route::delete("/DeleteComment/{id}", [App\Http\Controllers\CommentController::class, 'DeleteComment']); 
Route::delete("/DeleteAllComment/{id}", [App\Http\Controllers\CommentController::class, 'DeleteAllComment']); 

/*Game*/
Route::get("/GetAllGames",[App\Http\Controllers\GameController::class,'GetAllGames']);
Route::get("/GetGameById/{id}", [App\Http\Controllers\GameController::class, 'GetGameById']);
Route::put("/UpdateGameMove/{id}", [App\Http\Controllers\GameController::class, 'UpdateGameMove']);
Route::put("/UpdateGameStatus/{id}", [App\Http\Controllers\GameController::class, 'UpdateGameStatus']);
Route::post("/CreateGame", [App\Http\Controllers\GameController::class, 'CreateGame']);
Route::delete("/DeleteGame/{id}", [App\Http\Controllers\GameController::class, 'DeleteGame']); 

/*PIG*/
Route::get("/GetAllPIG", [App\Http\Controllers\PlayerInGameController::class, 'GetAllPIG']);
Route::get("/GetPIGById/{id}", [App\Http\Controllers\PlayerInGameController::class, 'GetPIGById']);
Route::get("/GetPIGFromGame/{gameId}", [App\Http\Controllers\PlayerInGameController::class, 'GetPIGFromGame']);
Route::put("/UpdatePIG_status/{id}", [App\Http\Controllers\PlayerInGameController::class, 'UpdatePIG_status']);
Route::post("/CreatePIG", [App\Http\Controllers\PlayerInGameController::class, 'CreatePIG']);
Route::delete("/DeletePIG/{id}", [App\Http\Controllers\PlayerInGameController::class, 'DeletePIG']); 

/*Round*/ 
Route::get("/GetAllRounds", [App\Http\Controllers\RoundController::class, 'GetAllRounds']); 
Route::get("/GetRoundById/{id}", [App\Http\Controllers\RoundController::class, 'GetRoundById']); 
Route::put("/UpdateRound/{id}", [App\Http\Controllers\RoundController::class, 'UpdateRound']); 
Route::post("/CreateRound", [App\Http\Controllers\RoundController::class, 'CreateRound']);
Route::put("/KillPlayer/{id}", [App\Http\Controllers\RoundController::class, 'KillPlayer']);
Route::put("/HealPlayer/{id}", [App\Http\Controllers\RoundController::class, 'HealPlayer']);
Route::put("/KickPlayer/{id}", [App\Http\Controllers\RoundController::class, 'KickPlayer']);
Route::get("/CheckPlayer/{id}", [App\Http\Controllers\RoundController::class, 'CheckPlayer']);
 
/*Role*/ 
Route::get("/GetAllRoles", [App\Http\Controllers\RoleController::class, 'GetAllRoles']); 
Route::get("/GetRoleById/{id}", [App\Http\Controllers\RoleController::class, 'GetRoleById']); 
Route::post("/CreateRole", [App\Http\Controllers\RoleController::class, 'CreateRole']); 
 
/*Room*/ 
Route::get("/GetAllRooms", [App\Http\Controllers\RoomController::class, 'GetAllRooms']); 
Route::get("/GetUnActiveRooms", [App\Http\Controllers\RoomController::class, 'GetUnActiveRooms']);
Route::get("/GetCountOfPlayers", [App\Http\Controllers\RoomController::class, 'GetCountOfPlayers']);
Route::put("/GetActiveRooms/{id}", [App\Http\Controllers\RoomController::class, 'GetActiveRooms']); 
Route::get("/GetCountOfSpectatot", [App\Http\Controllers\RoomController::class, 'GetCountOfSpectatot']); 
Route::get("/GetActiveRooms", [App\Http\Controllers\RoomController::class, 'GetActiveRooms']); 
Route::get("/GetLastRoomId", [App\Http\Controllers\RoomController::class, 'GetLastRoomId']); 
Route::get("/GetRoomById/{id}", [App\Http\Controllers\RoomController::class, 'GetRoomById']); 
Route::get("/GetRoomId/{id}", [App\Http\Controllers\RoomController::class, 'GetRoomId']); 
Route::put("/UpdateRoom/{id}", [App\Http\Controllers\RoomController::class, 'UpdateRoom']); 
Route::post("/CreateRoom", [App\Http\Controllers\RoomController::class, 'CreateRoom']); 
Route::delete("/DeleteRoom/{id}", [App\Http\Controllers\RoomController::class, 'DeleteRoom']);

/*UIR*/
Route::get("/GetAllUIRs", [App\Http\Controllers\UserInRoomController::class, 'GetAllUIRs']); 
Route::get("/GetUIRById/{id}", [App\Http\Controllers\UserInRoomController::class, 'GetUIRById']); 
Route::put("/UpdateUIR/{id}", [App\Http\Controllers\UserInRoomController::class, 'UpdateUIR']); 
Route::post("/CreateUIR", [App\Http\Controllers\UserInRoomController::class, 'CreateUIR']); 
Route::delete("/DeleteUIR/{id}", [App\Http\Controllers\UserInRoomController::class, 'DeleteUIR']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
