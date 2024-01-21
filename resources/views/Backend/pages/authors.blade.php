@extends('Backend.layouts.pages-layout')
@section('pageTitle',isset($PageTitle) ? $PageTitle : 'Authors')
@section('content')


@livewire('authors')


@endsection

@push('scripts')
 <script>
    // $(window).on('hidden.bs.modal', function(){
    //     Livewire.emit('resetForms')
    // });

    // window.addEventListener('hide_add_author_modal',function(event){
    //     $('#add_author_modal').modal('hide');
    // });

    // window.addEventListener('showEditAuthorModal',function(event){
    //     $('#edit_author_modal').modal('show');
    // });

    // window.addEventListener('hide_edit_author_modal',function(event){
    //     $('#edit_author_modal').modal('hide');
    // });

    var $j = jQuery.noConflict();

$j(window).on('hidden.bs.modal', function(){
    Livewire.emit('resetForms');
});

window.addEventListener('hide_add_author_modal', function(event){
    $j('#add_author_modal').modal('hide');
});

window.addEventListener('showEditAuthorModal', function(event){
    $j('#edit_author_modal').modal('show');
});

window.addEventListener('hide_edit_author_modal', function(event){
    $j('#edit_author_modal').modal('hide');
});


    window.addEventListener('deleteAuthor',function(event){
        swal.fire({
            title:event.detail.title,
            imageWidth:48,
            imageHeight:48,
            html:event.detail.html,
            showCloseButton:true,
            showCancelButton:true,
            confirmButtonText:'Yes,Delete',
            cancelButtonColor:'#d33',
            confirmButtonColor:'#3085d6',
            width:300,
            allowOutsideClick:false
        }).then(function(result){
            if(result.value){
                Livewire.emit('deleteAuthorAction',event.detail.id);
            }
        });

    });


    </script>
@endpush
