<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use App\Models\Newsletter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewslettersController extends Controller
{
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Newsletter::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou um e-mail do newsletter');
        return redirect()->to('newsletters');
    }
}
