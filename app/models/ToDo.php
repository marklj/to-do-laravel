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
        
        $todo_item = DB::select($sql, [$id]);

        // Throw an exception if a result was not found
        if( ! $todo_item) throw new TodoNotFoundException;

        // Else return the item
        return $todo_item[0];
    }

    public function insert($attributes)
    {
        $item = new ToDo;

        return DB::insert(
            'INSERT into `todo` (`name`, `description`) values (?, ?)', 
            [$attributes['name'], $attributes['description']]
        );

        // In the future you could try to add some validation rules here to protect against a user entering invalid data.
        // Something like below...
        // if($validator->fails()) throw new TodoValidationException;
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