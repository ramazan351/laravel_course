<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class BookController extends Controller
{
    public function index(Request $request)
    {
        $user=$request->user();

        $books = Book::all();
        if ($books->isEmpty()) {
            return response()->json(['status'=>false,'message' => 'No books found'], 403);
        }else{
            return response()->json(['status'=>true,'message' => 'Books found','data'=>$user->books], 200);
        }
    }

    public function store(Request $request)
    {
       // dd($request->all());
       $user=Auth::user();
      // dd($users);
      $validate=  Validator::make($request->all(),[
            'title' => 'required|min:3|max:255',
            'author' => 'required|min:3|max:255',
            'pages' => 'required|integer',
        ]);

       if ($validate->fails()) {
           return response()->json(['status'=>false,'message' => $validate->errors()->first(),'data'=>[]], 403);

       }
       return response()->json(['status'=>true,'message' => 'Book created successfully','data'=>$user->books()->create($request->all())], 200);
    }
}
