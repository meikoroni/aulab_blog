<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

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

public function editTag(Request $request, Tag $tag){
   $request->validate([
    'name'=>'required|unique:tags',
   ]);
   $tag-> update([
    'name'=>strtolower($request->name),
   ]);
   return redirect(route('admin.dashboard'))->with('message','Has actualizado etiqueta');
}

public function deleteTag(Tag $tag){
    foreach($tag->articles as $article){
     $article->tags()->detach($tag);
    }
    $tag->delete();
return redirect(route('admin.dashboard'))->with('message','Has eliminado la etiqueta');
}


public function editCategory(Request $request, Category $category){
    $request->validate([
     'name'=>'required|unique:categories',
    ]);
    $category-> update([
     'name'=>strtolower($request->name),
    ]);
    return redirect(route('admin.dashboard'))->with('message','Has actualizado correctamente la categoria');
 }

 public function deleteCategory(Category $category){
    $category->delete();
    return redirect(route('admin.dashboard'))->with('message','Has eliminado categoria');
 }


public function storeCategory(Request $request){
   Category::create([
    'name'=>strtolower($request->name),
    ]);

    return redirect(route('admin.dashboard'))->with('message','Has actualizado correctamente la nueva categoria');
 }


}
