<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create a new Team</title>
</head>
<body>
  <h1>Create your Team</h1>
  <form method="post" action="{{route('team.show')}}">
    @csrf
    @method('post')
    <label for="team_name">Team Name</label>
    <input type="text" name="team_name">
    <button type="submit">Create Team</button>

  </form>
</body>
</html>