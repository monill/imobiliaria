<?php

namespace App\Http\Controllers\Admin;

use App\Models\Newsletter;
use App\Http\Controllers\Controller;

class NewslettersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $newsletters = Newsletter::orderBy('name', 'ASC')->paginate(30);
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function destroy($id)
    {
        Newsletter::findOrFail($id)->delete();
        return redirect()->to('newsletters');
    }
}
