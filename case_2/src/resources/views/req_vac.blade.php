<h1>休暇申請</h1>

<div class="date">
  <select class="date" name="date">
  @foreach($dates as $d)
    <option value="{{$d}}">{{$d}}</option>
  @endforeach
  </select>
</div>


<a href="{{route('index')}}">トップへ</a>