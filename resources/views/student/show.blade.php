<table>
  @forelse($students as $student)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->surname }}</td>
      <td>{{ $student->patronymic }}</td>
      <td>{{ $student->sex ? 'Мужской' : 'Женский' }}</td>
    </tr>
  @empty
    <p>Нет юзера</p>
  @endforelse

  @dump($students)
</table>
