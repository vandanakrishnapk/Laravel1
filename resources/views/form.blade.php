@extends('index');
@section('content');
<div>
    <form>
        <input type="text" placeholder="Username" required>
        <input type="date" placeholder="date" required>
        <input type="email" placeholder="EmailId" required>
        <input type="number" placeholder="Mobileno" required>
    </form>
</div>
@endsection