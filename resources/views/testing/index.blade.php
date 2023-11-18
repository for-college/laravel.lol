<x-bububu xmlns:x-slot="http://www.w3.org/1999/xhtml">
  <x-slot:title>
    title
  </x-slot:title>
  <p style="font-size: {{ $fontSize  }}px;">
    {{ $name }}
  </p>

  <p>Текущее время: {{ date('d-m-Y-H-i-s')  }}</p>
  <p>Кол-во элементов: {{ count($arr) }}</p>
  <p>{{ $arr[1]  }}</p>
  <p>{{ $arr[1] === 'Дмитрий' && 'Диман' }}</p>

  {{-- Условие --}}
  @if ($arr[0] === 'Василий')
    {{$arr[0] = 'Крутой Васлий'}}
  @else
    {{ $arr[2] = 'Лысый' }}
  @endif

  {{-- Пока не --}}
  @unless($isAuth)
    <p>Вы не авторизованы</p>
  @endunless

  {{-- Цикл --}}
  <ol>
    @foreach ($arr as $el)
      @if ($loop->first)
        Начало списка
      @endif

      <li>
        <p>
          {{ $loop->iteration  }}
          {{ $loop->index  }}
          {{ $loop->remaining  }}

          {{ $el }}

          @if ($loop->odd)
            - не четный
          @endif

          @if ($loop->even)
            - четный
          @endif
        </p>
      </li>

      @if ($loop->last)
        Окончание списка
      @endif
    @endforeach
  </ol>

  <ol>
    @foreach ($arr as $key => $el)
      @if ($key % 3 === 1)
        <li>
          {{ $el  }}
        </li>
      @endif
    @endforeach
  </ol>

  <ol>
    @foreach ($students as $key => $student)
      <li>
        {{ $student['surname']  }}

        {{ $student['name']  }}
      </li>
    @endforeach
  </ol>

  <ol>
    @forelse ($empty as $el)
      <li>{{ $empty }}</li>
    @empty
      <p>No users</p>
    @endforelse
  </ol>

  {{-- Задания 7 и 8 --}}

  <div>
    <p>#7 и #8</p>
    <table>
      <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Статус</th>
      </tr>

      @foreach ($users as $user)
        <tr style="background-color: {{ $user['banned'] ? 'red' : ''  }}">
          <td>{{ $user['name'] }}</td>
          <td>{{ $user['surname'] }}</td>
          <td>{{ $user['banned'] ? 'Забанен' : 'Активен' }}</td>
        </tr>
      @endforeach
    </table>
  </div>

  {{-- Задание 9  --}}
  <div style="margin-top: 30px">
    <p># 9</p>

    @foreach($arr as $key => $el)
      <label>
        <input readonly value={{ $el }} type="text" name={{ $key }} id={{ $key }}>
      </label>
      <br/>
    @endforeach
  </div>

  {{-- Задание 10  --}}
  <div style="margin-top: 30px">
    <p># 10</p>

    <label>
      <select>
        @foreach($arr as $el)
          <option>{{ $el }}</option>
        @endforeach
      </select>
    </label>
  </div>

</x-bububu>
