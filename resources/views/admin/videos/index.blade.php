@extends('admin.layout')

@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Lista de Videos<br><small>En esta sección puede ver la lista de los videos publicados</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Videos</li>
        <li><a href="">Lista de Videos</a></li>
    </ul>

    <!-- END Forms General Header -->
    <!-- Datatables Content -->

    <div class="block full" xmlns="http://www.w3.org/1999/html">
        <div class="table-responsive">
            <a href="{{ route('videos.create') }}" class="btn btn-info">Crear Nuevo</a>
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Titulo</th>
                    <th>Slug</th>
                    <th>Descripción</th>
                    <th>Link</th>
                    <th class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>

                @foreach($videos as $video)
                    <tr>
                        <td>{{ $video->id }}</td>
                        <td>{{ $video->title }}</td>
                        <td>{{ $video->slug }}</td>
                        <td>{{ $video->description }}</td>
                        <td>{{ $video->link }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('videos.edit', $video) }}" data-toggle="tooltip" title="Editar" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <form method="POST"
                                      action="{{ route('videos.destroy', $video) }}"
                                      style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-xs"
                                            onclick="return confirm('Estas seguro de querer eliminar este usuario')" data-toggle="tooltip" title="Eliminar"><i class="fa fa-times"></i>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dashboard Header -->



@endsection

@push('scripts')
    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('admin/js/pages/tablesDatatables.js') }}"></script>
    <script>$(function(){ TablesDatatables.init(); });</script>

@endpush

