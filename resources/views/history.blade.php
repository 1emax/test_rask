<h1>Last 3 results:</h1>

<ul>
    @foreach ($history as $result)
        <li>Result: {{ $result->result }}, Win Amount: {{ $result->win_amount }}</li>
    @endforeach
</ul>

<a href="/user/{{ $userLink->unique_link }}">Back to User Page</a>