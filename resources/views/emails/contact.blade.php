<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        .card { background: #fff; padding: 30px; border-radius: 8px; max-width: 500px; margin: auto; }
        h2 { color: #333; }
        p { color: #555; line-height: 1.6; }
        .label { font-weight: bold; color: #111; }
    </style>
</head>
<body>
    <div class="card">
        <h2>📩 Pesan Baru dari Portfolio</h2>
        <p><span class="label">Nama:</span> {{ $data['name'] }}</p>
        <p><span class="label">Email:</span> {{ $data['email'] }}</p>
        <p><span class="label">Pesan:</span><br>{{ $data['message'] }}</p>
    </div>
</body>
</html>