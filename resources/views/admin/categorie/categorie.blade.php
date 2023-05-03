
@extends('admin.layouts.app')
@section('title')

Ecommerce-Categories

@endsection


@php

 $page = "Categories"

@endphp


@section('main_part')

<div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="card-header py-3 d-flex flex-row justify-content-between align-items-center">
                            <h4 class="m-0 font-weight-bold" style="color:black">@php echo $page @endphp</h4>
                            <a href="#" class="btn text-light btn-success" style="font-weight:bold"  data-toggle="modal" data-target="#categorie_model"> Add Categorie </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead style="background:black">
                                        <tr>
                                            <th class="text-white">SL.</th>
                                            <th class="text-white">Categorie Name</th>
                                            <th class="text-white">Categorie Des</th>
                                            <th class="text-white">Categorie Icon</th>
                                            <th class="text-white">Is Show</th>
                                            <th class="text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $key => $categorie)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$categorie->categorie_name}}</td>
                                            <td>{{$categorie->categorie_description}}</td>
                                            <td class="text-center">
                                                <img src="{{asset('categorie_images')}}/{{$categorie->categorie_icon}}" style="width:70px; height:60px" alt="cat-image">
                                            </td>
                                            <td>
                                                @if ($categorie->show_home_page == 1)
                                                <span class="badge badge-success">True</span>
                                                @else
                                                <span class="badge badge-warning">false</span>
                                                @endif
                                                
                                                
                                            </td>
                                            <td>
                                                <a href="{{route('categorie.edit',$categorie->id)}}" class="btn btn-primary btn-sm edit" >
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                
                                                <a href="{{route('categorie.destroy',$categorie->id)}}" class="btn btn-danger btn-sm" id="delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>




<div class="modal fade" id="categorie_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="{{route('categorie.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Add New Categorie </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                     <label for="categorie" style="color:black">Categorie Name </label>
                                     <input type="text" value="{{old('categorie_name')}}" class="form-control @error('categorie_name') is-invalid  @enderror" name="categorie_name" placeholder="Inter categorie name..">
                                     @error('categorie_name')
                                      <small style="color:red">{{$message}}</small>
                                     @enderror
                                     <br/>

                                     <label for="categorie" style="color:black">Categorie Description </label>
                                     <input type="text" c class="form-control @error('categorie_description') is-invalid @enderror" name="categorie_description" placeholder="Inter categorie name..">
                                     @error('categorie_description')
                                      <small style="color:red">{{$message}}</small>
                                     @enderror
                                     <br/>

                                     <label for="categorie" style="color:black">Categorie Icon </label>
                                     <input type="file"  class="form-control @error('categorie_icon') is-invalid @enderror" name="categorie_icon" placeholder="Inter categorie name..">
                                     @error('categorie_icon')
                                      <small style="color:red">{{$message}}</small>
                                     @enderror
                                     <br/>

                                     <label for="show_home_page" style="color:black"> Show on Homepage </label>
                                     <select name="show_home_page" class="form-control">
                                         <option value="1"> Yes </option>
                                         <option value="0"> No </option>
                                     </select>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-dark">Add Now</button>
                                  </div>
                                </div>
                              </div>
                        </form>
                      </div>




{{-- edit model start  --}}



</div>
@endsection
