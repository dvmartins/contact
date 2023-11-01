@extends('contacts.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Contact Information
                </div>
                <div class="float-end">
                    <a href="{{ route('contacts.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $contact->name }}
                    </div>
                </div>

                <div class="row">
                    <label for="contact" class="col-md-4 col-form-label text-md-end text-start"><strong>Contact:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $contact->contact }}
                    </div>
                </div>

                <div class="row">
                    <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $contact->email }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
