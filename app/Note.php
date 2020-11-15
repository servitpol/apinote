<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Note extends Model
{
    protected $table = 'notes';

    protected $fillable = [
        'id',
        'note',
        'short_note',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'data_notes');
    }

    public function images()
    {
        return $this->belongsToMany('App\Img', 'data_notes');
    }

    public static function getNoteById($note_id)
    {
        $note = DB::table('notes')
            ->join('data_notes', 'notes.id', '=', 'data_notes.note_id')
            ->leftjoin('images', 'data_notes.img_id', '=', 'images.id')
            ->where('notes.id', $note_id)
            ->where('data_notes.user_id', auth()->id())
            ->select(
                'notes.id',
                'data_notes.user_id',
                'notes.note',
                'notes.created_at',
                'notes.updated_at',
                'images.full_img_path',
                'images.thumb_img_path'
            )
            ->limit(1)
            ->get();

        return $note;
    }

    public static function getAllNotes()
    {
        $notes = DB::table('notes')
            ->join('data_notes', 'notes.id', '=', 'data_notes.note_id')
            ->leftjoin('images', 'data_notes.img_id', '=', 'images.id')
            ->where('data_notes.user_id', auth()->id())
            ->select(
                'notes.id',
                'data_notes.user_id',
                'notes.short_note',
                'notes.created_at',
                'notes.updated_at',
                'images.full_img_path',
                'images.thumb_img_path'
            )
            ->get();

        return $notes;
    }
}
