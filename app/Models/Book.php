<?php

namespace App\Models;

use App\Mail\SendNewBook;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    /**
     * Атрибуты, которые должны быть типизированы.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function saveBook($request){

        $this->name = $request->name;
        $this->author_book = $request->author_book;
        $this->user_id = Auth::id();
        if($this->save()){
            foreach ($this->allUser() as $user){
                if($user->id != Auth::id()){
                    $this->sendMailNewBook($user->email);
                }
            }
            return true;

        }

        return  false;
    }

    public function sendMailNewBook($email){
        Mail::to($email)->send(new SendNewBook());
    }

    public function allUser(){
        $users = User::get();
        return $users;
    }

}
