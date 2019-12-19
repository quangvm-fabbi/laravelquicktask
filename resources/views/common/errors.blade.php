@if (count($errors) > config('configtasks.zero'))
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>{{ trans('setting.whoops') }}</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
