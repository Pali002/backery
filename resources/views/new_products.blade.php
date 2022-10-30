<h1>Töltse ki a mezőket</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

<form action="submit-product" method="get">
    {{csrf_field()}}
    <p>
        <label for="">Név: </label>
        <input type="text" name="name" placeholder="Név">
    </p>
    <p>
        <label for="">Ár: </label>
        <input type="text" name="price" placeholder="Ár">
    </p>
    <p>
        <label for="">Típus: </label>
        <input type="text" name="type" placeholder="Típus">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>