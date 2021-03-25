<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Message\MessageStoreRequest;
use App\Http\Requests\API\Message\MessageUpdateRequest;
use App\Http\Resources\API\MessageResource;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        // Load all messages, with author relation
        $message = Message::with('author')->get();

        return MessageResource::collection($message);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MessageStoreRequest $request
     * @return MessageResource
     */
    public function store(MessageStoreRequest $request)
    {
        // Create new message
        $message    = Message::create($request->validated());

        // Load author relation
        $message->load('author');

        return new MessageResource($message);
    }

    /**
     * Display the specified resource.
     *
     * @param Message $message
     * @return MessageResource
     */
    public function show(Message $message)
    {
        // Load author relation
        $message->load('author');

        return new MessageResource($message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MessageUpdateRequest $request
     * @param Message $message
     * @return MessageResource
     */
    public function update(MessageUpdateRequest $request, Message $message)
    {
        /**
         * Save changes to message
         * Note: Only message can be mutated
        **/
        $message->update($request->validated());

        // Load author relation
        $message->load('author');

        return new MessageResource($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Message $message
     * @return JsonResponse
     */
    public function destroy(Message $message)
    {
        // Delete the message
        $message->delete();

        return response()->json([
            'success'   => true,
        ]);
    }
}
