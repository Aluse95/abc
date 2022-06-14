<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    protected $table = 'student';

    public function getdata() {

        return  DB::select('SELECT * FROM '.$this->table);
    }
    public function insertdata($data) {

        return DB::insert('INSERT INTO '.$this->table.'(fullname, email, class, address) VALUES (?,?,?,?)',$data);
    }
    public function getstudent($id) {

        return  DB::select('SELECT * FROM '.$this->table.' WHERE id=?',[$id]);
    }
    public function updatedata($data) {

        return DB::update('UPDATE '.$this->table.' SET fullname=?, email=?, class=?, address=? WHERE id=?', $data);
    }
    public function deleteStd($id) {
        
        return DB::delete('DELETE FROM '.$this->table.' WHERE id=?', [$id]);
    }

}
