@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Kategori </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col">
                      <h4 class="card-title">Data Produk</h4>
                      </div>
                      <div class="col text-right">
                      <a href="" class="btn btn-primary">Tambah</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered table-hovered" id="table">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th width="15%">Aksi</th>
                              </tr>
                        </thead>

                        <tbody>
                            @if(count($skills))
                                @foreach($skills as $skill)
                                    <tr>
                                        <td>{{ $skill->name }}</td>
                                        <td>
                                            <img src="{{ asset('storage/'.$skill->image) }}" alt="">
                                        </td>
                                        <td align="center">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="" class="btn btn-warning btn-sm">
                                                    <i class="mdi mdi-tooltip-edit"></i>
                                                </a>
                                                <a href="" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" align="center">Tidak ada data</td>
                                </tr>
                            @endif
                            
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
