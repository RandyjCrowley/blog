<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medium-Inspired Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fafafa;
            font-family: 'Iosevka', serif;
        }
        .prose {
            max-width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    @include('components.header')
    @include('components.story')
    @include('components.footer')
</body>
</html>
