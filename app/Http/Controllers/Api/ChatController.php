<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChatRequest;
use App\Models\Chat;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $rooms = Chat::select('room_id')->where('user_id', Auth::user()->id)->orWhere('to_user_id', Auth::user()->id)->groupBy('room_id')->get()->toArray();
        $chat = Chat::select('to_user_id')->where('room_id', $rooms)->groupBy('to_user_id')->get()->toArray();
        $chatUser = Owner::whereIn('user_id', $chat)->where('user_id', '!=', Auth::user()->id)->get()->toArray();
        return response()->json($chatUser);
    }

    public function show(Request $request)
    {
        $chat = Chat::where('room_id', $request->id)->orderBy('created_at', 'asc')->get();
        $userId = $chat->pluck('to_user_id')->unique()->values()->toArray();
        foreach ($userId as $key => $value) {
            if ($value === Auth::user()->id) {
                unset($userId[$key]);
            }
        }
        $userName = Owner::select('first_name', 'last_name')->whereIn('user_id', $userId)->get()->toArray();
        $chat = $chat->toArray();
        $chat['name'] = $userName;
        return response()->json($chat);
    }

    public function store(StoreChatRequest $request)
    {
        $existsRoom = Chat::select('room_id')->where('user_id', Auth::user()->id)->orWhere('to_user_id', Auth::user()->id)->exists();
        if ($existsRoom) {
            if (!isset($request->room_id)) {
                return response()->json(['error' => 'Missing room_id'], 400);
            }

            $to_user_id = Chat::select('to_user_id')->where('room_id', $request->room_id)->where('to_user_id', '!=', Auth::user()->id)->first()->toArray();
            $message = Chat::create([
                'room_id' => $request->room_id,
                'user_id' => Auth::user()->id,
                'to_user_id' => $to_user_id['to_user_id'],
                'message' => $request->message,
            ]);
            return response()->json($message);

        }
        $newRoom = Chat::max('room_id') + 1;
        $message = Chat::create([
            'room_id' => $newRoom,
            'user_id' => Auth::user()->id,
            'to_user_id' => $request->user_id,
            'message' => $request->message,
        ]);
        return response()->json($message);
    }


}
