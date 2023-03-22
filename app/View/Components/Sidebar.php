<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
    //write a query to get the categories with the number of posts in each category
    //use the query builder to write the query
        $categories = Category::query()
        ->select('title', 'slug', DB::raw('count(*) as total'))
        ->join('category_post', 'categories.id', '=', 'category_post.category_id')
        ->groupBy('categories.id')
        ->orderBy('total', 'DESC')
        ->get();
        
        return view('components.sidebar', compact('categories'));
        
    }
}