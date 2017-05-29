
<form action="/produtos/{{ $detailpage->id }}" method="POST">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="name" value="Apagar">
        </form>
        <hr>