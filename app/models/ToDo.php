<?php

class ToDo extends BaseModel {

    public function all()
    {
        $sql = 'SELECT * FROM `todo`';

        return DB::select($sql);
    }

    public function find($id)
    {
        $sql = 'SELECT * FROM `todo` WHERE `id` = ?';
        
        return DB::select($sql, [$id])[0];
    }

    public function insert($attributes)
    {
        $item = new ToDo;

        return DB::insert(
            'INSERT into `todo` (`name`, `description`) values (?, ?)', 
            [$attributes['name'], $attributes['description']]
        );
    }



    // public function update($id, $attributes)
    // {
    //     $item = ToDo::find($id);

    //     $item->name = $attributes['name'];
    //     $item->description = $attributes['description'];

    //     $item->save();
    // }



    // public static function destroy($id)
    // {
    //     $item = ToDo::find($id);
    //     $item->delete();
    // }

}