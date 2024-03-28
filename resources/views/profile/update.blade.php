<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PUT')
    <!-- Your form fields here -->
    <button type="submit">Update Profile</button>
</form>