$('document').ready(function() {
    getNote();
}); // sau khi document load xong mới dc chạy hàm getNote()

function getNote() {
    $('.table-body').html('');
    $.get('/api/notes', function( notes ) {
        notes.forEach((note) => {
            $('.table-body').append(`
        <tr>
        <td>${note.title}</td>
        <td>${note.description}</td>
        <td>
        <button type="button" class="btn btn-primary" onclick = "editNote('${note.id}', '${note.title}', '${note.description}')" > Edit </button>
        <button type="button" class="btn btn-success" onclick = "removeNote(${note.id})" > Delete </button>
        <button type="button" class="btn btn-info" onclick = "showNote( '${note.title}', '${note.description}')" > Show</button>
        </td>
        </tr>`);
        });

    });
}

function resetAddInput() {
    $('#add-title').val('');
    $('#add-description').val('');
}

function showNote( title, description) {
    $('#showModal').modal('show');

    $('#show-title').val(title);
    $('#show-description').val(description);
}

function editNote( id, title, description ) {
    $('#editModal').modal('show');

    $('#edit-id').val(id);
    $('#edit-title').val(title);
    $('#edit-description').val(description);
}



function editOneNote() {
    let id = $('#edit-id').val();
    let data = {title: $('#edit-title').val(),  description: $('#edit-description').val()};
    $.ajax({
        type: 'PUT',
        url: '/api/notes/' + id,
        contentType: 'application/json',
        data: JSON.stringify(data), // access in body
    }).done(function (data) {
        $('#editModal').modal('hide');
        getNote();
    }).fail(function (data) {
        $('#validation-errors-edit').html('');
        $.each(data.responseJSON.errors, function(key,value) {
            $('#validation-errors-edit').append('<div class="alert alert-danger">'+value+'</div');
        });
    });
}
function removeNote( noteId ) {
    if (confirm('Are you sure ?')) {
        $.ajax({
            url: '/api/notes/' + noteId,
            method: 'DELETE',
            contentType: 'application/json',
            success: function(result) {
                getNote();
            },
            error: function(request,msg,error) {
                // handle failure
            }
        });
    }
}

function createNote() {
    $.post('/api/notes', {title: $('#add-title').val(), description: $('#add-description').val()})
        .done(function(data) {
            $("#addModal").modal('hide');
            getNote();
            resetAddInput();
        })
        .fail(function(data) {
            $('#validation-errors-create').html('');
            $.each(data.responseJSON.errors, function(key,value) {
                $('#validation-errors-create').append('<div class="alert alert-danger">'+value+'</div>');
            });
        });




}
