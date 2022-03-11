@extends('layouts.admin')

@section('content')
    <div class="w-full bg-white p-4 flex items-center justify-between">
        <div class="flex flex-col gap-1">
            <span class="font-overpass text-3xl font-bold">Daftar Anggota</span>
        </div>
        <a href="{{ route('adminpage.user.create') }}" class="admin-button">Tambah Anggota</a>
    </div>
    <div class="w-full h-vh-90 flex items-center justify-center show-first">
        <img src="{{asset('svg/loading.svg')}}" class="animate-spin mb-24">
    </div>
    <div class="w-full flex flex-col gap-y-4 p-4 hide-first invisible">
        <div class="admin-card">
            <div class="col-span-12">
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>E-Mail</th>
                            <th>Kota</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->no_user }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->kota }}</td>
                                <td>
                                    <div class="flex items-center justify-center gap-2">
                                        <a target="blank" href="{{ route('adminpage.user.show', $user->no_user) }}"
                                            class="admin-button-info cursor-pointer">
                                            <span class="fa fa-fw fa-eye"></span>
                                        </a>
                                        <a target="blank" href="{{ route('adminpage.user.edit', $user->no_user) }}"
                                            class="admin-button-warning cursor-pointer">
                                            <span class="fa fa-fw fa-edit"></span>
                                        </a>
                                        <a onclick="event.preventDefault(); document.getElementById('delete-member-form-{{ $user->no_user }}').submit();"
                                            class="admin-button-danger cursor-pointer">
                                            <span class="fa fa-fw fa-times"></span>
                                        </a>
                                        <form action="{{ route('adminpage.user.destroy', $user->no_user) }}"
                                            id="delete-member-form-{{ $user->no_user }}" method="post">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                scrollX: true,
                "drawCallback": function(settings) {
                    $('.hide-first').removeClass('invisible');
                    $('.show-first').removeClass('flex').addClass('hidden');
                }
            });
        });
    </script>
@endsection