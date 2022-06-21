<?php

namespace App\Http\View\Composers;

use App\Models\categories;
use Illuminate\View\View;
class CategoryComposer
{

    protected $users;


    public function __construct()
    {

    }


    public function compose(View $view)
    {
        $categories= categories::select('id','name','list_id')->where('status',1)->orderByDesc('id')->get();
        $view ->with('categories',$categories);
    }
}
