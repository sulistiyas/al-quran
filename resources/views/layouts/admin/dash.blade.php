<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}" x-data>
    @csrf
admin
    <input type="submit" value="Logout">
</form>