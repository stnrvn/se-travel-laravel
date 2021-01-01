@extends('layouts.admin')

@section('content')
        
          <div class="content-wrapper">
            
            @if ($errors->any())
              <div class="aler alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Paket Travel</h4>
                    {{-- <a href="" class="btn btn-sm btn-primary shadow-sm">aa</a> --}}
                    {{-- {{route('travel-package-create')}} --}}
                    <form action="{{route('travel-package.store')}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="title" value="{{old('title')}}">
                      </div>

                      <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Location" value="{{old('location')}}">
                      </div>

                     <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control">{{old('about')}}</textarea>
                     </div>

                     <div class="form-group">
                        <label for="featured_event">Featured_event</label>
                        <input type="text" class="form-control" name="featured_event" placeholder="Featured_event" value="{{old('featured_event')}}">
                      </div>

                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" class="form-control" name="language" placeholder="Language" value="{{old('language')}}">
                    </div>

                    <div class="form-group">
                        <label for="foods">Foods</label>
                        <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{old('foods')}}">
                    </div>

                    <div class="form-group">
                        <label for="departure_date">Depature Date</label>
                        <input type="date" class="form-control" name="departure_date" placeholder="Depature Date" value="{{old('departure_date')}}">
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{old('duration')}}">
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" placeholder="Type" value="{{old('type')}}">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price" value="{{old('price')}}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                      Simpan
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->

          <!-- partial -->
        
@endsection