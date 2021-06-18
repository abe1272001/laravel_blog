<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Module\ShareData;

class UserAuthController extends Controller {

  public function signUpPage() {
    $name = 'sign_up';
    $binding = [
      'title' => ShareData::TITLE,
      'name' => $name,
    ];
    return view('user.sign-up', $binding);
  }
  public function signUpProcess() {
    #接收輸入的資料
    $input = request() -> all();
    var_dump($input);
    exit;
  }
}
?>