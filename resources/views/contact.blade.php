@extends('layouts.app')
@section('content')
      <div class="container">
         <h1>PHONE BOOK</h1>
         <a class="btn btn-primary btn-nueva" data-toggle="modal" data-target="#addModal"><b>+</b> Add contact</a>
         <br>
         <br>
         <table class="table table-bordered grocery-crud-table table-hover">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Phone number</th>
                  <th>Email</th>
                  <th></th>
               </tr>
            </thead>
            <tbody class="table-body">
            </tbody>
         </table>
      </div>
      <!-- Add Modal -->
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add new contact</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="form-group">
                     <label for="">Name</label>
                     <input type="text" class="form-control"  id="add-name" name="" value="">
                  </div>
                  <div class="form-group">
                     <label for="">PhoneNumber</label>
                     <input type="text" class="form-control" id="add-phone-number" name="" value="">
                  </div>
                  <div class="form-group">
                     <label for="">Email</label>
                     <input type="text" class="form-control" id="add-email" name="" value="">
                  </div>
               </div>
               <div id="validation-errors-create">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick = "createOneContact()" >Add contact</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Show Infomation Modal -->
      <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Contact Infomation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="form-group">
                     <label for="">Name</label>
                     <input type="text" class="form-control"  id="show-name" disabled name="" value="">
                  </div>
                  <div class="form-group">
                     <label for="">PhoneNumber</label>
                     <input type="text" class="form-control" id="show-phone-number" disabled name="" value="">
                  </div>
                  <div class="form-group">
                     <label for="">Email</label>
                     <input type="text" class="form-control" id="show-email" name="" disabled value="">
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
                  <h5 class="modal-title" id="exampleModalLabel">Edit Contact Information</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <input type="hidden" class="form-control"  id="edit-id"  name="" value="">
                  <div class="form-group">
                     <label for="">Name</label>
                     <input type="text" class="form-control"  id="edit-name"  name="" value="">
                  </div>
                  <div class="form-group">
                     <label for="">PhoneNumber</label>
                     <input type="text" class="form-control" id="edit-phone-number"  name="" value="">
                  </div>
                  <div class="form-group">
                     <label for="">Email</label>
                     <input type="text" class="form-control" id="edit-email" name=""  value="">
                  </div>
               </div>
               <div id="validation-errors-edit">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick = "editOneContact()" >Save</button>
               </div>
            </div>
         </div>
      </div>
   <script type="text/javascript" src="{{asset('/js/phone_book.js')}}"></script>
@endsection