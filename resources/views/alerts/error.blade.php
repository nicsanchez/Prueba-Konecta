@if (Session::has('mensaje_error'))
    <br>
    <div class="errores">
        <ul>
            <li>{{Session::get('mensaje_error')}}</li>
        </ul>
    </div>
@endif
