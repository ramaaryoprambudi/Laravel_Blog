<div>
    <div class="row mt-3">
        <div class="col-md-6 mb-2">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <h4>Category</h4>
                        <li class="nav-item ms-auto">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#category_modal" wire:click.prevent='resetModalForm'>Add Category</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table table-striped">
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Number Subcategory</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Categories as $category)
                                    <tr>
                                        <td>{{ $category->category_name }}</td>
                                        <td class="text-muted">
                                            {{ $category->subcategories->count() }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-primary" wire:click.prevent='editCategory({{ $category->id }})' data-bs-target="#category_modal" data-bs-dismiss="modal">Edit</button> &nbsp;
                                                <button type="button" class="btn btn-sm btn-danger" wire:click.prevent='deleteCategory({{ $category->id }})'>Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3"><span class="text-danger">No category Found!</span></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <h4>Subcategory</h4>
                        <li class="nav-item ms-auto">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#subcategory_modal" wire:click.prevent='resetModalForm'>Add Category</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table table-striped">
                            <thead>
                                <tr>
                                    <th>SubCategory Name</th>
                                    <th>Parent Category</th>
                                    <th>Name Posts</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($subCategories as $subcategory)
                                    <tr>
                                        <td>{{ $subcategory->subcategory_name }}</td>
                                        <td class="text-muted">
                                            {{ $subcategory->parentcategory->category_name }}
                                        </td>
                                        <td>
                                            {{ $subcategory->posts->count() }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-primary" wire:click.prevent='editSubCategory({{ $subcategory->id }})' data-bs-target="#subcategory_modal" data-bs-dismiss="modal">Edit</button> &nbsp;
                                                <button type="button" class="btn btn-sm btn-danger" wire:click.prevent='deleteSubcategory({{ $subcategory->id }})'>Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            <span class="text-danger">No subcategory found.</span>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <!-- Modal Category -->
     <div wire:ignore.self class="modal modal-blur fade" id="category_modal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form class="modal-content" method="POST"
                  @if($updateCategoryMode)
                  wire:submit.prevent='updateCategory()'
                  @else
                  wire:submit.prevent='addCategory'
                  @endif
            >
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">{{ $updateCategoryMode ? 'Update Category' : 'Add Category' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($updateCategoryMode)
                    <input type="hidden" wire:model="selected_category_id">
                    @endif
                    <div class="mb-3">
                        <label class="form-label mb-2">Category Name</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Enter category name" wire:model="category_name">
                        <span class="text-danger">@error('category_name'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">{{ $updateCategoryMode ? 'Update Category' : 'Save category'}}</button>
                </div>
            </form>
        </div>
    </div>



     <!-- Modal Subcategory -->
     <div wire:ignore.self class="modal modal-blur fade" id="subcategory_modal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <form class="modal-content" method="POST"
                  @if ($updateSubCategoryMode)
                  wire:submit.prevent='updateSubCategory()'
                  @else
                  wire:submit.prevent='addSubCategory()'
                  @endif
            >
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">{{ $updateSubCategoryMode ? 'Update SubCategory' : 'Add SubCategory' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($updateSubCategoryMode)
                    <input type="hidden" wire:model='selected_subcategory_id'>
                    @endif
                    <div class="mb-3">
                        <div class="form-label">Parent Category</div>
                        <select class="form-select" wire:model='parent_category'>
                            @if (!$updateSubCategoryMode)
                            <option value="">No Selected</option>
                            @endif
                            @foreach ( \App\Models\Category::all() as $category )
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('parent_category'){{ $message }}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-2">SubCategory Name</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Enter SubCategory Name"
                               wire:model="subcategory_name">
                        <span class="text-danger">@error('subcategory_name'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">{{ $updateSubCategoryMode ? 'Update' : 'Save' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
