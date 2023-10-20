<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
public function dashboard(){
  $adminRequests = User::where('is_admin',NULL)->get();
  $revisorRequests= User::where('is_revisor',NULL)->get();
  $writerRequests= User::where('is_writer',NULL)->get();

  return view('admin.dashboard', compact('adminRequests','revisorRequests','writerRequests'));

}
public function setAdmin(User $user){
  $user->update([
    'is_admin'=>true,
  ]);
return redirect(route('admin.dashboard'))->with('message','Ha hecho correctamente administrador al usuario elegido');
}
public function setRevisor(User $user){
    $user->update([
      'is_revisor'=>true,
    ]);
  return redirect(route('admin.dashboard'))->with('message','Ha hecho correctamente revisor al usuario elegido');
  }
  public function setRedactor(User $user){
    $user->update([
      'is_redactor'=>true,
    ]);
  return redirect(route('admin.dashboard'))->with('message','Ha hecho correctamente redactor al usuario elegido');
  }

}
