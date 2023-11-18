<table border="1">
  @foreach($students as $student)
    <td>итерация</td>
    <td>имя</td>
    <td>логин</td>
    <td>пароль</td>
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->login }}</td>
      <td>{{ $student->password ? 'Секрет!' : 'Нет' }}</td>
    </tr>
  @endforeach
</table>
