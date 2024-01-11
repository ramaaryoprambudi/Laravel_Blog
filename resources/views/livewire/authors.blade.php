<div>


    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col-12 col-md-auto">
                <h2 class="page-title fs-2 d-none d-md-flex">
                    Authors
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="d-flex">
                    <input type="search" class="form-control d-inline-block w-100 w-md-9 me-3" placeholder="Search authors user…" wire:model='search'>
                    @csrf
                    <a href="#" class="btn btn-primary" data-bs-target="#add_author_modal" data-bs-toggle="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                        New authors
                    </a>
                </div>
            </div>
        </div>
      </div>


        <div class="mt-3">
          <div class="row row-cards">

            @forelse ($authors as $author)



            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-body p-4 text-center">
                  <span class="avatar avatar-xl mb-3 rounded" style="background-image: url({{ $author->picture }})"></span>
                  <h3 class="m-0 mb-1"><a href="#">{{ $author->name }}</a></h3>
                  <div class="text-muted">{{ $author->email }}</div>
                  <div class="mt-3">
                    <span class="badge bg-purple-lt">{{ $author->authorType->name }}</span>
                  </div>
                </div>
                <div class="d-flex">

                  <a href="#" wire:click.prevent='editAuthor({{ $author }})'  class="card-btn">Edit</a>
                  <a href="#"  wire:click.prevent='deleteAuthor({{ $author }})' class="card-btn">Delete</a>
                </div>
              </div>
            </div>

            @empty
            <span class="text-danger">No Author Found!</span>
            @endforelse

          </div>
        </div>

        <div class="ro mt-4">
            {{ $authors->links('livewire::simple-bootstrap') }}
        </div>



        {{-- Modals --}}

        <div wire:ignore.self class="modal modal-blur fade" id="add_author_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add author</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form wire:submit.prevent="addAuthor()" method="post">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="example-password-input" placeholder="Input placeholder" wire:model="name">
                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="example-password-input" placeholder="Input placeholder" wire:model="email">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="example-password-input" placeholder="Input placeholder" wire:model="username">
                        <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                      </div>
                      <div class="form-group mb-3">
                        <label class="form-labe">Author Type</label>
                      </div>
                     <div>
                        <select name="" id="" class="form-select" wire:model="author_type">
                            <option value="">--- No Selected ---</option>
                            @foreach (\App\Models\Type::all() as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                          </select>
                          <span class="text-danger mb-3">@error('author_type'){{ $message }}@enderror</span>
                     </div>

                      <div class="mt-3">
                        <div class="form-label">Is direct publish?</div>
                        <div>
                          <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radios-inline" value="0" name="direct_publisher" wire:model="direct_publisher">
                            <span class="form-check-label">No</span>
                          </label>
                          <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="1" name="direct_publisher" wire:model="direct_publisher">
                            <span class="form-check-label">Yes</span>
                          </label>
                        </div>
                        <span class="text-danger">@error('direct_publisher'){{ $message }} @enderror</span>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" data-bs-target="add_author_modal">Save Authors</button>
                      </div>
                  </form>
              </div>
            </div>
            </div>
          </div>



          <div wire:ignore.self class="modal modal-blur fade" id="edit_author_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit author</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form wire:submit.prevent="updateAuthor()" method="post">
                    @csrf
                    <input type="hidden" wire:model='selected_author_id'>
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="example-password-input" placeholder="Input placeholder" wire:model="name">
                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="example-password-input" placeholder="Input placeholder" wire:model="email">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="example-password-input" placeholder="Input placeholder" wire:model="username">
                        <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                      </div>
                      <div class="form-group mb-3">
                        <label class="form-labe">Author Type</label>
                      </div>
                     <div>
                        <select name="" id="" class="form-select" wire:model="author_type">
                            @foreach (\App\Models\Type::all() as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                          </select>
                          <span class="text-danger mb-3">@error('author_type'){{ $message }}@enderror</span>
                     </div>

                      <div class="mt-3">
                        <div class="form-label">Is direct publish?</div>
                        <div>
                          <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radios-inline" value="0" name="direct_publisher" wire:model="direct_publisher">
                            <span class="form-check-label">No</span>
                          </label>
                          <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="1" name="direct_publisher" wire:model="direct_publisher">
                            <span class="form-check-label">Yes</span>
                          </label>
                        </div>
                        <span class="text-danger">@error('direct_publisher'){{ $message }} @enderror</span>
                      </div>

                      <div class="mb-3">
                        <div class="form-label">Blocked</div>
                        <label class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" checked="" wire:model="blocked">
                          <span class="form-check-label"></span>
                        </label>
                      </div>


                      <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-bs-target="edit_author_modal" data-bs-dismiss="modal">Update Authors</button>
                      </div>
                  </form>
              </div>
            </div>
            </div>
          </div>


</div>
