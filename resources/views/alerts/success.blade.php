@if (Session::has('mensaje'))
    <br>
    <div class="exito">
        <ul>
            <li>{{Session::get('mensaje')}}</li>
        </ul>
    </div>
@endif
