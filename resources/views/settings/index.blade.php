@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seetings</div>

                <div class="card-body">
 
 
                                    @if ($settings->count()>0)
                                        
                                    
                        <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"> Blog Name </th>
                                    <th scope="col"> Phone Number  </th>
                                    <th scope="col"> Blog  Email  </th>
                                    <th scope="col"> Address  </th>
                                    
                                
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($settings as $setting)
                                    <tr>
                                           
                                            <th scope="row">{{$settings->blog_name}}</th>
                                            <th scope="row">{{$settings->phone_number}}</th>
                                            <th scope="row">{{$settings->blog_email}}</th>
                                            <th scope="row">{{$settings->address}}</th>
                                            
                                          </tr>
                                    @endforeach
                                 
                                    @else
                                    <p scope="row" class="text-center">No  posts</p>  
                                    @endif
                                </tbody>
                              </table>

                             


                     

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
