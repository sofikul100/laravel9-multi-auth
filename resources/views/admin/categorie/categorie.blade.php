{{-- <x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in! as an Admin
                </div>
            </div>
        </div>
    </div>
</x-admin-layout> --}}
@extends('admin.layouts.app')
@section('title')

Ecommerce-Categories

@endsection
@section('main_part')

<div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="card-header py-3 d-flex flex-row justify-content-between align-items-center">
                            <h4 class="m-0 font-weight-bold" style="color:black">@php echo $page @endphp</h4>
                            <a href="#" class="btn text-white" style="background:black" data-toggle="modal" data-target="#categorie_model"> Add Categorie </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead style="background:black">
                                        <tr>
                                            <th class="text-white">SL.</th>
                                            <th class="text-white">Categorie Name</th>
                                            <th class="text-white">Categorie Icon</th>
                                            <th class="text-white">Is Show</th>
                                            <th class="text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architect</td>
                                            <td class="text-center">
                                                <img src="" style="width:70px; height:70px" alt="cat-image">
                                            </td>
                                            <td>
                                                <span class="badge badge-success">True</span>
                                                <span class="badge badge-warning">false</span>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="" class="btn btn-success btn-sm">
                                                    <i class="fa fa-thumbs-up"></i>
                                                </a>
                                                <a href="" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-thumbs-down"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm" id="delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>




                    <div class="modal fade" id="categorie_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="">
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
                                     <input type="text" class="form-control" name="categorie" placeholder="Inter categorie name..">
                                     <br/>
                                     <label for="categorie" style="color:black">Categorie Icon </label>
                                     <input type="file" class="form-control" name="categorie_icon" placeholder="Inter categorie name..">
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




</div>


@endsection
