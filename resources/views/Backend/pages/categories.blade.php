@extends('Backend.layouts.pages-layout')
@section('PageTitle',isset($PageTitle) ? $PageTitle : 'Category')
@section('content')

<div class="page-header d-print-none">
    <div class="row align-item center">
        <div class="col">
            <h2 class="page-title">
                Category & Subcategory
            </h2>
        </div>
    </div>
</div>

@livewire('categories')

@endsection

@push('scripts')

<script>
    document.addEventListener('livewire:load', function () {
        // ...

        window.addEventListener('showCategoriesModal', function (event) {
            var categoryModal = new bootstrap.Modal(document.getElementById('category_modal'));
            categoryModal.show();
        });

        window.addEventListener('hideCategoriesModal', function (event) {
            var categoryModal = new bootstrap.Modal(document.getElementById('category_modal'));
            categoryModal.hide();
        });

        window.addEventListener('showSubCategoriesModal', function (event) {
            var subcategoryModal = new bootstrap.Modal(document.getElementById('subcategory_modal'));
            subcategoryModal.show();
        });

        window.addEventListener('hideSubCategoriesModal', function (event) {
            var subcategoryModal = new bootstrap.Modal(document.getElementById('subcategory_modal'));
            subcategoryModal.hide();
        });

        document.getElementById('subcategory_modal').addEventListener('hidden.bs.modal', function (e) {
            Livewire.emit('resetModalForm');
        });
    });
</script>


@endpush
