<form action="{{route('users.store')}}" method="POST">
  {{csrf_field()}}
  <input type="hidden" PUT>
  <input type="text" name="ten">
  <input type="text" name="email">
  <button type="submit">submit</button>
</form>