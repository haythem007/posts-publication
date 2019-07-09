@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Category</div>

                <div class="card-body">
 
                                     
                      
                      <form method="post" action="{{ route('category.update',[$category->id]) }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label for="company-name">Name<span class="required">*</span></label>
                            <input   placeholder="Enter name"  
                                      id="company-name"
                                      required
                                      name="name"
                                      spellcheck="false"
                                      class="form-control"
                                      value="{{ $category->name }}"
                                       />
                        </div>


                       
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary"
                                   value="Submit"/>
                        </div>
                    </form>
                    


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

