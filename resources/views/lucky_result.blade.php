<h1>Result: {{ $random_number }}</h1>

@if ($random_number % 2 == 0)
    <p>Congratulations! You won {{ number_format($win_amount, 2) }}!</p>
@else
    <p>Sorry, you lost this time.</p>
@endif

<a href="/user/{{ $userLink->unique_link }}">Back to User Page</a>