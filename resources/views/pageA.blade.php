<h1>Welcome, {{ $user->username }}</h1>
<p>Your unique link is active until: {{ $user->link_expiry }}</p>


<form action="/user/{{ $userLink->unique_link }}/generate-link" method="POST">
    @csrf
    <button type="submit">Generate New Link</button>
</form>

<form action="/user/{{ $userLink->unique_link }}/deactivate-link" method="POST">
    @csrf
    <button type="submit">Deactivate Link</button>
</form>

<form action="/user/{{ $userLink->unique_link }}/imfeelinglucky" method="POST">
    @csrf
    <button type="submit">Im Feeling Lucky</button>
</form>

<a href="/user/{{ $userLink->unique_link }}/history">View History</a>
