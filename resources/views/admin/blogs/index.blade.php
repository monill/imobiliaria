@extends('admin.layout.main')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Blogs</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Blogs</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Blogs</h3>
                <div class="form-inline padding-bottom-15">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <a href="{{ url('blogs/create') }}" class="btn btn-outline btn-info btn-sm m-b-20"><i class="icon wb-plus" aria-hidden="true"></i>Adicionar Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table product-overview">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imagem</th>
                                <th>Título</th>
                                <th>Views</th>
                                <th>Comentários</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td> <img src="{{ $blog->image }}" alt="Blog" width="80"> </td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->views }}</td>
                                <td>{{ $blog->comments()->count() }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Editar"><i class="ti-marker-alt"></i></a>
                                    <a href="javascript:void(0)" class="text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Nada cadastrado no momento.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection