<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id')->where('type','category');
    }


    public function post()
    {
        return $this->hasMany(Post::class, 'type', 'id');
    }


    public static function storeCategory($request)
    {
        $category = new self();
        return self::saveCategory($request, $category);
    }

    public static function updateCategory($request, $id)
    {
        $category = self::find($id);
        return self::saveCategory($request, $category);
    }

    public static function saveCategory($request, $category)
    {
        DB::transaction(function() use($request, $category) {
//            $category->type = $request['cat'];

            $category->save();
//dd($category);
            Translate::storeTranslate($request, $category->id);
        });

        return $category;
    }

    public static function deleteItemRow($id)
    {
//        $category = Category::where('id',$id)->get();
//        $category = Product::where('category_id',$id)->get();
//        if(!$category->isEmpty()){
//            return false;
//        }else{
        PortfolioCategory::where('id',$id)->delete();
        Translate::where('page_id',$id)->where('type','category')->delete();
        return true;
//        }


    }

    public static function getCategories(){
        $categories = PortfolioCategory::with(['translate'=>function($q){
            $q->where('code',app()->getLocale());
        }])->get();
        return $categories;
    }
}

