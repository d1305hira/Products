<h1>残業申請</h1>

<div class="page_content">
  <div class="header_tab">
    <a class="tab {{ $tab === 'tab1' ? 'active' : '' }}" href="{{route('req_ot',['tab' => 'tab1'])}}">tab1</a>
    <a class="tab {{ $tab === 'tab2' ? 'active' : '' }}" href="{{route('req_ot',['tab' => 'tab2'])}}">tab2</a>
  </div>
  <div class="content">
  @if($tab === 'tab1')
    <form method="POST" action="{{route('req_ot_confirm')}}">
    @csrf
    <div class="day">
      <label for="date">日付</label>
        <select class="date" type="text" name="date">
          @foreach ($dates as $d)
          <option value="{{$d}}">{{$d}}</option>
          @endforeach
        </select>
    </div>
    <div class="time">
      <label for="time">残業時間</label>
      <input class="ot_start_hour" type="text" name="ot_start_hour" list="hour_list" placeholder="時">
      <span>:</span>
      <input class="ot_start_min" type="text" name="ot_start_min" list="min_list" placeholder="分">
      <span>~</span>
      <input class="ot_end_hour" type="text" name="ot_end_hour" list="hour_list" placeholder="時">
      <span>:</span>
      <input class="ot_end_min" type="text" name="ot_end_min" list="min_list" placeholder="分">

      <datalist id="hour_list">
        @for($i = 0; $i < 24; $i++)
          <option value="{{ sprintf('%02d' ,$i)}}"></option>
        @endfor
      </datalist>
      <datalist id="min_list">
        <option value="00"></option>
        <option value="15"></option>
        <option value="30"></option>
        <option value="45"></option>
      </datalist>
    </div>
    <div class="reason">
      <label for="reason">申請理由</label>
      <textarea class="reason" type="text" name="reason"></textarea>
    </div>
    <div class="confirm_button">
      <button type="submit" class="button">申請する</button>
    </div>
  </div>
  @elseif($tab === 'tab2')
  <form method="POST" action="{{route('req_ot_confirm')}}">
    @csrf
    <div class="day">
      <label for="date">日付</label>
        <select class="date" type="text" name="date">
          @foreach ($dates as $d)
          <option value="{{$d}}">{{$d}}</option>
          @endforeach
        </select>
    </div>
    <div class="time">
      <div class="ot_start">
        <label for="time">残業開始時間</label>
        <input class="ot_start_hour" type="text" name="ot_start_hour" list="hour_list" placeholder="時">
        <span>:</span>
        <input class="ot_start_min" type="text" name="ot_start_min" list="min_list" placeholder="分">

        <datalist id="hour_list">
          @for($i=0 ; $i < 24; $i++)
            <option value="{{ sprintf('%02d' ,$i)}}"></option>
          @endfor
        </datalist>
        <datalist id="min_list">
          <option value="00"></option>
          <option value="15"></option>
          <option value="30"></option>
          <option value="45"></option>
        </datalist>
      </div>
      <div class="ot_span">
        <label>残業時間</label>
        <input type="text">
        分
      </div>
    <div class="reason">
      <label for="reason">申請理由</label>
      <textarea class="reason" type="text" name="reason"></textarea>
    </div>
    <div class="confirm_button">
      <button type="submit" class="button">申請する</button>
    </div>
  </div>
  @endif
</div>

<a href="{{route('index')}}">トップへ</a>