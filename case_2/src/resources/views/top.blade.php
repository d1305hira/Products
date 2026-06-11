<div class="time">
  <div id="time">
    {{$now->format('H時i分s秒')}}
  </div>
  <div id="date">
    {{$now->format('Y年m月d日')}}
  </div>
  <div class="status-display">
    {{ $status }}
  </div>
</div>
<div class="today_action">
  <div class="attendance_status">
    @if ($status === '勤務時間外')
    {{-- 出勤 --}}
      <form method="POST" action="{{ route('attendance')}}">
      @csrf
        <button type="submit" class="button_begin">出勤</button>
      </form>
    @elseif($status === '勤務中')
    {{-- 休憩開始 --}}
      <form method="POST" action="{{ route('break_bigin')}}">
      @csrf
        <button type="submit" class="button_break">休憩</button>
      </form>
    {{-- 退勤 --}}
    <form method="POST" action="{{route('attendance_end')}}">
    @csrf
      <button type="submit" class="button_end">退勤</button>
    </form>
    @elseif($status === '休憩中')
    {{-- 休憩終了 --}}
      <form method="POST" action="{{route('break_end')}}">
      @csrf
        <button type="submit" class="button_break">休憩終了</button>
      </form>
    @elseif($status === '勤務終了')
    {{-- 勤務終了 --}}
    <div class="work_end">本日の勤務は終了しました</div>
    @endif
  </div>
</div>
<div class="requests">
  <div class="req_info">
  </div>
  <div class="req_manu">
    <form method="GET" action="{{ route('req_ot')}}">
    @csrf
      <button type="submit" class="req_overtime">残業申請</button>
    </form>
    <form method="GET" action="{{ route('req_vac')}}">
    @csrf
     <button type="submit" class="req_vacation">休暇申請</button>
    </form>
    <form method="GET" action="{{ route('req_correct')}}">
    @csrf
      <button type="submit" class="req_correct">勤務時間の修正申請</button>
    </form>
  </div>
</div>     




<script>
  function updateClock() {
    const now = new Date();

    document.querySelectorAll('#hiddenDate').forEach(el => {
      el.value = now.toISOString().split('T')[0];
    });

    
    const year = now.getFullYear();
    const month = now.getMonth() +1;
    const day = now.getDate();
    const weekday =['日', '月', '火', '水', '木', '金', '土'][now.getDay()];

    document.getElementById('date').textContent =
      `${year}年${month}月${day}日(${weekday})`;

    const timeOptions = {hour: '2-digit',minute: '2-digit',second: '2-digit'};
    document.getElementById('time').textContent =
      now.toLocaleTimeString('ja-JP',timeOptions);
  }

  updateClock();
  setInterval(updateClock,1000);
</script>