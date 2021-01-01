@extends('layouts.admin')

@section('content')
        
          <div class="content-wrapper">
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Gallery Travel</h4>
                    <a href="{{route('gallery.create')}}" class="btn btn-sm btn-primary shadow-sm">Tambah</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Travel </th>
                            <th> Gambar </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @forelse ($items as $item)
                            <th>{{$item->id}}</th>
                            <th>{{$item->travel_package->title}}</th>
                            <th><img src="{{$item->image}}" alt="" style="width: 150px" class="img-thumbnail"></th>
                            <th>
                                <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                                      <i class="mdi mdi-grease-pencil"></i>
                                  </a>
                                  <form action="{{ route('gallery.destroy', $item->id) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">
                                          <i class="mdi mdi-delete"></i>
                                      </button>
                                  </form>
                            </th>
                            </tr>
                            @empty
                            <td colspan="4" class="textcenter">
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