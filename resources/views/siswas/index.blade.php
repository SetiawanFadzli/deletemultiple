@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>List of Siswas</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('siswas.destroy-multiple') }}" method="POST">
            @csrf
            @method('DELETE')
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="checkAll"></th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswas as $siswa)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $siswa->id }}"></td>
                            <td>{{ $siswa->name }}</td>
                            <td>{{ $siswa->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-danger">Delete Selected</button>
        </form>
    </div>

    <script>
        document.getElementById('checkAll').onclick = function() {
            var checkboxes = document.getElementsByName('ids[]');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        }
    </script>
@endsection
