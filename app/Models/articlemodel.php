<?php

namespace App\Models;

use Illuminate\Support\Facades\DB as DB;


class ArticleModel {
    public static function getall() {
        $all = DB::table('articles')->get();
        return $all;
    }

    public static function save($data) {
        $save = DB::table('articles')->insert($data);
        return $save;
    }

    public static function findbyid($id) {
        $item = DB::table('articles')->where('id',$id)->get();
        return $item;
    }

    public static function delete($id) {
        $item = DB::table('articles')
                ->where('id',$id)
                ->delete();
        return $item;
    }

    public static function update($id,$request) {
        $item = DB::table('articles')
                ->where('id',$id)
                ->update([
                    'isi' => $request['isi'],
                    'judul' => $request['judul'],
                    'slug' => $request['slug'],
                ]);
         return $item;
    }

}
