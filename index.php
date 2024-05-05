<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Development Indicator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <h1 class="text-3xl font-bold text-center mb-8">State Income Level</h1>
        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Country</th>
                            <th class="px-4 py-2">Region</th>
                            <th class="px-4 py-2">Capital City</th>
                            <th class="px-4 py-2">Income Level</th>
                        </tr>
                    </thead>
                    <tbody id="data-table"></tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
