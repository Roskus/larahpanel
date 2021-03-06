@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-0 text-gray-800 pb-3"><i class="fas fa-fw fa-sitemap"></i> {{ __('Websites') }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/site/add" class="btn btn-primary mt-2 mb-2">{{ __('Add') }}</a>
        </div>
    </div>
    <div class="row">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ __('Websites') }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Url</th>
                                <th>{{ __('Type') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Created at') }}</th>
                                <th>{{ __('Updated at') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (!@empty($websites))
                            @foreach ($websites as $site)
                            <tr>
                                <td>
                                    <a href="/site/edit/{{ $site->id }}">{{ $site->url }}</a>
                                </td>
                                <td>{{ $site->type }}</td>
                                <td>{{ $site->status }}</td>
                                <td>{{ $site->created_at->format('d/m/Y') }}</td>
                                <td>{{ $site->updated_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="/site/delete/{{ $site->id }}" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div><!--./row-->
</div>
@endsection
