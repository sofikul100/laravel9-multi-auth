
@extends('admin.layouts.app')
@section('title')

Ecommerce-Edit-Categories

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
                            <a href="{{route('categorie.index')}}" class="btn btn-success text-white"> View All Categories </a>
                        </div>
                        <div class="card-body">
                          <form action="{{route('categorie.update',$categorie->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                                     <label for="categorie" style="color:black">Categorie Name </label>
                                     <input type="text" value="{{$categorie->categorie_name}}" class="form-control @error('categorie_name') is-invalid @enderror" name="categorie_name" placeholder="Inter categorie name..">
                                     @error('categorie_name')
                                      <small style="color:red">{{$message}}</small>
                                     @enderror
                                     <br/>

                                     <label for="categorie" style="color:black">Categorie Description </label>
                                     <input type="text"  class="form-control @error('categorie_description') is-invalid @enderror " value="{{$categorie->categorie_description}}" name="categorie_description" placeholder="Inter categorie name..">
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
                                     <small>Prev Icon : </small>
                                     <img src="{{asset('categorie_images')}}/{{$categorie->categorie_icon}}" alt="prev image" style="width:70px;height:60px">
                                     <br/>

                                     <label for="show_home_page" style="color:black"> Show on Homepage </label>
                                     <select name="show_home_page" class="form-control">
                                         <option value="1" @if($categorie->show_home_page == 1) selected='' @endif> Yes </option>
                                         <option value="0" @if($categorie->show_home_page == 0) selected='' @endif> No </option>
                                     </select><br/>
                                    <button type="submit" class="btn btn-success">Update</button>
                        </form>
                        </div>
                    </div>

</div>
@endsection
