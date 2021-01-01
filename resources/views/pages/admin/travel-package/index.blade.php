@extends('layouts.admin')

@section('content')
        
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="{{url('backend/template/assets/images/dashboard/Group126@2x.png')}}" class="gradient-corona-img img-fluid" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Paket Travel</h4>
                    <a href="{{route('travel-package.create')}}" class="btn btn-sm btn-primary shadow-sm">Tambah</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Title </th>
                            <th> Location </th>
                            <th> type </th>
                            <th> Departure Date </th>
                            <th> Type </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @forelse ($items as $item)
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->location}}</td>
                            <td>{{$item->type}}</td>
                            <td>{{$item->departure_date}}</td>
                            <td>{{$item->type}}</td>
                            <td>
                                <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                                      <i class="mdi mdi-grease-pencil"></i>
                                  </a>
                                  <form action="{{ route('travel-package.destroy', $item->id) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">
                                          <i class="mdi mdi-delete"></i>
                                      </button>
                                  </form>
                            </td>
                            </tr>
                            @empty
                            <td colspan="7" class="textcenter">
                                Data Kosong
                            </td>
                            @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->

          <!-- partial -->
        
@endsection