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
                    <h4 class="card-title">Edit Paket Travel {{$item->title}}</h4>
                    {{-- <a href="" class="btn btn-sm btn-primary shadow-sm">aa</a> --}}
                    {{-- {{route('travel-package-create')}} --}}
                    <form action="{{route('transaction.update', $item->id)}}" method="POST">
                      @method('PUT')
                      @csrf
                      <div class="form-group">
                        <label for="transaction_status">Status</label>
                        <select name="transaction_status">
                        <option value="{{$item->transaction_status}}">
                          Jangan Ubah ({{$item->transaction_status}})
                            <option value="IN_CART">In Cart</option>
                            <option value="PENDING">Pending</option>
                            <option value="SUCCESS">Success</option>
                            <option value="CANCEL">Cancel</option>
                            <option value="FAILED">Failed</option>
                        </option>
                        </select>
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