<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentRequest;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status_list = $this->getStatusByRole();
        $contents = Content::whereIn('status', $status_list)->get();
        return view("content.index", compact('contents'));
    }

    private function getStatusByRole()
    {
        // Implement logic to get status based on user role
        $status_list = [
            "author" => ["draft", "submitted"],
            "reviewer" => ["under_review", "approved", "rejected"],
            "admin" => ["published", "archived"]
        ];

        $statuses = [
            "author" => [
                "now" => ["draft", "rejected"],
                "next" => ["pending"]
            ],
            "reviewer" => [
                "now" => ["pending"],
                "next" => ["approved", "rejected"]
            ],
            "admin" => [
                "now" => ["approved"],
                "next" => ["published", "archived"]
            ]
        ];

        $userType = auth()->user()->role; // Assuming 'role' is a field in the users table
        return $statuses[$userType]['now'] ?? [];

    }

    private function getNextStatus($currentStatus)
    {
        $status_flow = [
            "author" => [
                "draft" => "submitted",
                "submitted" => null
            ],
            "reviewer" => [
                "pending" => ["approved", "rejected"],
                "approved" => null,
                "rejected" => null
            ],
            "admin" => [
                "approved" => "published",
                "published" => "archived",
                "archived" => null
            ]
        ];

        $userType = auth()->user()->role; // Assuming 'role' is a field in the users table
        return $status_flow[$userType][$currentStatus] ?? null;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("content.create");
    }

    public function review(Request $request, Content $content)
    {
        $action = $request->input('action');
        if (!in_array($action, ['approved', 'rejected'])) {
            return redirect()->route('content.index')->withErrors('Invalid action.');
        }

        if ($content->status !== 'pending') {
            return redirect()->route('content.index')->withErrors('Only pending content can be reviewed.');
        }

        $content->update(['status' => $action]);
        return redirect()->route('content.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContentRequest $request)
    {

        $data = $request->validated();
        $data['author_id'] = auth()->id();
        $data['status'] = 'draft';
        Content::create($data);
        return redirect()->route('content.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Content $content)
    {
        return view('content.view', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Content $content)
    {
        return view('content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'reviewer_id' => 'nullable|exists:users,id',
        ]);

        $data['status'] = 'draft';
        $content->update($data);
        return redirect()->route('content.index');
    }

    public function submit(Request $request, Content $content)
    {
        if ($content->status !== 'draft') {
            return redirect()->route('content.index')->withErrors('Only draft content can be submitted.');
        }

        $content->update(['status' => 'pending']);
        return redirect()->route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        //
    }

    public function publish(Request $request, Content $content)
    {
        if ($content->status !== 'approved') {
            return redirect()->route('content.index')->withErrors('Only approved content can be published.');
        }

        $content->update(['status' => 'published']);
        return redirect()->route('content.index');
    }
}
