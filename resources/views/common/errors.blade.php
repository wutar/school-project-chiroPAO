@if ($errors->any())
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Oeps! Daar ging iets mis</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif