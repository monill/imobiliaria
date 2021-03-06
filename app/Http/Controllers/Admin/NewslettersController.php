<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use App\Models\Newsletter;
use App\Http\Controllers\Controller;

class NewslettersController extends Controller
{
    protected $log;

    /**
     * NewslettersController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    /**
     * Página inicial Newsletters
     */
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.newsletters.index', compact('newsletters'));
    }

    /**
     * Deleta newsletter do banco
     */
    public function destroy($news_id)
    {
        Newsletter::findOrFail($news_id)->delete();
        $this->log->log('Usuario(a) deletou um e-mail do newsletter');
        return redirect()->to('newsletters');
    }
}
