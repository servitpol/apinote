<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ImgController;
use App\Img;
use App\Note;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NoteController extends Controller
{
    // All notes
    public function notes()
    {
        $notes = Note::getAllNotes();

        if ($notes->isEmpty()) {
            return response()->json(['error' => true, 'message' => 'Notes not found'], 404);
        }

        return response()->json($notes, 200);
    }

    // One note
    public function noteById($note_id)
    {
        $note = Note::getNoteById($note_id);

        if ($note->isEmpty()) {
            return response()->json(['error' => true, 'message' => 'Note not found'], 404);
        }

        return response()->json($note, 200);
    }

    // Create a note
    public function noteCreate(Request $request)
    {
        $user = User::find(auth()->id());

        $validator = Validator::make($request->all(), [
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
            'note'  => 'required|string|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()], 401);
        }

        $input = [
            'note'       => $request->note,
            'short_note' => Str::words($request->note, 10),
            'created_at' => Carbon::NOW(),
            'updated_at' => Carbon::NOW(),
        ];

        $note = $user->notes()->create($input);

        if ($request->hasFile('image')) {
            $image  = $request->file('image');
            $img_id = ImgController::imgSave($image, auth()->id(), $note->id);
            $user->notes()->updateExistingPivot($note->id, ['img_id' => $img_id]);
        }

        return response()->json($note, 201);
    }

    // Editing a note
    public function noteEdit(Request $request, Note $note)
    {
        $user_note = Note::getNoteById($note->id);

        if ($user_note->isEmpty()) {
            return response()->json(['error' => true, 'message' => 'Note not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
            'note'  => 'required|string|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()], 401);
        }

        $user = User::find(auth()->id());

        $old_img_id = !is_null($note->images()->first()) ? $note->images()->first()->pivot->img_id : null;
        ImgController::imgFileDelete(auth()->id(), $note->id, $old_img_id);

        if ($request->hasFile('image')) {
            $image  = $request->file('image');
            $img_id = ImgController::imgSave($image, auth()->id(), $note->id);
            $user->notes()->updateExistingPivot($note->id, ['img_id' => $img_id]);
        } else {
            $user->notes()->updateExistingPivot($note->id, ['img_id' => null]);
        }

        try {
            Img::destroy($old_img_id);
        } catch (\Exception $e) {
            // there may be an exception when trying to delete a fake image that is associated with another note
        }

        $note->update($request->all());
        $note->touch();

        $data_note = Note::getNoteById($note->id);

        return response()->json($data_note, 200);
    }

    // Deleting a note
    public function noteDelete(Note $note)
    {
        $user_note = Note::getNoteById($note->id);

        if ($user_note->isEmpty()) {
            return response()->json(['error' => true, 'message' => 'Note not found'], 404);
        }

        $img_id = !is_null($note->images()->first()) ? $note->images()->first()->pivot->img_id : null;

        $note->find($note->id)->users()->detach();
        $note->find($note->id)->images()->detach();

        Img::destroy($img_id);
        ImgController::imgFileDelete(auth()->id(), $note->id, $img_id);

        $note->find($note->id)->delete();

        return response()->json('', 204);
    }
}
