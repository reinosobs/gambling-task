<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiliates</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-300 font-sans">
    <nav class="bg-green-700 p-4 text-white flex justify-between items-center">
        @if ($button == 'All Affiliates')
            <h1 class="text-2xl font-semibold text-white-500">Affiliates within 100km of Dublin Office</h1>
            <a href="{{ route('allAffiliates') }}" class="border-b text-white-500 hover:text-green-200">{{ $button }}</a>
        @else
            <h1 class="text-2xl font-semibold text-white-500">All Affiliates</h1>
            <a href="{{ route('closeAffiliates') }}" class="border-b text-white-500 hover:text-green-200">{{ $button }}</a>
        @endif
    </nav>
    <div class="container mx-auto py-12 px-6">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-grey">
                    <tr>
                        <th class="bg-green-600 px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider">ID</th>
                        <th class="bg-green-300 px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-black uppercase tracking-wider">Name</th>
                    </tr>
                </thead>
                <tbody class="bg-green-100">
                    @foreach ($affiliates as $affiliate)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-black-200">{{ $affiliate['affiliate_id'] }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-black-200">{{ $affiliate['name'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>