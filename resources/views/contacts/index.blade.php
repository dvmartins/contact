@extends('contacts.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Contact List</div>
            <div class="card-body">
                <a href="{{ route('contacts.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Contact</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $contact)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->contact }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this contact?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Contact Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $contacts->links() }}

            </div>
        </div>
    </div>
</div>

@endsection
