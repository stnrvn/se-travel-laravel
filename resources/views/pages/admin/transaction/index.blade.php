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
                    <h4 class="card-title">Transaksi</h4>
                      <table class="table">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Travel </th>
                            <th> User </th>
                            <th> Visa </th>
                            <th> Total </th>
                            <th> Status </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @forelse ($items as $item)
                            <td>{{$item->id}}</td>
                            <td>{{$item->travel_package->title}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->additional_visa}}</td>
                            <td>{{$item->transaction_total}}</td>
                            <td>{{$item->transaction_status}}</td>
                            <td>
                              <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                                      <i class="mdi mdi-eye"></i>
                                  </a>
                                <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                                      <i class="mdi mdi-grease-pencil"></i>
                                  </a>
                                  <form action="{{ route('transaction.destroy', $item->id) }}" method="post" class="d-inline">
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