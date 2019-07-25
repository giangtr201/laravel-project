@extends('layouts.app')
@section('content')
      <div class="container">
         <h1>BILLS</h1>
         <!-- Button trigger modal -->
         <a class="btn btn-info btn-nueva" data-toggle="modal" data-target="#addModal" style="float:right">Add Bill</a>

         <br>
         <br>
         <table class="table table-bordered grocery-crud-table table-hover table-responsive">
            <thead>
               <tr>
                  <th style="width: 20%," >Title</th>
                  <th style="width: 55%">Description</th>
                  <th style="width: 25%">Action</th>
               </tr>
            </thead>
            <tbody class="table-body">
            </tbody>
         </table>
      </div>

      <!-- Add Modal -->
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
         <div class="modal-dialog" role="document">

            <!-- Modal content -->
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Add new note</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="form-group">
                     <label for="">Title</label>
                     <input type="text" class="form-control"  id="add-title" name="" value="">
                  </div>
                  <div class="form-group">
                     <label for="">Description</label>
                     <input type="text" class="form-control" id="add-description" name="" value="">
                  </div>
               </div>
               <div id="validation-errors-create">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick = "createNote()" >Add note</button>
               </div>
            </div>

         </div>
      </div>

      <!-- Show Infomation Modal -->
      <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Note Infomation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
                <div class="modal-body">
                  <div class="form-group">
                     <label for="">Title</label>
                     <input type="text" class="form-control"  id="show-title" disabled name="" value="">
                  </div>
                  <div class="form-group">
                     <label for="">Description</label>
                     <input type="text" class="form-control" id="show-description" disabled name="" value="">
                  </div>
               </div>
               <div id="validation-errors">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Edit Infomation Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Note Information</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <input type="hidden" class="form-control"  id="edit-id"  name="" value="">
                  <div class="form-group">
                     <label for="">Title</label>
                     <input type="text" class="form-control"  id="edit-title"  name="" value="">
                  </div>
                  <div class="form-group">
                     <label for="">Description</label>
                     <input type="text" class="form-control" id="edit-description"  name="" value="">
                  </div>
               </div>
               <div id="validation-errors-edit">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick = "editOneNote()" >Save</button>
               </div>
            </div>
         </div>
      </div>
      </div> <script type="text/javascript" src="{{asset('/js/note.js')}}"></script>

@endsection
@section('nav')
   <ul class="nav">
      <li class="nav-item">
         <a class="nav-link" href="/bills">Bills</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="/customers">Customers</a>
      </li>
   </ul>
@endsection()

