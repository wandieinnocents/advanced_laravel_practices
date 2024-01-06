@extends('layouts.app')

@section('styles')
<style>
    .hidden {
      display: none;
    }
  </style>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.one.post') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">Step 1: Basic Info</div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
                            
                            <div class="form-group">
                                <label for="title">Product Name:</label>
                                <input type="text" value="{{ $product->name ?? '' }}" class="form-control" id="taskTitle"  name="name">
                            </div>
                            <div class="form-group">
                                <label for="description">Product Amount:</label>
                                <input type="text"  value="{{{ $product->amount ?? '' }}}" class="form-control" id="productAmount" name="amount"/>
                            </div>

                            <div class="form-group">
                                <label for="selectOption">Select an option:</label>
                                <select id="selectOption" onchange="showFields()">
                                <option value="null">-- Select Outcome -- </option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                                </select>
                            </div>

                            {{-- fields to show for outcome of birth --}}

                              <div id="option1Fields" class="hidden">
                                <!-- Fields for option 1 -->
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Outcome</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td> <input type="text" id="field1" name="field1" value="data here"></td>
                                        <td> <input type="text" id="field1" name="field1" value="data here"></td>
                                        <td> <input type="text" id="field1" name="field1" value="data here"></td>
                                      </tr>
                                      
                                      
                                    </tbody>
                                </table>
                               
                               
                              </div>
                          
                              <div id="option2Fields" class="hidden">
                                <!-- Fields for option 2 -->
                                <label for="field2">Field 2:</label>
                                <input type="text" id="field2" name="field2">

                              </div>
                          
                              <div id="option3Fields" class="hidden">
                                <!-- Fields for option 3 -->
                                <label for="field3">Field 3:</label>
                                <input type="text" id="field3" name="field3">
                              </div>


                            {{-- end of fields to show for outcome of birth --}}
   
                            <div class="form-group">
                                <label for="description">Product Description:</label>
                                <textarea type="text"  class="form-control" id="taskDescription" name="description">{{{ $product->description ?? '' }}}</textarea>
                            </div>
                          
                    </div>
  
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    function showFields() {
      // Hide all fields
      document.getElementById('option1Fields').classList.add('hidden');
      document.getElementById('option2Fields').classList.add('hidden');
      document.getElementById('option3Fields').classList.add('hidden');

      // Get the selected option
      var selectedOption = document.getElementById('selectOption').value;

      // Show the fields based on the selected option
      document.getElementById(selectedOption + 'Fields').classList.remove('hidden');
    }
  </script>

  @endsection