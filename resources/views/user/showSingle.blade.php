@forelse ($students as $student)
  Юзер с id = {{ $student->id  }}
  <ol>
    <li>
      {{ $loop->iteration }}
    </li>
    <li>
      {{ $student->name }}
    </li>
    <li>
      {{ $student->login }}
    </li>
    <li>
      {{ $student->password ?? 'сЕКРЕТ' }}
    </li>
  </ol>
@empty
  <p>Нет юзера</p>
@endforelse
