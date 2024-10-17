<form action="/register" method="POST">
    @csrf
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    
    <label for="phonenumber">Phone number:</label>
    <input type="text" name="phonenumber" required>

    <button type="submit">Register</button>
</form>
