<div>

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-12 col-md-auto mb-3 mb-md-0">
                <span class="avatar avatar-md" style="background-image: url({{ $author->picture }})"></span>
            </div>
            <div class="col-12 col-md">
                <h2 class="page-title">{{ $author->name }}</h2>
                <div class="page-subtitle">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <a href="#" class="text-reset"><span>@</span>{{  $author->username }} | {{ $author->authorType->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-auto mt-sm-2 mt-xs-3 py-xs-2">
                <input type="file" name="file" id="changeAuthorFile" class="d-none" onchange="this.dispatchEvent(new InputEvent('input'))">
                <a href="#" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('changeAuthorFile').click()">
                    Change Picture
                </a>
            </div>
        </div>
    </div>


</div>
